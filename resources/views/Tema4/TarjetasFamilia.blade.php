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
                <h1>Seña: Hija</h1>
                <p>Este es la hija en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/hija.gif')}}" alt="hija">
            </div>
            
            <div class="item">
                <h1>Seña: Hermano</h1>
                <p>Este es el hermano en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/hermano.gif')}}" alt="hermano">
            </div>
            
            <div class="item">
                <h1>Seña: Hermana</h1>
                <p>Este es la hermana en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/hermana.gif')}}" alt="hermana">
            </div>
            {{-- Aca comenzamos --}}
            <div class="item">
                <h1>Seña: Familia</h1>
                <p>La familia en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/familia.gif')}}" alt="familia">
            </div>
            
            <div class="item">
                <h1>Seña: Hombre</h1>
                <p>Este es el hombre en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/hombre.gif')}}" alt="hombre">
            </div>
            
            <div class="item">
                <h1>Seña: Mujer</h1>
                <p>Este es la mujer en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/mujer.gif')}}" alt="mujer">
            </div>
            
            <div class="item">
                <h1>Seña: Papá</h1>
                <p>Este es el papá en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/papa.gif')}}" alt="papa">
            </div>
            
            <div class="item">
                <h1>Seña: Esposo</h1>
                <p>Este es el esposo en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/esposo.gif')}}" alt="esposo">
            </div>
            
            <div class="item">
                <h1>Seña: Mamá</h1>
                <p>Este es la mamá en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/mama.gif')}}" alt="mama">
            </div>
            
            <div class="item">
                <h1>Seña: Esposa</h1>
                <p>Este es la esposa en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/esposa.gif')}}" alt="esposa">
            </div>
            
            <div class="item">
                <h1>Seña: Bebé</h1>
                <p>Este es el bebé en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/bebe.gif')}}" alt="bebe">
            </div>
            
            <div class="item">
                <h1>Seña: Abuelo</h1>
                <p>Este es el abuelo en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/abuelo.gif')}}" alt="abuelo">
            </div>
            
            <div class="item">
                <h1>Seña: Abuela</h1>
                <p>Este es la abuela en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/abuela.gif')}}" alt="abuela">
            </div>
            
            <div class="item">
                <h1>Seña: Hijo</h1>
                <p>Este es el hijo en lengua de señas.</p>
                <img src="{{ asset('/images/Tema4_Familia/hijo.gif')}}" alt="hijo">
            </div>
            
            <button id="next">></button>
            <button id="prev"><</button>
        </div>
    </div>

    <!-- Usamos asset() para cargar el archivo JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
