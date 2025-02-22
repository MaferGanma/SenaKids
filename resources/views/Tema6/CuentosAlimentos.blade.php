<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Un Viaje por el Mercado de los Alimentos</title>
  
  <!-- Enlace al CSS -->
  <link rel="stylesheet" href="{{ asset('css/style_book.css') }}" />

</head>

<body>
  <div class="global">
    <div class="container">
      <div class="flipbook">
        <div class="hard">UN VIAJE POR EL MERCADO DE LOS ALIMENTOS<small>HOLIS2</small></div>
        <div class="hard"></div>
        <div>
          <small>UN VIAJE POR EL MERCADO DE LOS ALIMENTOS</small>
          <small>Descubramos los alimentos y bebidas en LSB</small>
        </div>
        <div>
          <img src="{{ asset('images/img-1.png') }}" alt="" />
          <small> <center>
            Marcos tenía que comprar alimentos en el mercado, así que se levantó temprano y salió con su cesta. Al llegar, vio a los vendedores preparando sus puestos.  
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-2.png') }}" alt="" />
          <small> <center>
            La primera parada fue el puesto de leche.<br>
            <i><b>“¡Hola, Marcos! ¿Qué tal?”</b></i> saludó la vendedora, mientras le ofrecía un litro de leche fresca.<br>
            <i><b>“Esta leche es perfecta para que tengas huesos fuertes, y también ayuda a tu cuerpo a crecer”</b></i>, explicó la vendedora mientras hacía el signo de <b>leche</b> en LSB.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-3.png') }}" alt="" />
          <small> <center>
            Marcos sonrió y puso la leche en su cesta. Luego, fue a otro puesto donde vendían <b>carne</b>. El vendedor, fuerte y sonriente, le ofreció un trozo de carne.<br>
            <i><b>“Con la carne, tendrás mucha fuerza para jugar y estudiar”</b></i>, explicó el vendedor, haciendo el signo de <b>carne</b> en LSB. <br>
            Marcos levantó su brazo y movió su mano como si estuviera sosteniendo la <b>carne</b>, repitiendo el signo.  
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small> <center>
            En el puesto de frutas, la vendedora le mostró un racimo de uvas. <i><b>“Las frutas son muy buenas para tu salud”</b></i>, dijo la vendedora. <br>
            Marcos levantó su mano y formó el signo de uva en LSB, como lo había aprendido.
          </center> </small>
        </div>
        <div>
          <img src="{{ asset('images/img-5.png') }}" alt="" />
          <small><center>
            En el puesto de verduras, el vendedor le ofreció zanahorias y espinacas. <i><b>“Las verduras como la espinaca y las zanahorias te ayudan a tener buena visión”</b></i>, explicó el vendedor.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Marcos estaba casi listo para regresar a casa, pero antes pasó por el puesto de <b>pan</b>. El panadero le mostró un pan recién horneado, caliente y suave.<br>
            <i><b>“Este pan te dará la energía que necesitas para todo el día”</b></i>, dijo el panadero.
          </center></small>
        </div>
        <div>
          <img src="{{ asset('images/img-4.png') }}" alt="" />
          <small><center>
            Finalmente, Marcos salió del mercado contento por todo lo que había aprendido. Los vendedores le enseñaron mucho sobre los alimentos.<br>
            <i><b>“Recuerda siempre comer de todo, porque cada alimento tiene algo especial para ti”</b></i>, le dijo el vendedor de frutas mientras Marcos levantaba su cesta llena de alimentos. 
          </center></small>
        </div>
        <div class="hard"></div>
        <div class="hard"><center>¡Gracias por acompañarnos en este viaje por el mercado!</center> 
            <small><center>Ahora conoces los alimentos y bebidas en Lengua de Señas Boliviana. ¡Nos vemos en la próxima aventura!</center></small></div>
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
