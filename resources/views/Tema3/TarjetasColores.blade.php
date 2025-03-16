<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>

    <!-- Usamos asset() para cargar el archivo CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="slider">
            <div class="item">
                <h1>Seña: Negro</h1>
                <p>Este es el negro en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/negro.gif') }}" alt="negro">
            </div>

            <div class="item">
                <h1>Seña: Celeste</h1>
                <p>Este es el celeste en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/celeste.gif') }}" alt="celeste">
            </div>

            <div class="item">
                <h1>Seña: Lila</h1>
                <p>Este es el lila en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/lila.gif') }}" alt="lila">
            </div>

            <div class="item">
                <h1>Seña: Colores</h1>
                <p>Los colores en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/colores.gif') }}" alt="colores">
            </div>
            <div class="item">
                <h1>Seña: Amarillo</h1>
                <p>Este es el amarillo en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/amarillo.gif') }}" alt="amarillo">
            </div>

            <div class="item">
                <h1>Seña: Azul</h1>
                <p>Este es el azul en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/azul.gif') }}" alt="azul">
            </div>

            <div class="item">
                <h1>Seña: Rojo</h1>
                <p>Este es el rojo en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/rojo.gif') }}" alt="rojo">
            </div>

            <div class="item">
                <h1>Seña: Blanco</h1>
                <p>Este es el blanco en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/blanco.gif') }}" alt="blanco">
            </div>

            <div class="item">
                <h1>Seña: Café</h1>
                <p>Este es el café en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/cafe.gif') }}" alt="cafe">
            </div>

            <div class="item">
                <h1>Seña: Naranja</h1>
                <p>Este es el naranja en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/naranja.gif') }}" alt="naranja">
            </div>

            <div class="item">
                <h1>Seña: Verde</h1>
                <p>Este es el verde en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/verde.gif') }}" alt="verde">
            </div>

            <div class="item">
                <h1>Seña: Rosado</h1>
                <p>Este es el rosado en lengua de señas.</p>
                <img src="{{ asset('/images/Tema3_Colores/rosado.gif') }}" alt="rosado">
            </div>
            <button id="next">></button>
            <button id="prev"><</button>
        </div>
    </div>

    <!-- Usamos asset() para cargar el archivo JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
