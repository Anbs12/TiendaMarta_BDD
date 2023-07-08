<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user'])) {
    // Redirigir al formulario de inicio de sesión si no ha iniciado sesión
    header("Location: login.php");
    exit();
}

// Obtener el nombre del vendedor desde la sesión
$nombreVendedor = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Donde se activa el favicon-->
    <link rel="icon" href="Imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/Style.css"> <!-- Conexion con archivo css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script> <!-- Conexion a Bootstrap para archivos CSS-->
    <title>Panel del Vendedor</title>
</head>

<body>


    <header>
        <section id="section_Nav">
            <a href="#"><img src="Imgs/Logo v2.png" class="logo"></a>
            <div>
                <ul id="navbar">
                    <li><a href="index.php"><button id="boton_NavbarIndex">Inicio</button></a></li>
                    <li><a href="productos.php"><button id="boton_NavbarIndex">Productos</button></a></li>
                    <li><a href="login.php"><button id="boton_NavbarIndex">Login</button></a></li>
                    <li><a href="contacto.php"><button id="boton_NavbarIndex">Contacto</button></a></li>
                </ul>
            </div>
        </section>
    </header>
    <br>
    <h2>Bienvenido,
        <?php echo $nombreVendedor; ?>!
    </h2>
    <p>Este es el panel del vendedor.</p>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br>







    <!-- Footer con alguna informacion de derechos------------------------------------>

    <footer class="footer_container">
        <div class="redes_sociales">
            <p text-Align="text-right">Redes sociales: </p>
            <a href="#"><img src="Imgs/twitter_logo.png" alt="Twitter"></a>
            <a href="#"><img src="Imgs/instagram_logo.png" alt="Instagram"></a>
            <a href="#"><img src="Imgs/facebook_logo.png" alt="Facebook"></a>
            <a href="https://github.com/Anbs12/Analistas.git"><img src="Imgs/github.png" alt="GitHub"></a>
            <p>Creado por Anubis Montero y Antonella Nattino</p>
        </div>
        <p>Todos los derechos reservados © 2023</p>
    </footer>
    <!-------Fin del footer -------------------------------------------------------->
</body>

</html>