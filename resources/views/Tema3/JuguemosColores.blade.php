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
                    <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-cover.jpg" class="cover-image" />
                </div>
                <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-title.png" class="title" />
                <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-character.webp" class="character" />
            </div>
        </a>

        <a href="#">
            <div class="card">
                <div class="wrapper">
                    <img src="https://ggayane.github.io/css-experiments/cards/force_mage-cover.jpg" class="cover-image" />
                </div>
                <img src="https://ggayane.github.io/css-experiments/cards/force_mage-title.png" class="title" />
                <img src="https://ggayane.github.io/css-experiments/cards/force_mage-character.webp" class="character" />
            </div>
        </a>

        <a href="#">
            <div class="card">
                <div class="wrapper">
                    <img src="https://ggayane.github.io/css-experiments/cards/force_mage-cover.jpg" class="cover-image" />
                </div>
                <img src="https://ggayane.github.io/css-experiments/cards/force_mage-title.png" class="title" />
                <img src="https://ggayane.github.io/css-experiments/cards/force_mage-character.webp" class="character" />
            </div>
        </a>

        <a href="#">
            <div class="card">
                <div class="wrapper">
                    <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-cover.jpg" class="cover-image" />
                </div>
                <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-title.png" class="title" />
                <img src="https://ggayane.github.io/css-experiments/cards/dark_rider-character.webp" class="character" />
            </div>
        </a>
    </div>
</body>
</html>
