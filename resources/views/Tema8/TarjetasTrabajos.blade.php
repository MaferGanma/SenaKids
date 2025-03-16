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
                <h1>Seña: Enfermera</h1>
                <p>Enfermera en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/enfermera.gif')}}" alt="enfermera">
            </div>
            
            <div class="item">
                <h1>Seña: Dentista</h1>
                <p>Dentista en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/dentista.gif')}}" alt="dentista">
            </div>
            
            <div class="item">
                <h1>Seña: Comerciante</h1>
                <p>Comerciante en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/comerciante.gif')}}" alt="comerciante">
            </div>

            <div class="item">
                <h1>Seña: Trabajos</h1>
                <p>Trabajos en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/trabajo.gif')}}" alt="trabajo">
            </div>
            
            <div class="item">
                <h1>Seña: Albañil</h1>
                <p>Albañil en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/albanil.gif')}}" alt="albañil">
            </div>
            
            <div class="item">
                <h1>Seña: Secretaria</h1>
                <p>Secretaria en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/secretaria.gif')}}" alt="secretaria">
            </div>
            
            <div class="item">
                <h1>Seña: Abogado</h1>
                <p>Abogado en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/abogado.gif')}}" alt="abogado">
            </div>
            
            <div class="item">
                <h1>Seña: Policía</h1>
                <p>Policía en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/policia.gif')}}" alt="policia">
            </div>
            
            <div class="item">
                <h1>Seña: Doctor</h1>
                <p>Doctor en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/doctor.gif')}}" alt="doctor">
            </div>
            
            <div class="item">
                <h1>Seña: Maestro</h1>
                <p>Maestro en lengua de señas.</p>
                <img src="{{ asset('/images/Tema8_Trabajos/maestro.gif')}}" alt="maestro">
            </div>
            <button id="next">></button>
            <button id="prev"><</button>
        </div>
    </div>

    <!-- Usamos asset() para cargar el archivo JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
