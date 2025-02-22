<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LA AVENTURA DE LOS NÚMEROS EN EL ESPACIO</title>
  
  <!-- Enlace al CSS -->
  <link rel="stylesheet" href="{{ asset('css/style_book.css') }}" />

</head>

<body>
  <div class="global">
    <div class="container">
      <div class="flipbook">
        <div class="hard">LA AVENTURA DE LOS NÚMEROS EN EL ESPACIO<small>HOLIS2</small></div>
        <div class="hard"></div>
        <div>
          <small>LA AVENTURA DE LOS NÚMEROS EN EL ESPACIO</small>
          <small>Aprendamos los números en LSB</small>
        </div>
        <div>
          <img src="{{ asset('images/img-1.png') }}" alt="" />
          <small> <center>
          Una noche estrellada, el pequeño Nicolás miró al cielo y vio algo increíble: ¡los números flotaban en el espacio!<i>
          "¡Qué emocionante!"</i>, pensó Nicolás. <b>"Voy a descubrir qué hacen los números en el espacio." </b> 
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-2.png') }}" alt="" />
          <small> <center>
            De repente, apareció el <b>número 1</b> flotando cerca de él. <i><b>"¡Hola, Nicolás! Soy el número 1. En el espacio, todos empezamos desde el número 1, el primero"</b></i>, dijo el número con una gran sonrisa.
            <br>Nicolás levantó su mano e hizo el signo de <b>1</b> en LSB.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-3.png') }}" alt="" />
          <small> 
            Luego, el <b>número 2</b> apareció girando en órbitas. <i><b>"¡Hola! Soy el número 2. En el espacio, siempre hay un compañero, como tú y yo"</b></i>, dijo el número 2.<br>
            Nicolás levantó dos dedos y los señaló hacia el cielo, mostrando el signo de <b>2</b> en LSB.  
           </small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small> <center>
            A lo lejos, el <b>número 3</b> llegó dando saltos. <i><b>"¡Soy el número 3! En el espacio hay muchas cosas que vienen de tres, como las lunas de algunos planetas"</b></i>, explicó el número 3.<br>
            Nicolás levantó tres dedos y los señaló al frente, haciendo el signo de <b>3</b> en LSB.
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-5.png') }}" alt="" />
          <small><center>
            De repente, un <b>número 4</b> apareció flotando hacia ellos. <i><b>"¡Soy el número 4! En el espacio, las estrellas se agrupan en constelaciones, y algunas tienen 4 estrellas"</b></i>, dijo el número 4.<br>
            Nicolás levantó cuatro dedos y los mostró en el aire, haciendo el signo de <b>4</b>.  
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Cuando Nicolás ya pensaba que su aventura había terminado, vio una enorme nave espacial. ¡Era el número 5! <b><i>"¡Soy el número 5! En el espacio, algunas naves tienen 5 partes"</i></b>, dijo el <b>número 5</b> mientras descendía de la nave.<br>
            Nicolás levantó 5 dedos y los mostró al cielo, haciendo el signo de <b>5</b>.
          </center></small>
        </div>
        <div>
          {{-- <img src="{{ asset('images/img-4.png') }}" alt="" /> --}}
          <small><center>
            <b>FIN</b> 
          </center></small>
        </div>
        <div class="hard"></div>
        <div class="hard"><center>Gracias por viajar con nosotros a través del espacio</center> 
            <small>¡Hasta nuestra próxima aventura!</small></div>
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
