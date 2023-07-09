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
  <link rel="stylesheet" href="CSS/Style.css"> <!-- Conexion con archivo css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script> <!-- Conexion a Bootstrap para archivos CSS-->
  <title>Productos</title>
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script> <!-- Conexion para archivos JavaScript-->

  <!-- Cabecera con menu con direccion a las distintas paginas del entorno-->
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

  <!-- Contenedor con ASIDE y los productos en SECTION-->
  <div class="container_Productos">

    <!--Barra lateral estilo menu -->
    <aside class="barraLateral">
      <div class="columna">
        <h4> ¿Qué busca? </h4>
        <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
          <a class="p-1 rounded" href="#simple-list-item-1">Bolsas de basura</a>
          <a class="p-1 rounded" href="#simple-list-item-1">Detergente líquido</a>
          <a class="p-1 rounded" href="#simple-list-item-2">Escobillas</a>
          <a class="p-1 rounded" href="#simple-list-item-3">Escobillones</a>
          <a class="p-1 rounded" href="#simple-list-item-4">Lavalozas</a>
          <a class="p-1 rounded" href="#simple-list-item-5">Trapero</a>
          <a class="p-1 rounded" href="#simple-list-item-1">Trapero Premium</a>
          <a class="p-1 rounded" href="#simple-list-item-1">Escobillon electrico</a>
          <a class="p-1 rounded" href="#simple-list-item-2">Aspiradoras</a>
        </div>
      </div>
    </aside>

    <!--Productos de primera columna ---------------->

    <section class="productos">
      <div class="producto1">
        <img src="Imgs/BolsaBasura_Producto1.jpg" id="imgProducto">
        <h3>Bolsas de Basura</h3>
        <p>1 pack de bolsas de basuras</p>
        <p>Precio: 2000$</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/detergente_1.png" id="imgProducto">
        <h3>Detergente Bio Bio - Doble Pack</h3>
        <p>Dos detergentes Bio Bio alta calidad</p>
        <p>Precio: 2400$</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/detergenteLiquido1.jpg" id="imgProducto">
        <h3>Detergente Liquido 1lt</h3>
        <p>Detergente Ace de buena calidad</p>
        <p>Precio: 1500$</p>
        <button>Añadir al carrito</button>
      </div>
    </section>

    <!--Productos de segunda columna ----------------->

    <section class="productos">
      <div class="producto1">
        <img src="Imgs/escobilla1.png" id="imgProducto">
        <h3>Escobilla individual</h3>
        <p>Una escobilla individual</p>
        <p>Precio: 1000$</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/EscobillaLimpiaFondo1.jpg" id="imgProducto">
        <h3>Escobilla Limpia fondo</h3>
        <p>Una escobilla para usar en un trapero moderno</p>
        <p>Precio: 4000$</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/Lavaloza1.jpg" id="imgProducto">
        <h3>Lavaloza 1lt</h3>
        <p>Lavaloza simple y barata.</p>
        <p>Precio: 1000$</p>
        <button>Añadir al carrito</button>
      </div>
    </section>

    <!--Productos de tercera columna ----------------->

    <section class="productos">
      <div class="producto1">
        <img src="Imgs/lavalozas_3.jpg" id="imgProducto">
        <h3>Lavaloza 2lts</h3>
        <p>Lavaloza de 2lts, alta calidad</p>
        <p>Precio: 3000$</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/limpiaPisos1Pack.jpg" id="imgProducto">
        <h3>Limpia pisos- Pack de 5</h3>
        <p>Increible pack de 5 limpia pisos.</p>
        <p>Precio: 7000$</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/TraperoConBalde1.jpg" id="imgProducto">
        <h3>Trapero con cubeta incluida</h3>
        <p>Trapero que incluye una cubeta de alta calidad</p>
        <p>Precio: 10000$</p>
        <button>Añadir al carrito</button>
      </div>
    </section>
  </div>

  <!--Indexacion de numeros de pagina debajo del container o productos----------------->
  <div class="paginacion">
    <section class="paginacion">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
        </ul>
      </nav>
    </section>
  </div>

  <!-- Footer con alguna informacion de derechos-->

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
</body>

</html>