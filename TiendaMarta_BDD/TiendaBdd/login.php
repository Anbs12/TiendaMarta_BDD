<?php
session_start();

// Verificar si el formulario de inicio de sesión se envió
if (isset($_POST['submit'])) {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conectar a la base de datos
    $mysqli = new mysqli("localhost", "root", "root", "tiendamm");

    // Verificar la conexión
    if ($mysqli->connect_errno) {
        echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
        exit();
    }

    // Consulta para verificar el usuario y la contraseña
    $query = "SELECT * FROM Usuario WHERE Email = '$email' AND Password = '$password'";
    $result = $mysqli->query($query);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verificar el perfil del usuario
        if ($row['PerfilID'] == 1) {
            // Admin
            $_SESSION['user'] = $row['Nombre'];
            header("Location: pagAdmin.php");
        } else {
            // Vendedor
            $_SESSION['user'] = $row['Nombre'];
            header("Location: pagVendedor.php");
        }
    } else {
        // Usuario o contraseña incorrectos
        echo "Usuario o contraseña incorrectos.";
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Donde se activa el favicon-->
    <link rel="icon" href="Imgs/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="CSS/estiloLogin.css"> <!-- Conexion con archivo css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script> <!-- Conexion a Bootstrap para archivos CSS-->
    <title>Login</title>
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





    <form id="loginContainer" method="POST" action="login.php">
        <h1>Iniciar sesión</h1>

        <div class="sesion">
            <label for="email">Email:</label>
            <input type="email" name="email" required=""><br>
        </div>

        <div class="sesion">
            <label for="password">Password:</label>
            <input type="password" name="password" required=""><br>
        </div>

        <div class="submit">
            <input type="submit" name="submit" value="Iniciar sesión">
        </div>


    </form>







    <br><br><br><br><br><br><br><br><br><br><br>







    <!-- Footer con alguna informacion de derechos------------------------------------>

    <footer class="footer_container">
        <div class="redes_sociales">
            <p text-Align="text-right">Redes sociales: </p>
            <a href="#"><img src="Imgs/twitter_logo.png" alt="Twitter"></a>
            <a href="#"><img src="Imgs/instagram_logo.png" alt="Instagram"></a>
            <a href="#"><img src="Imgs/facebook_logo.png" alt="Facebook"></a>
            <a href="https://github.com/Anbs12/TiendaMarta_BDD"><img src="Imgs/github.png" alt="GitHub"></a>
                <p>Creado por Anubis Montero, Diego Vargsa y Antonella Nattino</p>
        </div>
        <p>Todos los derechos reservados © 2023</p>
    </footer>
    <!-------Fin del footer -------------------------------------------------------->
</body>

</html>