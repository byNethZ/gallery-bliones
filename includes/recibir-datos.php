<?php
    require 'includes/funciones.php';



    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $imagenes=$_POST['imagenes'];

        // json_encode($imagenes);
        var_dump($imagenes);
    }