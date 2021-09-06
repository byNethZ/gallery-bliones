<?php

// $db = mysqli_connect('localhost', 'root', '','userauth');
$mysqli = new mysqli('localhost', 'root', '','gallery_bliones');

if (!$mysqli){
    echo 'Error en la conexión';
    exit;
}