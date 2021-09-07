<?php
    require 'includes/database.php';

    $db= conectarDB();

    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $nombre = $_POST['nombre'];
        $nombreRestaurante = $_POST['nombreRestaurante'];

        $errores = [];
        $auth = false;

        if($_POST['submit']=== 'Login'){
            $nombreUsuario = mysqli_real_escape_string($db, filter_var($nombre));
            $restauranteUsuario = mysqli_real_escape_string($db, filter_var($nombreRestaurante));

            $query = "SELECT * FROM userauth WHERE nombre = '${nombreUsuario}' ";
            $resultado = mysqli_query($db, $query);

            if( $resultado->num_rows){
                $usuario = mysqli_fetch_assoc($resultado);
                if($usuario['nombreRestaurante'] === $restauranteUsuario){
                    $auth = true;
                    if($auth === true){
                        session_start();
                        $_SESSION['usuario'] = $usuario['nombre'];
                        $_SESSION['restaurante'] = $usuario['nombreRestaurante'];
                        $_SESSION['telefono'] = $usuario['telefono'];
                        $_SESSION['email'] = $usuario['email'];
                        $_SESSION['login'] = true;

                        header('Location: /menu-principal.php');
                    }
                } else{
                    $errores[] = "Restaurante no existe";
                    
                }
            } else{
                $errores[] = "El usuario no existe";
                
            }


        } elseif ($_POST['submit']=== 'Register'){
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
    
            $query = "INSERT INTO userauth ( nombre, nombreRestaurante, telefono, email ) VALUES ( '$nombre', '$nombreRestaurante', '$telefono', '$email' )";
    
            $resultado = mysqli_query($db, $query);

            session_start();
            $_SESSION['usuario'] = $nombre;
            $_SESSION['restaurante'] = $nombreRestaurante;
            $_SESSION['telefono'] = $telefono;
            $_SESSION['email'] = $email;
            $_SESSION['login'] = true;

            header('Location: /menu-principal.php');
        }

    }

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
<body class="inicio">
    <!-- <p id="mostrarArray">Mostrar Arreglo en consola</p> -->
    <div id="regist" class="box-form-registro">
        <a class="logo" href="https://www.bliones.com/"><img src="build/img/Logo_blanco.webp" alt=""></a>
        <div class="form">
            <h2>Datos de contacto</h2>
            <p>Coloca tus datos de contacto</p>
            <form class="formulario" method="POST">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" placeholder="Tu nombre" name="nombre" required>
                </div>
                <div class="campo">
                    <label for="restaurante">Nombre del restaurante</label>
                    <input id="restaurante" type="text" placeholder="Tu restaurante" name="nombreRestaurante" required>
                </div>
                <div class="campo">
                    <label for="telefono">Telefono</label>
                    <input id="telefono" type="tel" placeholder="Tu telefono" name="telefono" required>
                </div>
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" placeholder="Tu email" name="email" required>
                </div>
                <div class="submit">
                    <input type="submit" id="getDatos" class="boton-inactive-block" value="Register" name="submit">
                </div>
            </form>
            <p class="blue">¿Ya te registraste? <a id="btn-sesion" href="#">Inicia sesión</a></p>
        </div>
    </div>
    <div id="sesionCard" class="box-form-sesion">
        <a class="logo" href="https://www.bliones.com/"><img src="build/img/Logo_blanco.webp" alt=""></a>
        <div class="form">
            <h2>Datos de contacto</h2>
            <p>Coloca tus datos de contacto</p>
            <?php if(!empty($errores)): foreach($errores as $error): ?>
            <div class="error">
                <?php echo $error; ?>
            </div>
            <?php endforeach; endif;?>
            <form class="formulario" method="POST">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input id="sesion-nombre" type="text" placeholder="Tu nombre" name="nombre" required>
                </div>
                <div class="campo">
                    <label for="restaurante">Nombre del restaurante</label>
                    <input id="sesion-restaurante" type="text" placeholder="Tu restaurante" name="nombreRestaurante" required>
                </div>
                <div class="submit">
                    <input type="submit" id="sesion-getDatos" class="boton-inactive-block" value="Login" name="submit">
                </div>
            </form>
            <p class="blue">¿No estás registrado? <a id="btn-registro" href="#">Registrate</a></p>
        </div>
    </div>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>