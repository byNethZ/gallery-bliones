<?php
    session_start();
    $auth = $_SESSION['login'];
    if(!$auth){
        header('Location: /');
    }

    require 'includes/recibir-datos.php';
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
<body class="menu-categorias bg-galerias">
    <p id="mostrarArray">Mostrar Arreglo en consola</p>
    <div class="back">
        <a class="active" href="index.php">Inicio</a>
    </div>
    <h2>Categorias</h2>
    <div class="nav contenedor">
    <a href="index.php" class="active">Atras</a>
    </div>
    <div class="gallery contenedor">
        <div class="galeria-categorias">
            <a href="gallery.php?galeria=antojitos">
                <div class="cont-categoria">
                    <img src="build/img/0C7A9199.webp" alt="imagen categoria" class="img-categoria">
                    <div class="nombre-categoria">
                        <p>Antojitos Mexicanos</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=drink">
                <div class="cont-categoria">
                    <img src="build/img/0C7A9199.webp" alt="imagen categoria" class="img-categoria">
                    <div class="nombre-categoria">
                        <p>Bebidas</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=meal">
                <div class="cont-categoria">
                    <img src="build/img/0C7A9199.webp" alt="imagen categoria" class="img-categoria">
                    <div class="nombre-categoria">
                        <p>Carnes</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=pork">
                <div class="cont-categoria">
                    <img src="build/img/0C7A9199.webp" alt="imagen categoria" class="img-categoria">
                    <div class="nombre-categoria">
                        <p>Puerco</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <script type="text/javascript">
            sessionStorage.setItem('nameUser', '<?php echo $nombreUsuario;?>');
            sessionStorage.setItem('restauranteUser', '<?php echo $restauranteUsuario;?>');
            sessionStorage.setItem('phoneUser', '<?php echo $telefonoUsuario;?>');
            sessionStorage.setItem('emailUser', '<?php echo $emailUsuario;?>');
        </script>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>