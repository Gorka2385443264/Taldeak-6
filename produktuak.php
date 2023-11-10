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
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $params = array();
    $conditions = array();

    if (isset($_GET['marca']) && !empty($_GET['marca'])) {
        $conditions[] = "Marca = ?";
        $params[] = $_GET['marca'];
    }

    if (isset($_GET['modelo']) && !empty($_GET['modelo'])) {
        $conditions[] = "Produktua = ?";
        $params[] = $_GET['modelo'];
    }

    if (isset($_GET['precio']) && !empty($_GET['precio'])) {
        $orden = ($_GET['precio'] == 'asc') ? 'asc' : 'desc';
        $sql .= (empty($conditions) ? " WHERE" : " AND") . " ORDER BY Prezioa $orden";
    }

    if (!empty($conditions)) {
        $sql .= " WHERE " . implode(" AND ", $conditions);
    }
}

// Utilizar una consulta preparada para prevenir inyecciones SQL
if (isset($sql)) {
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        if (!empty($params)) {
            $types = str_repeat('s', count($params)); // assuming all params are strings
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();
    } else {
        echo "Error en la preparación de la consulta";
    }
}

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
    <title>Produktuak</title>
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
                        <li><a href="../../../Mainpage/eusk/index.php" id="selected"></a></li>
                        <li><a href="../../../supplies/idiomas/eusk/informazioa.html" id="informazioa">Informazioa</a></li>	
                        <li><a href="../../../supplies/idiomas/eusk/produktuak.php" id="productos">Produktuak</a></li>		
                        <li><a href="#">Hizkuntzak</a>
                            <ul>
                                <li><a href="../../../supplies/idiomas/esp/produktuak.php">Español</a></li>
                                <li><a href="../../../supplies/idiomas/eng/produktuak.php">Ingelera</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <center>
        <div class="hornitzailea">
            <p><a href="hornitzailea.php">Hornitzaile izan nahi al duzu?</a></p>
        </div>
    </center><br><br>

    <h2>Produktuen taula</h2>

    <form method="GET">
        <label for="marca">Iragazi markaren arabera:</label>
        <select name="marca" id="marca">
            <option value="">Hautatu marka bat</option>
            <?php foreach ($marcas as $marca) : ?>
                <option value="<?php echo $marca; ?>"><?php echo $marca; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="modelo">Iragazi ereduaren arabera:</label>
        <select name="modelo" id="modelo">
            <option value="">Aukeratu eredu bat</option>
            <?php foreach ($modelos as $modelo) : ?>
                <option value="<?php echo $modelo; ?>"><?php echo $modelo; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="precio">Ordenatu prezioaren arabera:</label>
        <select name="precio" id="precio">
            <option value="asc">Prezio merkeagoa</option>
            <option value="desc">Prezio garestiagoa</option>
        </select>

        <input type="submit" value="Iragazkia">
        <input type="submit" name="todos" value="Erakutsi dena">
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
                <strong>Sare sozialak</strong>
                <p id="instagram"><a href="https://www.instagram.com/" target="_blank"> <i class="fab fa-instagram"></i> Instagram</a></p>
                <p id="youtube"><a href="https://www.youtube.com/" target="_blank"> <i class="fab fa-youtube"></i> Youtube</a></p>
                <p id="twitter"><a href="https://twitter.com/home" target="_blank"> <i class="fab fa-twitter-square"></i> Twitter</a></p>
                <p id="facebook"><a href="https://www.facebook.com/" target="_blank"> <i class="fab fa-facebook-square"></i> Facebook</a></p>
            </div>
            <div class="center">
               <strong>Legezko gaiak</strong> 
                <p><a href="#">RGPD (UE)</a></p>
                <p><a href="#">Baldintza juridikoak</a></p>
                <p><a href="#">Pribatutasun politika</a></p>
                <p><a href="#">Lege abisua</a></p>
                </div>
            <div class="right">
                <strong>Jarri gurekin harremanetan</strong>
                <p><i class="fa-solid fa-envelope"></i> Email: reborn@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i> Mugikorra: +372 458 763 198</p>
                <p><a href="https://maps.app.goo.gl/XeUK7mCwxkADmLDj9" target="_blank"><i class="fa-solid fa-compass"></i> Helbidea: Kentmanni, 10141 Tallinn, Estonia</a></p>
            </div>
        </div>
    </footer>

    <?php
    $conn->close();
    ?>
</body>
</html>