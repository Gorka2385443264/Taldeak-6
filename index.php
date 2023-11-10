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
    <title>Inicio</title>
</head>
<body>
    <div class="oferta">
        <p>¡Oferta!</p>
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
                        <li><a href="../../supplies/idiomas/esp/informazioa.html" id="informazioa">Informacion</a></li>	
                        <li><a href="../../supplies/idiomas/esp/produktuak.php">Productos</a></li>		
                        <li><a href="#">Idiomas</a>
                            <ul>
                                <li><a href="../eusk/index.php">Euskera</a></li>
                                <li><a href="../eng/index.php">Ingles</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <br>
    <div class="tituloa">
    <h2>Tendencias <i class="fa-solid fa-fire"></i></h2>
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
    <h2>Tabla de Noticias</h2><br>


    <form method="post">
        <label for="ordenar">¿Cómo quieres ordenar la tabla por Fecha?</label><br>
        <select name="orden">
            <option value="ASC">Nuevo</option>
            <option value="DESC">Viejo</option>
        </select>
        <input type="submit" name="ordenar_fecha" value="Ordenar por Fecha"><br><br>

        <label for="buscar_fecha_vieja">Buscar fechas más viejas/igual que:</label><br>
          <input class="input_texto" type="text" name="fecha_ingresada_vieja" placeholder="Fecha (YYYY-MM-DD)">
    <input type="submit" name="buscar_mas_vieja" value="Buscar fechas más viejas"><br><br>

    <label for="buscar_fecha_nueva">Buscar fechas más nuevas/igual que:</label><br>
    <input class="input_texto" type="text" name="fecha_ingresada_nueva" placeholder="Fecha (YYYY-MM-DD)">
    <input type="submit" name="buscar_mas_nueva" value="Buscar fechas más nuevas"><br><br>

        <label for="buscar_entre_fechas">Buscar entre dos Fechas:</label><br>
        <input class="input_texto" type="text" name="fecha_inicial" placeholder="Fecha Inicial (YYYY-MM-DD)">
        <input class="input_texto" type="text" name="fecha_final" placeholder="Fecha Final (YYYY-MM-DD)">
        <input type="submit" name="buscar_entre_fechas" value="Buscar entre dos Fechas"><br><br>

        <input type="submit" name="ver_todos" value="Ver Todos">
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