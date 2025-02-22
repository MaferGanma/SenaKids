<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EL SECRETO DEL ARCOÍRIS</title>
  
  <!-- Enlace al CSS -->
  <link rel="stylesheet" href="{{ asset('css/style_book.css') }}" />

</head>

<body>
  <div class="global">
    <div class="container">
      <div class="flipbook">
        <div class="hard">EL SECRETO DEL ARCOÍRIS<small>HOLIS2</small></div>
        <div class="hard"></div>
        <div>
          <small>EL SECRETO DEL ARCOÍRIS</small>
          <small>Descubre los colores en Lengua de Señas Boliviana.</small>
        </div>
        <div>
          <img src="{{ asset('images/img-1.png') }}" alt="" />
          <small> <center>
            Un día, el sol y la lluvia se encontraron en el cielo. El sol, brillante y cálido, dijo:
            <i><b>"¡Quiero mostrar algo especial!"</b></i><br>
            La lluvia, curiosa, aceptó.  
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-2.png') }}" alt="" />
          <small> <center>
            Juntos, el sol y la lluvia formaron un hermoso arcoíris. <i><b>"Mira"</b></i>, dijo el sol, <i><b>"cada color tiene un poder especial.
            El rojo nos da energía"</b></i>, explicó mientras hacía el signo de <b>rojo</b> en LSB, colocando su puño sobre el pecho.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-3.png') }}" alt="" />
          <small> <center>
            <i><b>"El azul nos calma"</b></i>, continuó el sol, moviendo su mano como si acariciara el aire, señalando el <b>color azul. <br><i>"Es un color tranquilo como el cielo"</i></b>.  
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small> <center>
            <i><b>"El amarillo nos hace sonreír"</b></i>, dijo el sol con una gran sonrisa, mientras señalaba el <b>color amarillo</b> con su mano en forma de círculo sobre su cabeza.
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-5.png') }}" alt="" />
          <small><center>
            <i><b>"Y el verde nos recuerda la naturaleza"</b></i>, dijo el sol mientras extendía su mano, moviéndola como si tocara las hojas de los árboles.  
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Desde ese día, todos los niños del mundo miraban al cielo, aprendiendo que cada color tiene su propio poder. Juntos, el sol y la lluvia hacían el mundo más <b>hermoso</b> y lleno de <b>magia</b>.
          </center></small>
        </div>
        <div>
          {{-- <img src="{{ asset('images/img-4.png') }}" alt="" /> --}}
          <small><center>
            <b>FIN</b> 
          </center></small>
        </div>
        <div class="hard"></div>
        <div class="hard"><center>¡Gracias por unirte a nuestra aventura del arcoíris!</center> 
            <small><center>
              Ahora sabes los colores en Lengua de Señas Boliviana.
              <br>¡Nos vemos en la próxima historia!  
            </center></small></div>
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
