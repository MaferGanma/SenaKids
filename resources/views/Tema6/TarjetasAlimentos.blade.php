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
                <h1>Seña: Manzana</h1>
                <p>Manzana en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/manzanas.gif')}}" alt="manzanas">
            </div>
            
            <div class="item">
                <h1>Seña: Verduras</h1>
                <p>Verduras en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/verduras.gif')}}" alt="verduras">
            </div>
            
            <div class="item">
                <h1>Seña: Zanahoria</h1>
                <p>Zanahoria en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/zanahoria.gif')}}" alt="zanahoria">
            </div>

            <div class="item">
                <h1>Seña: Alimentos</h1>
                <p>Alimentos en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/alimentos.gif')}}" alt="alimentos">
            </div>
            
            <div class="item">
                <h1>Seña: Pan</h1>
                <p>Pan en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/pan.gif')}}" alt="pan">
            </div>
            
            <div class="item">
                <h1>Seña: Leche</h1>
                <p>Leche en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/leche.gif')}}" alt="leche">
            </div>
            
            <div class="item">
                <h1>Seña: Carne</h1>
                <p>Carne en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/carne.gif')}}" alt="carne">
            </div>
            
            <div class="item">
                <h1>Seña: Fideo</h1>
                <p>Fideo en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/fideo.gif')}}" alt="fideo">
            </div>
            
            <div class="item">
                <h1>Seña: Queso</h1>
                <p>Queso en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/queso.gif')}}" alt="queso">
            </div>
            
            <div class="item">
                <h1>Seña: Arroz</h1>
                <p>Arroz en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/arroz1.gif')}}" alt="arroz">
            </div>
            
            <div class="item">
                <h1>Seña: Arroz (Variante 2)</h1>
                <p>Segunda forma de arroz en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/arroz2.gif')}}" alt="arroz2">
            </div>
            
            <div class="item">
                <h1>Seña: Aceite</h1>
                <p>Aceite en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/aceite.gif')}}" alt="aceite">
            </div>
            
            <div class="item">
                <h1>Seña: Café</h1>
                <p>Café en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/cafe.gif')}}" alt="cafe">
            </div>
            
            <div class="item">
                <h1>Seña: Azúcar</h1>
                <p>Azúcar en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/azucar.gif')}}" alt="azucar">
            </div>
            
            <div class="item">
                <h1>Seña: Té</h1>
                <p>Té en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/te.gif')}}" alt="te">
            </div>
            
            <div class="item">
                <h1>Seña: Galletas</h1>
                <p>Galletas en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/galletas.gif')}}" alt="galletas">
            </div>
            
            <div class="item">
                <h1>Seña: Frutas</h1>
                <p>Frutas en lengua de señas.</p>
                <img src="{{ asset('/images/Tema6_Alimentos/frutas.gif')}}" alt="frutas">
            </div>
            <button id="next">></button>
            <button id="prev"><</button>
        </div>
    </div>

    <!-- Usamos asset() para cargar el archivo JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
