const cards = document.querySelectorAll('.card');
const num_parejas = document.querySelector('.container h2 span')

let tar_1, tar_2, deshabilitarCartas = false;
let parejas = 0;
let intentos = 0;

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
            // sonidos.src = 'sounds/victoria.mp3';
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

// Opción 1: Modificar la función reiniciarJuego para no iniciar el audio automáticamente
const reiniciarJuego = () => {
    fondo.src = window.location.origin + "/sounds/musica.mp3";
    fondo.volume = 0.1;
    // No reproducir automáticamente aquí

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

// Opción 2: Crear un botón de inicio que active el juego y la música
document.addEventListener('DOMContentLoaded', () => {
    // Añadir un botón o pantalla de inicio al HTML
    const startButton = document.getElementById('startButton'); // Debes crear este botón en tu HTML

    if (startButton) {
        startButton.addEventListener('click', () => {
            reiniciarJuego();
            // Ahora sí podemos reproducir el audio porque hubo interacción
            fondo.play().catch(error => {
                console.log("Error al reproducir audio:", error);
            });
        });
    }
});

// Opción 3: Reproducir música con el primer clic en cualquier parte
let primerInteraccion = true;
document.addEventListener('click', () => {
    if (primerInteraccion) {
        fondo.play().catch(error => {
            console.log("Error al reproducir audio:", error);
        });
        primerInteraccion = false;
    }
}, { once: true }); // 'once: true' hace que el evento solo se active una vez

reiniciarJuego()
cards.forEach(tarjeta => {
    // tarjeta.classList.remove("vuelta")
    tarjeta.addEventListener('click', darVuelta)
})

// funciones modal

const mostrarResultados = () => {
    document.getElementById("modalResultados").style.display = "flex";
    document.getElementById("totalIntentos").innerText = intentos;
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


