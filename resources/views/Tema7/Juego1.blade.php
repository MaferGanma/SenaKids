<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drag and Drop</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/styleDragAndDrop.css') }}" />
  </head>
  <body>
    <div class="container">
      <h3>¡Hazlo rápido, el tiempo cuenta!</h3>
      <div class="draggable-objects"></div>
      <div class="drop-points"></div>
    </div>
    <div class="controls-container">
      <h1><center>¡COLOCA LOS DÍAS DE LA SEMANA!</center></h1>
      <h4>Arrastra las señas de los días a su lugar correcto</h4>
      <p id="result"></p>
      <button id="start">Comenzar a Jugar</button>
    </div>
    <div id="timeDisplay" style="position: absolute; top: 10px; right: 10px; font-size: 1.5em; color: #fff;">
      Tiempo: 0.00s
    </div>
    
    <!-- Script -->
    <script src="{{ asset('js/scriptDragAndDrop7.js') }}"></script>
  </body>
</html>
