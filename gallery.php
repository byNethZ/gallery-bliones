<?php
    session_start();
    $auth = $_SESSION['login'];
    if(!$auth){
        header('Location: /');
    }

    require 'includes/funciones.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link  rel="icon"   href="build/img/icono-azul.webp" type="image/webp" />
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body class="cont-galeria">
    <p id="mostrarArray">Mostrar Arreglo en consola</p>
    <h2>Gallery</h2>
    <div class="nav contenedor">
        <a id="back" href="menu-principal.php" class="active">Atras</a>
    </div>
    <div class="saludo"></div>
    <div class="gallery contenedor">
        <div class="galeria-imagenes"></div>
    </div>
    <div class="bar">
        <a id="done" href="" class="inactive">Send my images</a>
    </div>
    <div class="boxNameImg">
        <form class="formulario">
            <div class="campo" id="nameInputDiv">
                <label for="nombre">Nombre del platillo</label>
                <input id="nombrePlatillo" type="text" placeholder="Nombre para el platillo" name="nombre" required>
            </div>
            <div class="boton">
                <input type="submit" id="getName" class="boton-active-block" value="Ok" name="submit">
            </div>
        </form>
    </div>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>