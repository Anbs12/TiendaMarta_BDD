<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imgs/favicon.jpg" type="image/x-icon"> <!--Donde se activa el favicon-->
    <link rel="stylesheet" href="CSS/Style.css"> <!-- Conexion con archivo css-->
    <title>Contacto</title>
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

    <div style="text-align:center">
        <h1>Formulario de Contacto</h1>
    </div>



    <!-- Formulario de Contacto  ------------------------------------>

    <form id="contact-form">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>

        <div class="form-group">
            <label for="producto">Producto:</label>
            <select id="producto" name="producto" required>
                <option value="">Seleccione un producto</option>
                <option value="producto1">Producto 1</option>
                <option value="producto2">Producto 2</option>
                <option value="producto3">Producto 3</option>
            </select>
        </div>

        <div class="form-group">
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <button type="reset">Limpiar</button>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <!-- Fin formulario contacto ----------------------------------->


    <div class="espacio_Contacto">
        <!--Solo espacio-->

    </div>




    <!-- Footer con alguna informacion de derechos------------------------------------>

    <footer class="footer_container">
        <div class="redes_sociales">
            <p text-Align="text-right">Redes sociales: </p>
            <a href="https://twitter.com"><img src="Imgs/twitter_logo.png" alt="Twitter"></a>
            <a href="https://www.instagram.com"><img src="Imgs/instagram_logo.png" alt="Instagram"></a>
            <a href="https://es-la.facebook.com"><img src="Imgs/facebook_logo.png" alt="Facebook"></a>
            <a href="https://github.com/Anbs12/TiendaMarta_BDD"><img src="Imgs/github.png" alt="GitHub"></a>
            <p>Creado por Anubis Montero, Diego Vargas y Antonella Nattino</p>
        </div>
        <p>Todos los derechos reservados © 2023</p>
    </footer>
    <!-------Fin del footer -------------------------------------------------------->
</body>

</html>