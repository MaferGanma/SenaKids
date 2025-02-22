<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Verbos</title>
  
  <!-- Enlace al CSS -->
  <link rel="stylesheet" href="{{ asset('css/style_book.css') }}" />

</head>

<body>
  <div class="global">
    <div class="container">
      <div class="flipbook">
        <div class="hard">VAMOS DE PASEO JUNTO A WARA<small>uis</small></div>
        <div class="hard"></div>
        <div>
          <small>Vamos de Paseo Junto a Wara</small>
          <small>Aprendiendo verbos en Lengua de Señas Boliviana (LSB)</small>
        </div>
        <div>
          <img src="{{ asset('images/img-1.png') }}" alt="" />
          <small><center>
            Un día soleado, Wara y su amigo Tomás decidieron tener un picnic en el parque. <br>
            Wara miró el hermoso paisaje y le dijo a Tomás: <i><b>“¡Vamos a disfrutar de este día!”</b></i>.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-2.png') }}" alt="" />
          <small><center>
            Primero, Wara y Tomás se sentaron y comenzaron a comer las galletas que prepararon.<br>
            <i><b>“Mira, así se dice comer en señas”</b></i>, dijo Wara, mostrando el signo de <b>comer</b> en lengua de señas.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-3.png') }}" alt="" />
          <small><center>
            Después de comer, Tomás sacó una botella de jugo y dijo: <i><b>“Es hora de beber algo refrescante”</b></i>. Mientras Wara le mostraba cómo se dice <b>beber</b> en señas.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Mientras disfrutaban del jugo, Wara comenzó a reír por una broma que Tomás contó. <br>
            <b><i>“¡Reír es muy divertido! Mira cómo se dice reír en señas”</i></b>, dijo Wara, mostrando el signo.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-5.png') }}" alt="" />
          <small>
            <center>
              Tomás se dio cuenta de que habían olvidado traer un cuchillo para cortar la fruta.
              <i><b>“¿Cómo vamos a cortar la manzana?”</b></i>, preguntó.<br>Wara le mostró el signo de <b>cortar</b> en lengua de señas.
            </center>
          </small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Al final del día, Wara y Tomás se acostaron en el césped y comenzaron a pensar en todas las aventuras que tuvieron. 
            <i><b>“Pensar en todo lo que hicimos hoy es genial”</b></i>, dijo Wara, mostrando el signo de <b>pensar</b> en señas.
          </center></small>
        </div>
        <div>
          {{-- <img src="{{ asset('images/img-5.png') }}" alt="" /> --}}
          <small>
            <center>
              FIN
            </center>
          </small>
        </div>
        <div class="hard"></div>
        <div class="hard"><center>
          ¡Gracias por acompañarnos en el día mágico de Wara!</center><small><center>
            Ahora conoces algunos verbos en Lengua de Señas Boliviana. ¡Hasta la próxima aventura educativa!</center></small></div>
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
