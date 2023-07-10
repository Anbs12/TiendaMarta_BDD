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
        <h4>CATÁLOGO</h4>
        <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
          <a class="p-1 rounded" href="#simple-list-item-1">Chocolates</a>
          <a class="p-1 rounded" href="#simple-list-item-1">Caramelos</a>
          <a class="p-1 rounded" href="#simple-list-item-2">Confites</a>
          <a class="p-1 rounded" href="#simple-list-item-3">Dulces</a>
          <a class="p-1 rounded" href="#simple-list-item-4">Galletas</a>
          <a class="p-1 rounded" href="#simple-list-item-5">Packs</a>
          <a class="p-1 rounded" href="#simple-list-item-1">Snacks</a>
          <a class="p-1 rounded" href="#simple-list-item-1">Masticables</a>
        </div>
      </div>
    </aside>

    <!--Productos de primera columna ---------------->

    <section class="productos">
      <div class="producto1">
        <img src="Imgs/bonbonbum.jpg" id="imgProducto">
        <h3>CARAMELO BON BON BUM FRESA</h3>
        <p>BOLSA CHUPETES 24 UNIDADES</p>
        <p>$1.890</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/frugele.jpg" id="imgProducto">
        <h3>GOMITAS FRUGELÉ</h3>
        <p>BOLSA 200 UNIDADES</p>
        <p>$3.790</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/galletas.jpg" id="imgProducto">
        <h3>GALLETA DINOSAURIOS VAINILLA</h3>
        <p>35 GR</p>
        <p>$180</p>
        <button>Añadir al carrito</button>
      </div>
    </section>

    <!--Productos de segunda columna ----------------->

    <section class="productos">
      <div class="producto1">
        <img src="Imgs/minidonuts.jpg" id="imgProducto">
        <h3>GALLETA MINI DONUTS</h3>
        <p>40 GR</p>
        <p>$240</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/mym.jpg" id="imgProducto">
        <h3>CHOCOLATE M&M PEANUT</h3>
        <p>49,3 GR</p>
        <p>$890</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/selz.jpg" id="imgProducto">
        <h3>GALLETA SELZ CLÁSICO</h3>
        <p>35 GR</p>
        <p>$210</p>
        <button>Añadir al carrito</button>
      </div>
    </section>

    <!--Productos de tercera columna ----------------->

    <section class="productos">
      <div class="producto1">
        <img src="Imgs/skittles.jpg" id="imgProducto">
        <h3>SKITTLES ORIGINAL</h3>
        <p>61,5 GR</p>
        <p>$890</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/sunny.jpg" id="imgProducto">
        <h3>CALUGAS SUNY</h3>
        <p>BOLSA 360 GR</p>
        <p>$2.230</p>
        <button>Añadir al carrito</button>
      </div>
      <div class="producto1">
        <img src="Imgs/super8.jpg" id="imgProducto">
        <h3>OBLEA SUPER 8</h3>
        <p>DISPLAY 24 UNIDADES</p>
        <p>$5.290</p>
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