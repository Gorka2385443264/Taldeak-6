<?php
$servername = "localhost:3306";
$username = "root";
$password = "1WMG2023";
$dbname = "reborn";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM reborn.noticias";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['ordenar_fecha'])) {
        $sql .= " ORDER BY Fecha {$_POST['orden']}";
    }

    if (isset($_POST['buscar_por_fecha'])) {
        $fecha_ingresada_por_el_usuario = $_POST['fecha_ingresada'];
        $sql = "SELECT * FROM reborn.noticias WHERE fecha <= '$fecha_ingresada_por_el_usuario' ORDER BY fecha ASC LIMIT 1";
    } elseif (isset($_POST['buscar_mas_vieja'])) {
        $fecha_ingresada_por_el_usuario = $_POST['fecha_ingresada_vieja'];
        $sql = "SELECT * FROM reborn.noticias WHERE fecha <= '$fecha_ingresada_por_el_usuario'";
    } elseif (isset($_POST['buscar_mas_nueva'])) {
        $fecha_ingresada_por_el_usuario = $_POST['fecha_ingresada_nueva'];
        $sql = "SELECT * FROM reborn.noticias WHERE fecha >= '$fecha_ingresada_por_el_usuario'";
    } elseif (isset($_POST['buscar_entre_fechas'])) {
        $fecha_inicial = $_POST['fecha_inicial'];
        $fecha_final = $_POST['fecha_final'];
        $sql = "SELECT * FROM reborn.noticias WHERE fecha BETWEEN '$fecha_inicial' AND '$fecha_final'";
    } elseif (isset($_POST['ver_todos'])) {
        $sql = "SELECT * FROM reborn.noticias";
    }
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../../public/Argazkiak/phonix.png">
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../css/index.css">
    <title>Beginning</title>
</head>
<body>
    <div class="oferta">
        <p>¡Offer!</p>
    </div>
    <a href="https://www.goierrieskola.eus/es/">
        <img class="goierri" src="../../../../public/Argazkiak/goierri-logo.png" alt="Goierri Logo" href="https://www.goierrieskola.eus/es/">
    </a>

    <header>
        <div class="container__menu">
            <!-- la barra -->
            <div class="menu">	
                <nav>
                    <ul>
                        <li><a href="#" id="selected"></a></li>
                        <li><a href="../../supplies/idiomas/eng/informazioa.html" id="informazioa">Information</a></li>	
                        <li><a href="../../supplies/idiomas/eng/produktuak.php">Products</a></li>		
                        <li><a href="#">Languages</a>
                            <ul>
                                <li><a href="../esp/index.php">Spanish</a></li>
                                <li><a href="../eusk/index.php">Baskque</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <br>
    <div class="tituloa">
    <h2>Trending <i class="fa-solid fa-fire"></i></h2>
   <div class="productos">
        <div class="producto_1"><a class="produktuak_esteka" href="#">
            <i class="fa-solid fa-fire"></i>MSI MPG B550 GAMING PLUS 

            <br>
            <img src="../../../../public/Argazkiak/Productos/producto_1.png" alt="">
        </a>
        </div>
        <div class="producto_2">
            <i class="fa-solid fa-fire"></i>WD BLACK SN770 1TB SSD

            <br>
            <img src="../../../../public/Argazkiak/Productos/producto_2.png" alt="">
        </div>
        <div class="producto_3">
            <i class="fa-solid fa-fire"></i>Sapphire Pulse AMD Radeon RX 6700 XT 

            <br>
            <img src="../../../../public/Argazkiak/Productos/producto_3.png" alt="">
        </div>
        <div class="producto_4">
            <i class="fa-solid fa-fire"></i>MSI MAG A650BN 650W 80 Plus Bronze

            <br>
            <img src="../../../../public/Argazkiak/Productos/producto_4.png" alt="">
        </div>
   </div>
    </div>
    <!---LA PARTE DE LAS NEWS DE LA PAGINA-->
    <br>
    <h2>News Table</h2><br>


    <form method="post">
        <label for="ordenar">How do you want to sort the table by Date?</label><br>
        <select name="orden">
            <option value="ASC">New</option>
            <option value="DESC">Old</option>
        </select>
        <input type="submit" name="ordenar_fecha" value="Ordenar por Fecha"><br><br>

        <label for="buscar_fecha_vieja">Find dates older/same as:</label><br>
          <input class="input_texto" type="text" name="fecha_ingresada_vieja" placeholder="Date (YYYY-MM-DD)">
    <input type="submit" name="buscar_mas_vieja" value="Find older dates"><br><br>

    <label for="buscar_fecha_nueva">Find dates newer/same as:</label><br>
    <input class="input_texto" type="text" name="fecha_ingresada_nueva" placeholder="Date (YYYY-MM-DD)">
    <input type="submit" name="buscar_mas_nueva" value="Find newer dates"><br><br>

        <label for="buscar_entre_fechas">Search between two Dates:</label><br>
        <input class="input_texto" type="text" name="fecha_inicial" placeholder="Initial Date (YYYY-MM-DD)">
        <input class="input_texto" type="text" name="fecha_final" placeholder="Final Date (YYYY-MM-DD)">
        <input type="submit" name="buscar_entre_fechas" value="Search between two Dates"><br><br>

        <input type="submit" name="ver_todos" value="See all">
    </form>

    <?php
if ($result->num_rows > 0) {
    echo '<div class="noticias-container">';
    $counter = 0;

    while ($row = $result->fetch_assoc()) {
        if ($counter % 3 == 0) {
            echo '<div class="noticias-row">';
        }

        echo '<div class="noticias">';
        echo '<div class="imagen-noticia"><img src="' . $row["Imagen"] . '" alt="Imagen del producto"></div>';
        echo '<div class="contenido-noticia">';
        echo '<h2>' . $row["Fecha"] . '</h2>';
        echo '<h3>' . $row["Izenburua"] . '</h3><br>';
        echo '<p class="texto-cortado">' . $row["Textua"] . '</p>';
        echo '</div>'; // Cierre de div para el contenido de la noticia
        echo '</div>'; // Cierre de div para la noticia

        $counter++;

        if ($counter % 3 == 0) {
            echo '</div>'; // Cierre de la fila después de 3 noticias
        }
    }

    echo '</div>'; // Cierre del contenedor principal
} else {
    echo 'No se encontraron las noticias, en las fechas indicadas.';
}
?>






    <!---FOOTER-->
    <br><br>
    <footer>
        <div class="footer-content">
            <div class="left">
                <strong>Social networks</strong>
                <p id="instagram"><a href="https://www.instagram.com/" target="_blank"> <i class="fab fa-instagram"></i> Instagram</a></p>
                <p id="youtube"><a href="https://www.youtube.com/" target="_blank"> <i class="fab fa-youtube"></i> Youtube</a></p>
                <p id="twitter"><a href="https://twitter.com/home" target="_blank"> <i class="fab fa-twitter-square"></i> Twitter</a></p>
                <p id="facebook"><a href="https://www.facebook.com/" target="_blank"> <i class="fab fa-facebook-square"></i> Facebook</a></p>
            </div>
            <div class="center">
               <strong>Legal matters</strong> 
                <p><a href="#">RGPD (UE)</a></p>
                <p><a href="#">Terms and Conditions</a></p>
                <p><a href="#">Privacy Policy</a></p>
                <p><a href="#">Legal warning</a></p>
                </div>
            <div class="right">
                <strong>Contact us</strong>
                <p><i class="fa-solid fa-envelope"></i> Email: reborn@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i> Phone: +372 458 763 198</p>
                <p><a href="https://maps.app.goo.gl/XeUK7mCwxkADmLDj9" target="_blank"><i class="fa-solid fa-compass"></i> Direction: Kentmanni, 10141 Tallinn, Estonia</a></p>
            </div>
        </div>
    </footer>

    <?php
    $conn->close();
    ?>
</body>
</html>