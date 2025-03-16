<!-- resources/views/card_effect.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juguemos</title>

    <!-- Aquí usamos el helper asset() para cargar el archivo CSS -->
    <link rel="stylesheet" href="{{ asset('css/style_card.css') }}">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Signika:700,300,600);

        .titulo-unico-129384 {
            font-size: 2em; /* Tamaño pequeño */
            font: bold 5vw/1.6 'Signika', sans-serif;
            user-select: none;
            text-align: center;
            margin-top: 60px; /* Eliminado el margen superior */
            display: block;
            width: 100%;
            position: absolute; /* Posicionamiento absoluto */
            top: 0; /* Ubicado en el borde superior */
        }

        .titulo-unico-129384 span { 
            display: inline-block; 
            animation: float .2s ease-in-out infinite; 
        }

        @keyframes float {
            0%, 100% { transform: none; }
            33% { transform: translateY(-1px) rotate(-2deg); }
            66% { transform: translateY(1px) rotate(2deg); }
        }

        /* Colores y sombras solo para las letras del título */
        .titulo-unico-129384 span:nth-child(4n) { 
            color: hsl(50, 75%, 55%);
            text-shadow: 1px 1px hsl(50, 75%, 45%), 2px 2px hsl(50, 45%, 45%), 3px 3px hsl(50, 45%, 45%), 4px 4px hsl(50, 75%, 45%);
        }
        .titulo-unico-129384 span:nth-child(4n-1) { 
            color: hsl(135, 35%, 55%);
            text-shadow: 1px 1px hsl(135, 35%, 45%), 2px 2px hsl(135, 35%, 45%), 3px 3px hsl(135, 35%, 45%), 4px 4px hsl(135, 35%, 45%);
        }
        .titulo-unico-129384 span:nth-child(4n-2) { 
            color: hsl(155, 35%, 60%);
            text-shadow: 1px 1px hsl(155, 25%, 50%), 2px 2px hsl(155, 25%, 50%), 3px 3px hsl(155, 25%, 50%), 4px 4px hsl(140, 25%, 50%);
        }
        .titulo-unico-129384 span:nth-child(4n-3) { 
            color: hsl(30, 65%, 60%);
            text-shadow: 1px 1px hsl(30, 45%, 50%), 2px 2px hsl(30, 45%, 50%), 3px 3px hsl(30, 45%, 50%), 4px 4px hsl(30, 45%, 50%);
        }

        .titulo-unico-129384 span:nth-child(2) { animation-delay: .05s; }
        .titulo-unico-129384 span:nth-child(3) { animation-delay: .1s; }
        .titulo-unico-129384 span:nth-child(4) { animation-delay: .15s; }
        .titulo-unico-129384 span:nth-child(5) { animation-delay: .2s; }
        .titulo-unico-129384 span:nth-child(6) { animation-delay: .25s; }
        .titulo-unico-129384 span:nth-child(7) { animation-delay: .3s; }
        .titulo-unico-129384 span:nth-child(8) { animation-delay: .35s; }
        .titulo-unico-129384 span:nth-child(9) { animation-delay: .4s; }
        .titulo-unico-129384 span:nth-child(10) { animation-delay: .45s; }
        .titulo-unico-129384 span:nth-child(11) { animation-delay: .5s; }
        .titulo-unico-129384 span:nth-child(12) { animation-delay: .55s; }
        .titulo-unico-129384 span:nth-child(13) { animation-delay: .6s; }
        .titulo-unico-129384 span:nth-child(14) { animation-delay: .65s; }
    </style>
</head>
<body>
    <div class="titulo-unico-129384">
        <span>¡</span><span>J</span><span>u</span><span>g</span><span>u</span><span>e</span><span>m</span><span>o</span><span>s</span><span>!</span>
    </div>
    <div class="container">
        <a href="#">
            <div class="card">
                <div class="wrapper">
                    <img src="{{ asset('images/Tema5_Verbos/PuzleCard.png')}}" class="cover-image" />
                </div>
                <img src="{{ asset('images/Tema5_Verbos/PuzleTitle.png')}}" class="title" />
                <img src="{{ asset('images/Tema5_Verbos/Puzle3D.png')}}" class="character" />
            </div>
        </a>

        <a href="#">
            <div class="card">
                <div class="wrapper">
                    <img src="{{ asset('images/Tema5_Verbos/MemoCard.jpg')}}" class="cover-image" />
                </div>
                <img src="{{ asset('images/Tema5_Verbos/MemoTitle.png')}}" class="title" />
                <img src="{{ asset('images/Tema5_Verbos/Memo3D.png')}}" class="character" />
            </div>
        </a>

        <a href="{{ url('/tema1/juego1') }}">
            <div class="card">
                <div class="wrapper">
                    <img src="{{ asset('images/Tema5_Verbos/FraseCard.jpg')}}" class="cover-image" />
                </div>
                <img src="{{ asset('images/Tema5_Verbos/FraseTitle.png')}}" class="title" />
                <img src="{{ asset('images/Tema5_Verbos/Frase3D.png')}}" class="character" />
            </div>
        </a>

        <a href="{{ url('/tema1/quizz') }}">
            <div class="card">
                <div class="wrapper">
                    <img src="{{ asset('images/Tema5_Verbos/Cards.jpg')}}" class="cover-image" />
                </div>
                <img src="{{ asset('images/Tema5_Verbos/Title.png')}}" class="title" />
                <img src="{{ asset('images/Tema5_Verbos/3D.png')}}" class="character" />
            </div>
        </a>
    </div>
</body>
</html>
