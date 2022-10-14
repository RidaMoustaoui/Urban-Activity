<!DOCTYPE html>
    <head>
        <title>Tetris</title>
        <style>
            body {
                background: grey;
                color: white;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 2em;
                text-align: center;
            }

            canvas {
                border: solid .2em white;
                height: 80vh;
            }
        </style>
    </head>
    <body>
        <div style="margin-bottom: 0.2em">
        <a href="index.php">Accueil 🏠</a>
        | Score : <span id="score"></span>
        </div>
        <canvas id="tetris" width="240" height="400"></canvas>
        <script src="tetris.js"></script>
        <div> <br>Q et F pour tourner la piece </div>
    </body>
</html>