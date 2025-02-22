<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video de YouTube</title>
    <!-- Importación de la fuente Fredoka One -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <style>
        /* Estilo para el contenedor principal */
        .container {
            background-color: #F2F2F4;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 1300px;
        }

        /* Estilos para el texto con gradiente animado */
        .text-gradient {
            font-family: 'Fredoka One', sans-serif;
            font-size: 3rem;
            font-weight: bold;
            color: transparent; /* Hacemos el texto transparente */
            background-image: linear-gradient(to left, #F5B7B1, #7B68EE, #3498db, #2ecc71, #F5B7B1); /* Degradado con anaranjado pastel */
            background-clip: text; /* Aplicamos el degradado al texto */
            -webkit-background-clip: text; /* Compatibilidad para Safari */
            animation: color 3s linear infinite; /* Animación del fondo */
            background-size: 500%; /* Tamaño del fondo para que haya movimiento */
            text-align: center; /* Centrado del texto */
            margin-bottom: 30px; /* Espaciado inferior */
        }

        /* Animación del degradado */
        @keyframes color {
            from {
                background-position: 0% 50%; /* Empezamos en el lado izquierdo */
            }
            to {
                background-position: 100% 50%; /* Terminamos en el lado derecho */
            }
        }

        /* Contenedor del video */
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Mantiene la relación de aspecto 16:9 */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            border-radius: 12px;
        }

        /* Estilo del iframe */
        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Estilo del pie de página */
        .footer {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-gradient">¡Las Acciones en Señas!</h2>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/osyXo50wlGw?si=QNkwWMA9oigHOz6o" 
                    title="Video de YouTube" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>
        </div>
        <div class="footer">
            <p>¡Es hora de movernos! Aprende los verbos más importantes con señas.</p>
        </div>
    </div>
</body>
</html>
