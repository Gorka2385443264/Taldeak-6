<?php
$servername = "localhost";
$username = "root";
$password = "1WMG2023";
$dbname = "reborn";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL por defecto para seleccionar todos los productos
$sql = "SELECT * FROM reborn.biltegia";

// Verificar si se han enviado parámetros GET para filtrar
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['marca']) && !empty($_GET['marca'])) {
        $marca = $_GET['marca'];
        $sql .= " WHERE Marca = '$marca'";
    }

    if (isset($_GET['modelo']) && !empty($_GET['modelo'])) {
        $modelo = $_GET['modelo'];
        // Añadir la condición WHERE si no se ha añadido previamente
        $sql .= (strpos($sql, 'WHERE') !== false) ? " AND Produktua = '$modelo'" : " WHERE Produktua = '$modelo'";
    }

    if (isset($_GET['precio']) && !empty($_GET['precio'])) {
        $orden = ($_GET['precio'] == 'asc') ? 'asc' : 'desc';
        // Agregar la cláusula ORDER BY solo si no existe en la consulta
        $sql .= (strpos($sql, 'ORDER BY') !== false) ? " Prezioa $orden" : " ORDER BY Prezioa $orden";
    }
}

// Ejecutar la consulta SQL
$result = $conn->query($sql);

// Obtener las marcas
$sql_marcas = "SELECT DISTINCT Marca FROM reborn.biltegia";
$result_marcas = $conn->query($sql_marcas);
$marcas = [];

if ($result_marcas->num_rows > 0) {
    while ($row = $result_marcas->fetch_assoc()) {
        $marcas[] = $row['Marca'];
    }
}

// Obtener los modelos
$sql_modelos = "SELECT DISTINCT Produktua FROM reborn.biltegia";
$result_modelos = $conn->query($sql_modelos);
$modelos = [];

if ($result_modelos->num_rows > 0) {
    while ($row = $result_modelos->fetch_assoc()) {
        $modelos[] = $row['Produktua'];
    }
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../../../public/Argazkiak/phonix.png">
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../../css/produktuak2.css">
    <title>Informacion</title>
</head>
<body>
    <div class="oferta">
        <p>¡Oferta!</p>
    </div>
    <a href="https://www.goierrieskola.eus/es/">
        <img class="goierri" src="../../../../../public/Argazkiak/goierri-logo.png" alt="Goierri Logo" href="https://www.goierrieskola.eus/es/">
    </a>

    <header>
        <div class="container__menu">
            <!-- la barra -->
            <div class="menu">	
                <nav>
                    <ul>
                        <li><a href="../../../Mainpage/esp/index.php" id="selected"></a></li>
                        <li><a href="../../../supplies/idiomas/esp/informazioa.html" id="informazioa">Informacion</a></li>	
                        <li><a href="../../../supplies/idiomas/esp/produktuak.php" id="productos">Productos</a></li>		
                        <li><a href="#">Idiomas</a>
                            <ul>
                                <li><a href="../../../supplies/idiomas/eng/produktuak.php">Ingles</a></li>
                                <li><a href="../../../supplies/idiomas/eusk/produktuak.php">Euskera</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <center>
        <div class="hornitzailea">
            <p><a href="hornitzailea.php">¿Quieres ser un proveedor?</a></p>
        </div>
    </center><br><br>

    <h2>Tabla de Productos</h2>

    <form method="GET">
        <label for="marca">Filtrar por marca:</label>
        <select name="marca" id="marca">
            <option value="">Seleccione una marca</option>
            <?php foreach ($marcas as $marca) : ?>
                <option value="<?php echo $marca; ?>"><?php echo $marca; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="modelo">Filtrar por modelo:</label>
        <select name="modelo" id="modelo">
            <option value="">Seleccione un modelo</option>
            <?php foreach ($modelos as $modelo) : ?>
                <option value="<?php echo $modelo; ?>"><?php echo $modelo; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="precio">Ordenar por precio:</label>
        <select name="precio" id="precio">
            <option value="asc">Precio mas barato</option>
            <option value="desc">Precio mas caro</option>
        </select>

        <input type="submit" value="Filtrar">
        <input type="submit" name="todos" value="Mostrar Todos">
    </form>
   
    <?php
    // Este bloque PHP debería ubicarse donde deseas mostrar los resultados.
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($result) && $result->num_rows > 0) {
            echo '<div class="noticias-container">';
            $counter = 0;

            while ($row = $result->fetch_assoc()) {
                if ($counter % 4 == 0) {
                    echo '<div class="noticias-row">';
                }

                echo '<div class="noticias">';
                echo '<div class="imagen-noticia"><img src="' . $row["imagenes"] . '" alt="Imagen del producto"></div>';
                echo '<div class="contenido-noticia">';
                echo '<h2>' . $row["Produktua"] . '</h2><br>';
                echo '<h4>Marca:  ' . $row["Marca"] . '</h4>';
                echo '<h4>Precio:  ' . $row["Prezioa"] . ' €</h4><br>';
                echo '<h5 class="texto-cortado">Valoración: ' . $row["Iritzia"] . ' /5 <i class="fa fa-star"></i></h5>';
                echo '</div>';
                echo '</div>';

                $counter++;

                if ($counter % 4 == 0) {
                    echo '</div>';
                }
            }
            echo '</div>';
        } else {
            echo 'No se encontraron productos con los filtros seleccionados.';
        }
    }
    ?>



    
    <!---FOOTER-->
    <br><br>
    <footer>
        <div class="footer-content">
            <div class="left">
                <strong>Redes sociales</strong>
                <p id="instagram"><a href="https://www.instagram.com/" target="_blank"> <i class="fab fa-instagram"></i> Instagram</a></p>
                <p id="youtube"><a href="https://www.youtube.com/" target="_blank"> <i class="fab fa-youtube"></i> Youtube</a></p>
                <p id="twitter"><a href="https://twitter.com/home" target="_blank"> <i class="fab fa-twitter-square"></i> Twitter</a></p>
                <p id="facebook"><a href="https://www.facebook.com/" target="_blank"> <i class="fab fa-facebook-square"></i> Facebook</a></p>
            </div>
            <div class="center">
               <strong>Asuntos legales</strong> 
                <p><a href="#">RGPD (UE)</a></p>
                <p><a href="#">Terminos y condificiones</a></p>
                <p><a href="#">Politica de privacidad</a></p>
                <p><a href="#">Aviso legal</a></p>
                </div>
            <div class="right">
                <strong>Contactar con nosotros</strong>
                <p><i class="fa-solid fa-envelope"></i> Email: reborn@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i> Telefono: +372 458 763 198</p>
                <p><a href="https://maps.app.goo.gl/XeUK7mCwxkADmLDj9" target="_blank"><i class="fa-solid fa-compass"></i> Direccion: Kentmanni, 10141 Tallinn, Estonia</a></p>
            </div>
        </div>
    </footer>
    <?php
    $conn->close();
    ?>
</body>
</html>