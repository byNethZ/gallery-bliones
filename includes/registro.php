<?php
    require 'database.php';

    $nombre = $_POST['nombre'];
    $nombreResturante = $_POST['nombreRestaurante'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "INSERT INTO userauth (nombre, nombreRestaurante, telefono, email) VALUES ('$nombre', '$nombreResturante', '$telefono', '$email')";

    $resultado = $mysqli->query($sql);