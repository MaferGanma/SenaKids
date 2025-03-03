const cards = document.querySelectorAll('.card');
const num_parejas = document.querySelector('.container h2 span')

let tar_1, tar_2, deshabilitarCartas = false;
let parejas = 0;
let intentos = 0;
const maxIntentos = 16;

let sonidos = document.querySelector('#sonidos')
let fondo = document.querySelector('#fondo')

let escuchar = document.querySelector('#escuchar');
let span_intentos = document.querySelector('#intentos');

const sonidoDeFondo = (e) =>{
    if(fondo.volume == 0.0){
        fondo.volume = 0.1
        return  escuchar.innerHTML="Sonido: ON"
    }
    fondo.volume = 0.0
    return  escuchar.innerHTML="Sonido: OFF"
}

escuchar.addEventListener('click', sonidoDeFondo)

sonidos.play

const darVuelta = (e) => {
    let tarjeta = e.target;

    if(tarjeta!== tar_1 && !deshabilitarCartas){
        tarjeta.classList.add("vuelta")
        if(!tar_1){
            return tar_1=tarjeta;
        }
        tar_2 = tarjeta
        deshabilitarCartas = true

        let img1 = tar_1.querySelector('img').src
        let img2 = tar_2.querySelector('img').src
        console.log(img1);
        sonIguales(img1, img2)
    }
}

const sonIguales = (imagen1, imagen2) => {
    intentos++;
    span_intentos.innerHTML = intentos;

    if (imagen1 === imagen2) {
        sonidos.src = window.location.origin + "/sounds/success.mp3";
        sonidos.volume = 0.3;
        sonidos.play();

        parejas++;
        num_parejas.innerHTML = parejas;

        if (parejas === 8) {
            sonidos.src = window.location.origin + "/sounds/victoria.mp3";
            sonidos.volume = 0.3;
            sonidos.play();

            setTimeout(mostrarResultados, 1000);
        }

        tar_1.removeEventListener("click", darVuelta);
        tar_2.removeEventListener("click", darVuelta);
        tar_1 = tar_2 = "";
        deshabilitarCartas = false;
        return;
    }

    setTimeout(() => {
        tar_1.classList.add("moverse");
        tar_2.classList.add("moverse");

        sonidos.src = window.location.origin + "/sounds/error.mp3";

        sonidos.volume = 0.5;
        sonidos.play();
    }, 500);

    setTimeout(() => {
        tar_1.classList.remove("moverse", "vuelta");
        tar_2.classList.remove("moverse", "vuelta");
        tar_1 = tar_2 = "";
        deshabilitarCartas = false;
    }, 1500);
};

const reiniciarJuego = () => {
    fondo.src = window.location.origin + "/sounds/musica.mp3";
    fondo.volume = 0.1;

    intentos = 0;
    parejas = 0;
    tar_1 = tar_2 = "";
    deshabilitarCartas = false;
    num_parejas.innerHTML = parejas;

    let fichas = [1,2,3,4,5,6,7,8,1,2,3,4,5,6,7,8];
    fichas.sort(() => {
        return Math.random() - 0.5;
    });

    cards.forEach((tarjeta, index) => {
        tarjeta.classList.remove("vuelta");
        let img = tarjeta.querySelector('img');
        img.src = `/images/memograma/${fichas[index]}.jpg`;
        tarjeta.addEventListener('click', darVuelta);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const startButton = document.getElementById('startButton');

    if (startButton) {
        startButton.addEventListener('click', () => {
            reiniciarJuego();
            fondo.play().catch(error => {
                console.log("Error al reproducir audio:", error);
            });
        });
    }
});

let primerInteraccion = true;
document.addEventListener('click', () => {
    if (primerInteraccion) {
        fondo.play().catch(error => {
            console.log("Error al reproducir audio:", error);
        });
        primerInteraccion = false;
    }
}, { once: true });

reiniciarJuego()
cards.forEach(tarjeta => {
    tarjeta.addEventListener('click', darVuelta)
})

const mostrarResultados = () => {
    // Calcular la calificación
    const calificacion = calcularCalificacion(intentos, maxIntentos);

    // Mostrar el resultado en el modal
    document.getElementById("modalResultados").style.display = "flex";
    document.getElementById("totalIntentos").innerText = `Puntaje: ${calificacion} puntos`;

    guardarPuntaje(calificacion);
};

const cerrarModal = () => {
    document.getElementById("modalResultados").style.display = "none";
};

document.getElementById("btnReintentar").addEventListener("click", () => {
    cerrarModal();
    reiniciarJuego();
});

document.getElementById("btnSiguiente").addEventListener("click", () => {
    cerrarModal();
    alert("Aquí puedes redirigir a otra fase del juego.");
});

const calcularCalificacion = (intentos, maxIntentos) => {
    const intentosIdeales = maxIntentos; // Mínimo de intentos para puntaje máximo
    let calificacion = 100;
    console.log(calificacion)
    console.log(intentos)

    //15/15
    if (intentos > intentosIdeales) {
        const penalizacion = (intentos - intentosIdeales) * 10; // Restar 10 puntos por cada intento extra
        calificacion -= penalizacion;
    }

    // Asegurarse de que la calificación no sea menor que 0
    return Math.max(calificacion, 0);
}

const guardarPuntaje = (calificacion) => {
    const nombreUsuario = 'Jugador1'; // Aquí debes obtener el nombre del jugador o lo que sea necesario

    fetch('/guardar-puntaje', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // CSRF token
        },
        body: JSON.stringify({
            nombre_usuario: nombreUsuario,
            calificacion: calificacion,
        }),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Puntaje guardado:', data);
    })
    .catch(error => {
        console.error('Error al guardar el puntaje:', error);
    });
};
