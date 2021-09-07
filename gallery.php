<?php
    session_start();
    $auth = $_SESSION['login'];
    if(!$auth){
        header('Location: /');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link  rel="icon"   href="build/img/icono-azul.webp" type="image/png" />
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body class="cont-galeria">
    <a class="back" href="menu-principal.php">Menu Principal</a>
    <h2>Gallery</h2>
    <div class="saludo"></div>
    <div class="gallery contenedor">
        <div class="galeria-imagenes"></div>
    </div>
    <div class="bar">
        <div  id="done" class="inactive">
            <a href="#">Send my images</a>
        </div>
    </div>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>