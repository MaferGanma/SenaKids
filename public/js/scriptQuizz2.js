// cargo en un arreglo las imganes de las banderas. Este sera el orden que se mostrarán
let banderas = ["pa.svg", "bo.svg", "ad.svg", "gb.svg", "na.svg"];

// arreglo que guardara la opcion correcta
let correcta = [2, 2, 1, 1, 0];

// arreglo que guardara los paises a mostrar en cada jugada
let opciones = [];
// cargo en el arreglo opciones las opciones a mostrar en cada jugada
opciones.push(["NÚMERO 8", "NÚMERO 9", "NÚMERO 10"]);
opciones.push(["NÚMERO 5", "NÚMERO 3", "NÚMERO 2"]);
opciones.push(["NÚMERO 7", "NÚMERO 3", "NÚMERO 2"]);
opciones.push(["NÚMERO 8", "NÚMERO 6", "NÚMERO 9"]);
opciones.push(["NÚMERO 8", "NÚMERO 2", "NÚMERO 4"]);

// variable que guarda la posicion actual
let posActual = 0;
// variable que guarda la cantidad acertadas hasta el momento
let cantidadAcertadas = 0;

function comenzarJuego() {
    // reseteamos las variables
    posActual = 0;
    cantidadAcertadas = 0;
    // activamos las pantallas necesarias
    document.getElementById("pantalla-inicial").style.display = "none";
    document.getElementById("pantalla-juego").style.display = "block";
    cargarBandera();
}

// funcion que carga la siguiente bandera y sus opciones
function cargarBandera() {
    // controlo si se acabaron las banderas
    if (banderas.length <= posActual) {
        terminarJuego();
    } else { // cargo las opciones
        // limpiamos las clases que se asignaron
        limpiarOpciones();

        // Asignamos la ruta completa usando window.assetUrl
        document.getElementById("imgBandera").src = window.assetUrl + "/" + banderas[posActual];
        document.getElementById("n0").innerHTML = opciones[posActual][0];
        document.getElementById("n1").innerHTML = opciones[posActual][1];
        document.getElementById("n2").innerHTML = opciones[posActual][2];
    }
}

function limpiarOpciones() {
    document.getElementById("n0").className = "nombre";
    document.getElementById("n1").className = "nombre";
    document.getElementById("n2").className = "nombre";

    document.getElementById("l0").className = "letra";
    document.getElementById("l1").className = "letra";
    document.getElementById("l2").className = "letra";
}

function comprobarRespuesta(opElegida) {
    if (opElegida == correcta[posActual]) { // acertó
        // agregamos las clases para colocar el color verde a la opcion elegida
        document.getElementById("n" + opElegida).className = "nombre nombreAcertada";
        document.getElementById("l" + opElegida).className = "letra letraAcertada";
        cantidadAcertadas++;
    } else { // no acerto
        // agramos las clases para colocar en rojo la opcion elegida
        document.getElementById("n" + opElegida).className = "nombre nombreNoAcertada";
        document.getElementById("l" + opElegida).className = "letra letraNoAcertada";

        // opcion que era correcta
        document.getElementById("n" + correcta[posActual]).className = "nombre nombreAcertada";
        document.getElementById("l" + correcta[posActual]).className = "letra letraAcertada";
    }
    posActual++;
    // Esperamos 1 segundo y pasamos mostrar la siguiente bandera y sus opciones
    setTimeout(cargarBandera, 1000);
}

function terminarJuego() {
    // ocultamos las pantallas y mostramos la pantalla final
    document.getElementById("pantalla-juego").style.display = "none";
    document.getElementById("pantalla-final").style.display = "block";
    // agregamos los resultados
    document.getElementById("numCorrectas").innerHTML = cantidadAcertadas;
    document.getElementById("numIncorrectas").innerHTML = banderas.length - cantidadAcertadas;
}

function volverAlInicio() {
    // ocultamos las pantallas y activamos la inicial
    document.getElementById("pantalla-final").style.display = "none";
    document.getElementById("pantalla-inicial").style.display = "block";
    document.getElementById("pantalla-juego").style.display = "none";
}
