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
</head>
<body>
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

        <a href="#">
            <div class="card">
                <div class="wrapper">
                    <img src="{{ asset('images/Tema5_Verbos/FraseCard.jpg')}}" class="cover-image" />
                </div>
                <img src="{{ asset('images/Tema5_Verbos/FraseTitle.png')}}" class="title" />
                <img src="{{ asset('images/Tema5_Verbos/Frase3D.png')}}" class="character" />
            </div>
        </a>

        <a href="#">
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
