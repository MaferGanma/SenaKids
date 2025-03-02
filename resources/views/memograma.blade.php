<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Memograma Parejas</title>
    <link rel="stylesheet" href="{{asset('css/stylememograma.css')}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
  </head>
  <body>
    <div class="container">
        <div class="floating-stars">
            <span class="star" style="top:10%; left:5%;">✨</span>
            <span class="star" style="top:20%; left:90%; animation-delay:0.5s;">⭐</span>
            <span class="star" style="top:70%; left:10%; animation-delay:1s;">🌟</span>
            <span class="star" style="top:80%; left:80%; animation-delay:1.5s;">✨</span>
          </div>

          <!-- Título y encabezado -->
          <div class="title-container">
            <h1 class="game-title">Memograma Mágico</h1>
          </div>

          {{-- <div class="score-container">
            <span class="score-text">Parejas: <span class="score">0</span> de <span class="attempts" id="intentos">0</span> intentos</span>
            <button class="pulse" id="escuchar">Sonido: ON</button>
          </div> --}}
          <div class="score-container">
            <h2>Parejas <span>0</span> de  <span id="intentos">0</span> intentos
              <button class="pulse" id="escuchar">Sonido: ON</button>
            </h2>
        </div>

      <div class="cards">
        <li class="card">
          <div class="view front-view">
            <span class="material-icons"> question_mark </span>
          </div>
          <div class="view back-view">
            <img src="{{asset('/images/memograma/1.jpg')}}" alt="" />
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <span class="material-icons"> question_mark </span>
          </div>
          <div class="view back-view">
            <img src="{{asset('/images/memograma/2.jpg')}}" alt="" />
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <span class="material-icons"> question_mark </span>
          </div>
          <div class="view back-view">
            <img src="{{asset('/images/memograma/3.jpg')}}" alt="" />
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <span class="material-icons"> question_mark </span>
          </div>
          <div class="view back-view">
            <img src="{{asset('/images/memograma/4.jpg')}}" alt="" />
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <span class="material-icons"> question_mark </span>
          </div>
          <div class="view back-view">
            <img src="{{asset('/images/memograma/5.jpg')}}" alt="" />
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <span class="material-icons"> question_mark </span>
          </div>
          <div class="view back-view">
            <img src="{{asset('/images/memograma/6.jpg')}}" alt="" />
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <span class="material-icons"> question_mark </span>
          </div>
          <div class="view back-view">
            <img src="{{asset('/images/memograma/7.jpg')}}" alt="" />
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <span class="material-icons"> question_mark </span>
          </div>
          <div class="view back-view">
            <img src="{{asset('/images/memograma/8.jpg')}}" alt="" />
          </div>
        </li>


        <li class="card">
            <div class="view front-view">
              <span class="material-icons"> question_mark </span>
            </div>
            <div class="view back-view">
              <img src="{{asset('/images/memograma/1.jpg')}}" alt="" />
            </div>
          </li>
          <li class="card">
            <div class="view front-view">
              <span class="material-icons"> question_mark </span>
            </div>
            <div class="view back-view">
              <img src="{{asset('/images/memograma/2.jpg')}}" alt="" />
            </div>
          </li>
          <li class="card">
            <div class="view front-view">
              <span class="material-icons"> question_mark </span>
            </div>
            <div class="view back-view">
              <img src="{{asset('/images/memograma/3.jpg')}}" alt="" />
            </div>
          </li>
          <li class="card">
            <div class="view front-view">
              <span class="material-icons"> question_mark </span>
            </div>
            <div class="view back-view">
              <img src="{{asset('/images/memograma/4.jpg')}}" alt="" />
            </div>
          </li>
          <li class="card">
            <div class="view front-view">
              <span class="material-icons"> question_mark </span>
            </div>
            <div class="view back-view">
              <img src="{{asset('/images/memograma/5.jpg')}}" alt="" />
            </div>
          </li>
          <li class="card">
            <div class="view front-view">
              <span class="material-icons"> question_mark </span>
            </div>
            <div class="view back-view">
              <img src="{{asset('/images/memograma/6.jpg')}}" alt="" />
            </div>
          </li>
          <li class="card">
            <div class="view front-view">
              <span class="material-icons"> question_mark </span>
            </div>
            <div class="view back-view">
              <img src="{{asset('/images/memograma/7.jpg')}}" alt="" />
            </div>
          </li>
          <li class="card">
            <div class="view front-view">
              <span class="material-icons"> question_mark </span>
            </div>
            <div class="view back-view">
              <img src="{{asset('/images/memograma/8.jpg')}}" alt="" />
            </div>
          </li>
      </div>
    </div>

    <div id="modalResultados" class="modal">
        <div class="modal-content">
          <h2>¡Felicidades! 🎉</h2>
          <p>Has completado el juego en <span id="totalIntentos"></span> intentos.</p>
          <button id="btnReintentar">Intentar de nuevo</button>
          <button id="btnSiguiente">Siguiente</button>
        </div>
      </div>

    <audio id="fondo" loop src="{{asset('sounds/musica.mp3')}}" type="audio/mpeg"/>
    <audio id="sonidos" src="" type="audio/mpeg"/>
    <script src="{{asset('js/script.js')}}"></script>

  </body>
</html>
