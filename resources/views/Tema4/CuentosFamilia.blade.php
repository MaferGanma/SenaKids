<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EL ABRAZO DE LA FAMILIA</title>
  
  <!-- Enlace al CSS -->
  <link rel="stylesheet" href="{{ asset('css/style_book.css') }}" />

</head>

<body>
  <div class="global">
    <div class="container">
      <div class="flipbook">
        <div class="hard">EL ABRAZO DE LA FAMILIA<small>HOLIS2</small></div>
        <div class="hard"></div>
        <div>
          <small>❤️EL ABRAZO DE LA FAMILIA❤️</small>
          <small>Exploramos el significado de la familia en LSB</small>
        </div>
        <div>
          <img src="{{ asset('images/img-1.png') }}" alt="" />
          <small> <center>
            Había una vez una niña llamada Sofy. Ella vivía con su familia en una casita cerca del bosque. <br>
            Un día, Sofy se sentó a pensar: <i><b>"¿Qué significa realmente la palabra familia?"  </b></i>
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-2.png') }}" alt="" />
          <small> <center>
            En ese momento, su mamá llegó y la abrazó. <i><b>"La familia es quien te cuida y te quiere"</b></i>, dijo mamá.
            <br><i><b>"En LSB, el signo para mamá es tocándote la barbilla con la mano"</b></i>, explicó <b>mamá</b> mientras señalaba su mentón.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-3.png') }}" alt="" />
          <small> <center>
            Luego, papá se acercó y levantó a Sofy en el aire. <i><b>"El papá es quien te cuida y te protege"</b></i>, dijo con una sonrisa.<br>
            <i><b>"El signo para papá es hacer un puño sobre la frente"</b></i>, explicó <b>papá</b> mientras hacía el gesto.  
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small> <center>
            Sofy miró a sus <b>hermanos</b>, que estaban jugando juntos. <i><b>"Y los hermanos son esos compañeros que siempre están a tu lado"</b></i>, dijo Sofy.<br>
            <i><b>"En LSB, el signo para hermanos es juntar dos manos con los dedos extendidos, como si fueran dos personas"</b></i>, explicó Sofy mientras imitaba el signo.
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-5.png') }}" alt="" />
          <small><center>
            Al final del día, Sofy abrazó a su familia y pensó: <i><b>"La familia es todo el amor que compartimos, y siempre estaremos juntos."<br>
            "¡La familia siempre está unida!"</b></i>, dijo Sofy, feliz de haber aprendido el significado de <b>familia en LSB</b>.  
          </center></small>
        </div>
        
        <div class="hard"></div>
        <div class="hard"><center>¡Gracias por aprender sobre la familia con nosotros!</center> 
            <small><center>Ahora sabes cómo expresar el amor familiar en Lengua de Señas Boliviana. ¡Nos vemos en la próxima aventura!</center></small></div>
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
