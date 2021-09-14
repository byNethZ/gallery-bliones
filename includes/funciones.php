<?php

require 'includes/database.php';
$db= conectarDB();

$nombreUsuario = $_SESSION['usuario'];
$restauranteUsuario = $_SESSION['restaurante'];
$telefonoUsuario = $_SESSION['telefono'];
$emailUsuario = $_SESSION['email'];