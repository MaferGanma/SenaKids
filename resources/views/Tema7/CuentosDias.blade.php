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
        <div class="hard">HOLIS <small>HOLIS2</small></div>
        <div class="hard"></div>
        <div>
          <small>d</small>
          <small>Descubrimos los días en LSB</small>
        </div>
        <div>
          <img src="{{ asset('images/img-1.png') }}" alt="" />
          <small> <center>
            La profesora Vania comenzó la clase. <i><b>“Hoy vamos a aprender los días de la semana en Lengua de Señas Boliviana (LSB)”</b></i>, dijo. <br>
            María levantó la mano emocionada. <i><b>“La seña de lunes es muy fácil”</b></i>, explicó la profesora, haciendo el signo de <b>lunes</b>.  
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-2.png') }}" alt="" />
          <small> <center>
            Carlos dijo: <i><b>“Quiero aprender cómo se dice martes”</b></i>. La profesora Vania hizo el signo de <b>martes</b>. <br>
            <i><b>“Martes es el día que jugamos fútbol en el recreo”</b></i>, dijo Carlos haciendo el signo.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-3.png') }}" alt="" />
          <small> <center>
            Karen levantó la mano. <i><b>“Miércoles es el día que vamos al parque”</b></i>. <br>
            La profesora Vania enseñó la seña de <b>miércoles</b>.  
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small> <center>
            Marcos preguntó: <i><b>“¿Cómo se dice jueves?”</b></i> La profesora Vania hizo el signo de <b>jueves</b>. <br>
            Marcos la imitó. <i><b>“Los jueves hacemos manualidades en clase”</b></i>, comentó.
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-5.png') }}" alt="" />
          <small><center>
            De pronto la profesora dijo: <i><b>“Aprendamos cómo se dice viernes”</b></i>. <br>
            María levantó la mano. <i><b>“Viernes es el mejor día porque ¡el fin de semana está cerca!”.</b></i> La profesora hizo el signo de viernes.  
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Juan preguntó: <i><b>“¿Y el sábado?”</b></i>. La profesora Vania hizo el signo de <b>sábado</b>. <br>
            <i><b>“El sábado es para descansar y disfrutar con la familia”</b></i>, dijo Juan.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Karen levantó la mano otra vez:<i><b>“¿Cómo se dice domingo?”</b></i>. <br>
            La profesora Vania mostró el signo de domingo. <i><b>“En domingo, me gusta ir al parque con mi familia”</b></i>, dijo Karen.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Al final del día, los niños ya sabían los días de la semana en LSB. <br>
            La profesora Vania les sonrió. <i><b>“Recuerden que cada día tiene algo especial. ¡Sigamos aprendiendo juntos!”.</b></i>
          </center></small>
        </div>
        <div>
          {{-- <img src="{{ asset('images/img-4.png') }}" alt="" /> --}}
          <small><center>
            FIN
          </center></small>
        </div>
        <div class="hard"></div>
        <div class="hard"><center>¡Gracias por aprender los días de la semana con nosotros!</center> 
            <small><center>Ahora conoces cómo expresarlos en Lengua de Señas Boliviana. ¡Hasta la próxima aventura de aprendizaje!</center></small></div>
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
