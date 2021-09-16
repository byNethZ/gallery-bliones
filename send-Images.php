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
<body class="sendImages">
    <div class="flex-content">
        <img class="logo-pagina" src="build/img/Logo_blanco_slogan.webp" alt="">
        <div class="content-text">
            <h2>Thanks for your order</h2>
            <h3>We will contact you shortly</h3>
            <h4>Do not leave the page, you will be redirected immediately.</h4>
            <h4>No salga de la página, será redireccionado enseguida</h4>
        </div>
    </div>
    <script src=" https://smtpjs.com/v3/smtp.js"></script>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>