<?php

// $db = new mysqli('localhost', 'root', '','gallery_bliones');

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '','gallery_bliones');
    if (!$db){
        echo 'Error en la conexión';
        exit;
    }

    return $db;
}