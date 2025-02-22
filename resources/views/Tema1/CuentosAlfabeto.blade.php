<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EL ALFABETO MÁGICO DE LA SELVA</title>
  
  <!-- Enlace al CSS -->
  <link rel="stylesheet" href="{{ asset('css/style_book.css') }}" />

</head>

<body>
  <div class="global">
    <div class="container">
      <div class="flipbook">
        <div class="hard">EL ALFABETO MÁGICO DE LA SELVA<small>HOLIS2</small></div>
        <div class="hard"></div>
        <div>
          <small>EL ALFABETO MÁGICO DE LA SELVA</small>
          <small>Aprendamos juntos el Alfabeto Dactílico</small>
        </div>
        <div>
          <img src="{{ asset('images/img-1.png') }}" alt="" />
          <small>
            <center>
                En lo más profundo de la selva boliviana, vivía un mono llamado Lucho. Lucho tenía un sueño muy especial: quería enseñar a todos los animales del bosque el <b>alfabeto en Lengua de Señas Boliviana (LSB)</b>.
            <br><i>"Si aprenden las letras, podrán comunicarse mejor"</i>, pensaba Lucho.
            </center>
            </small>
        </div>
        <div>
          <img src="{{ asset('images/img-2.png') }}" alt="" />
          <small>Un día, Lucho decidió comenzar con la letra <b>A</b>. Se colgó de una rama y levantó su mano para hacer el signo de la <b>A</b> en LSB. <b>"Así se hace el signo de A, amigos"</b>, dijo Lucho.
            <br>La tortuga, curiosa, se acercó y trató de imitarlo.
            </small>
        </div>
        <div>
          <img src="{{ asset('images/img-3.png') }}" alt="" />
          <small>
            <center>
                Más tarde, Lucho encontró a una iguana descansando bajo un árbol. <i><b>"¡Hola, iguana! Vamos a aprender la B"</b></i>, dijo Lucho.
            <br><i><b>"Para hacer el signo de B, solo toca tu frente con tu dedo índice"</b></i>, explicó Lucho mientras hacía el gesto.
            </center>
            </small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small>
            <center>
                Siguió su recorrido y vio a una rana saltando entre los arbustos. <i><b>"¡Es momento de la C!"</b></i> exclamó Lucho.
            <i><b><br>"Para la C, solo haz un círculo con tu mano, como si abrazaras el aire"</b></i>, explicó Lucho, mientras hacía el signo de <b>C</b>.
            </center>
          </small>
        </div>
        <div>
          <img src="{{ asset('images/img-5.png') }}" alt="" />
          <small>
            <center>
                Al final del día, todos los animales de la selva se reunieron. Habían aprendido muchas letras, y la selva se llenó de nuevos sonidos y señas.
                <i><b>"Ahora todos podemos hablar con las letras de LSB"</b></i>, dijo Lucho, feliz de ver que la selva estaba más unida.<br>
                <i><b>"¡El alfabeto es mágico!"</b></i> dijeron todos los animales.
            </center>
          </small>
        </div>
        <div class="hard"></div>
        <div class="hard"><center>¡Gracias por acompañarnos<br>en esta aventura!</center><small>Recuerda que la comunicación nos une. ¡Hasta la próxima!</small></div>
      </div>
    </div>
  </div>

  <!-- Enlace a los scripts JS -->
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/turn.js') }}"></script>

  <script>
    $(".flipbook").turn();
  </script>
</body>

</html>
