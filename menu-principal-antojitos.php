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
    <link  rel="icon"   href="build/img/icono-azul.webp" type="image/png" />
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body class="submenu-categorias bg-galerias submenu-antojitos">
    <!-- <p id="mostrarArray">Mostrar Arreglo en consola</p> -->
    <img class="logo-pagina" src="build/img/Logo_azul_slogan.webp" alt="">
    <h2>Categorias</h2>
    <div class="nav contenedor">
        <a id="back" href="menu-principal.php" class="active">Atras</a>
    </div>
    <div class="gallery contenedor">
        <div class="galeria-categorias">
            <a href="gallery.php?galeria=burritos">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/burritos/burritos_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/burritos/burritos_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/burritos/burritos_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/burritos/burritos_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                        <div class="nombre-categoria">
                            <p>Burritos</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=caldos">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/caldos/caldos_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/caldos/caldos_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/caldos/caldos_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/caldos/caldos_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Caldos</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=chiles">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/chiles/chiles_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/chiles/chiles_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/chiles/chiles_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/chiles/chiles_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Chiles Rellenos</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=chimichangas">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/chimichangas/chimichangas_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/chimichangas/chimichangas_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/chimichangas/chimichangas_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/chimichangas/chimichangas_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Chimichangas</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=empanadas">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/empanadas/empanadas_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/empanadas/empanadas_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/empanadas/empanadas_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/empanadas/empanadas_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Empanadas</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=flautas">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/flautas/flautas_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/flautas/flautas_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/flautas/flautas_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/flautas/flautas_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Flautas</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=gorditas">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/gorditas/gorditas_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/gorditas/gorditas_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/gorditas/gorditas_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/gorditas/gorditas_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Gorditas, Sopes y Tostadas</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=molcajetes">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/molcajetes//molcajetes_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/molcajetes//molcajetes_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/molcajetes//molcajetes_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/molcajetes//molcajetes_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Molcajetes</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=papas">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/papas/papas_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/papas/papas_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/papas/papas_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/papas/papas_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Papas</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=quesadillas">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/quesadillas/quesadillas_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/quesadillas/quesadillas_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/quesadillas/quesadillas_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/quesadillas/quesadillas_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Quesadillas</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=tacos">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/tacos/tacos_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/tacos/tacos_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/tacos/tacos_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/tacos/tacos_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Tacos</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=tamales">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/tamales/tamales_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/tamales/tamales_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/tamales/tamales_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/tamales/tamales_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Tamales</p>
                    </div>
                </div>
            </a>
            <a href="gallery.php?galeria=tortas">
                <div class="cont-categoria">
                    <div class="slider">
                        <ul>
                            <li><img src="build/img/antojitos/tortas/tortas_1.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/tortas/tortas_2.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/tortas/tortas_3.webp" alt="imagen categoria" class="img-categoria"></li>
                            <li><img src="build/img/antojitos/tortas/tortas_4.webp" alt="imagen categoria" class="img-categoria"></li>
                        </ul>
                    </div>
                    <div class="nombre-categoria">
                        <p>Tortas</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>