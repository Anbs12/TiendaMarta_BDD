<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Donde se activa el favicon-->
    <link rel="icon" href="Imgs/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="CSS/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script> <!-- Conexion a Bootstrap para archivos CSS-->
    <title>MARTA & MARIA</title>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script> <!-- Conexion para archivos JavaScript-->

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

    <!--Carousel-->
    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Imgs/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Imgs/banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Imgs/banner2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <br><br>

    <!--Container de productos destacados-->

    <section class="container_Index">
        <header class="header_verTodos">
            <div class="header_content">
                <h2 class="section_titulo">Productos destacados</h2>
            </div>
            <div class="header_content">
                <a href="productos.php" class="section_link link">
                    Ver todos
                </a>
            </div>
        </header>
    </section>

    <!--Productos destacados-->

    <div class="productos">
        <div class="producto">
            <img src="Imgs/sahnenuss.jpg" alt="Producto 1">
            <a>NESTLÉ</a>
            <h5>Chocolate Sahne-Nuss</h5>
            <p>Barra 250gr</p>
            <button>Agregar al carrito</button>
        </div>

        <div class="producto">
            <img src="Imgs/oreo.jpg" alt="Producto 2">
            <a>OREO</a>
            <h5>Pack 3 Chocolate Oreo bolita</h5>
            <p>Bolsa 10 unidades</p>
            <button>Agregar al carrito</button>
        </div>

        <div class="producto">
            <img src="Imgs/safari.jpg" alt="Producto 2">
            <a>CALAF</a>
            <h5>PACK 3 CHOCOLATE SAFARI</h5>
            <p>Display 24 Unidades 20gr.</p>
            <button>Agregar al carrito</button>
        </div>

        <!-- Footer con alguna informacion de derechos-->

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

</body>

</html>