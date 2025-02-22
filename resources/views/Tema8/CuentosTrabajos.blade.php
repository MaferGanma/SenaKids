<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pokemon Magazine</title>
  
  <!-- Enlace al CSS -->
  <link rel="stylesheet" href="{{ asset('css/style_book.css') }}" />

</head>

<body>
  <div class="global">
    <div class="container">
      <div class="flipbook">
        <div class="hard">LOS OFICIOS DEL PUEBLO<small>HOLIS2</small></div>
        <div class="hard"></div>
        <div>
          <small>Los Oficios del Pueblo</small>
          <small>Aprendiendo las profesiones en Lengua de Señas Boliviana (LSB)</small>
        </div>
        <div>
          <img src="{{ asset('images/img-1.png') }}" alt="" />
          <small> <center>
            Juan caminaba por el pequeño pueblo de Cajamarca. Tenía mucha curiosidad y quería aprender algo nuevo. Mientras paseaba por la plaza, vio a diferentes personas trabajando. <br>
            <i>“Hoy aprenderé sobre las profesiones y cómo se dicen en señas”</i>, pensó.  
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-2.png') }}" alt="" />
          <small> <center>
            Primero, Juan llegó a la cocina de Pedro. <br> <i><b>“¡Hola, Juan! Soy Pedro, el cocinero. Yo preparo las comidas más deliciosas del pueblo."</b></i> Mientras Pedro hacía la seña de la profesión de <b>cocinero</b>.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-3.png') }}" alt="" />
          <small> <center>
            Juan siguió caminando y vio a José, el <b>carpintero</b>, trabajando.<br>
            <i><b>“¡Hola, Juan! Soy José, el carpintero. Con la madera hago mesas, sillas y más. Mira cómo se dice carpintero en señas”</b></i>, dijo José, mostrando el signo.  
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small> <center>
            Un poco más allá, Juan encontró a Laura, la <b>doctora</b>.
            <i><b>“Soy Laura, la doctora. Cuido a las personas cuando se sienten mal. Mira cómo se dice doctora en señas”</b></i>, explicó Laura.
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-5.png') }}" alt="" />
          <small><center>
            Juan siguió su camino y vio a Vania, la profesora. <br> 
            <i><b>“¡Hola, Juan! Soy Vania, la profesora. Enseño a los niños a leer, escribir y aprender muchas cosas. Mira cómo se dice profesora en señas”</b></i>, explicó Vania.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Juan aprendió muchos signos ese día.
<i>“Cada oficio es importante y tiene un significado especial”</i>, pensó.<br>
<i><b>“Ahora sé cómo decir las profesiones en señas. ¡Y me encanta aprenderlas con mis amigos!”.</b></i>
Juan volvió a casa feliz, sabiendo que cada trabajo hacía que el pueblo fuera un lugar mejor.
          </center></small>
        </div>
        <div>
          {{-- <img src="{{ asset('images/img-4.png') }}" alt="" /> --}}
          <small><center>
            FIN 
          </center></small>
        </div>
        <div class="hard"></div>
        <div class="hard"><center>¡Gracias por explorar los oficios del pueblo con nosotros!</center> 
            <small><center>Ahora conoces cómo expresarlos en Lengua de Señas Boliviana. ¡Hasta la próxima aventura educativa!</center></small></div>
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
