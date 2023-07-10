<?php
session_start();

// Verificar si el usuario ha iniciado sesión y si es un administrador
if (!isset($_SESSION['user'])) {
    // Redirigir al formulario de inicio de sesión si no ha iniciado sesión o no es un administrador
    header("Location: login.php");
    exit();
}

// Obtener el nombre del Admin desde la sesión
$nombreAdmin = $_SESSION['user'];

// Conectar a la base de datos
$mysqli = new mysqli("localhost", "root", "root", "tiendamm");

// Verificar la conexión
if ($mysqli->connect_errno) {
    echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
    exit();
}

// Función para obtener todos los productos de la tabla Producto
function obtenerProductos($mysqli)
{
    $query = "SELECT * FROM Producto";
    $result = $mysqli->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Función para crear un nuevo producto en la tabla Producto
function crearProducto($mysqli, $nombre, $descripcion, $precio, $stock)
{
    $query = "INSERT INTO Producto (Nombre, Descripcion, Precio, Stock)
            VALUES ('$nombre', '$descripcion', $precio, $stock)";
    return $mysqli->query($query);
}

// Función para actualizar un producto existente en la tabla Producto
function actualizarProducto($mysqli, $id, $nombre, $descripcion, $precio, $stock)
{
    $query = "UPDATE Producto
            SET Nombre = '$nombre', Descripcion = '$descripcion', Precio = $precio, Stock = $stock
            WHERE ID = $id";
    return $mysqli->query($query);
}

// Función para eliminar un producto de la tabla Producto
function eliminarProducto($mysqli, $id)
{
    $query = "DELETE FROM Producto WHERE ID = $id";
    return $mysqli->query($query);
}

// Procesar los formularios enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['crear'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        crearProducto($mysqli, $nombre, $descripcion, $precio, $stock);
    } elseif (isset($_POST['actualizar'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        actualizarProducto($mysqli, $id, $nombre, $descripcion, $precio, $stock);
    } elseif (isset($_POST['eliminar'])) {
        $id = $_POST['eliminar'];
        eliminarProducto($mysqli, $id);
    }
}

// Obtener todos los productos
$productos = obtenerProductos($mysqli);

// Cerrar la conexión a la base de datos
$mysqli->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Donde se activa el favicon-->
    <link rel="icon" href="Imgs/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="CSS/estiloAdmin.css"> <!-- Conexion con archivo css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script> <!-- Conexion a Bootstrap para archivos CSS-->

    <title>Panel administrativo</title>
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

    <div class="titulosAdmin">

        <h2>Panel de Administración</h2>

        <h2>¡Bienvenido
            <?php echo $nombreAdmin ?>!
        </h2>

    </div><br>



    <form class="formCrearProducto" method="POST" action="pagAdmin.php">
        <h3>Crear Producto</h3>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" required><br><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" required><br><br>

        <input type="submit" name="crear" value="Crear">
    </form>
    <br>

    <div class="formMostrarProducto">

        <!-- Productos mostrados en una tabla -->
        <h3>Productos</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
            <!-- Mostrar todos los productos, recorriendo el arreglo -->
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td>
                        <?php echo $producto['ID']; ?>
                    </td>
                    <td>
                        <?php echo $producto['Nombre']; ?>
                    </td>
                    <td>
                        <?php echo $producto['Descripcion']; ?>
                    </td>
                    <td>
                        <?php echo $producto['Precio']; ?>
                    </td>
                    <td>
                        <?php echo $producto['Stock']; ?>
                    </td>
                    <td>
                        <form method="POST" action="pagAdmin.php">
                            <input type="hidden" name="id" value="<?php echo $producto['ID']; ?>">
                            <input type="submit" name="eliminar" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>



    <br>

    <div class="formActualizarProducto">

        <!-- formulario actualizar Producto -->
        <h3>Actualizar Producto</h3>
        <form method="POST" action="pagAdmin.php">
            <label>ID:</label>
            <input type="number" name="id" height="10px" required><br><br>

            <label>Nombre:</label>
            <input type="text" name="nombre" required><br><br>

            <label>Descripción:</label>
            <input type="text" name="descripcion" required><br><br>

            <label>Precio:</label>
            <input type="number" step="0.01" name="precio" required><br><br>

            <label>Stock:</label>
            <input type="number" name="stock" required><br><br>

            <input type="submit" name="actualizar" value="Actualizar">
        </form>

    </div>




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