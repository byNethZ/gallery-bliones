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
<body class="menu-categorias bg-galerias general">
    <!-- <p id="mostrarArray">Mostrar Arreglo en consola</p> -->
    <img class="logo-pagina" src="build/img/Logo_azul_slogan.webp" alt="">
    <h2>Categorias</h2>
    <div class="nav contenedor">
    <a href="index.php" class="active">Atras</a>
    </div>
    <div class="gallery contenedor">
        <div class="galeria-categorias">
            <a href="menu-principal-antojitos.php">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/slider/antojitos_002.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/antojitos_005.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/antojitos_006.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/antojitos_007.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                        <div class="nombre-categoria">
                            <p>Antojitos Mexicanos</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=drink">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/slider/drink_002.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/drink_006.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/drink_007.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/drink_008.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Bebidas</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=meal">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/slider/meal_003.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/meal_006.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/meal_007.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/meal_008.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Carnes</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=pork">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/slider/pork_004.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/pork_006.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/pork_007.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/slider/pork_008.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
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