<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../../../public/Argazkiak/phonix.png">
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../../css/hornitzailea.css">
    <title>Hornitzailea</title>
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
                                <li><a href="../../../supplies/idiomas/esp/hornitzailea.php">Español</a></li>
                                <li><a href="../../../supplies/idiomas/eng/hornitzailea.php">Ingelera</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="form">
        <form method="POST">
            <h1> - Bete formularioa -</h1><br>
            <label for="empresa">Enpresaren izena:</label>
            <input type="text" id="empresa" name="empresa" placeholder="Jarri hemen enpresaren izena" required><br>

            <label for="material">Materiala:</label>
            <input type="text" id="material" name="material" placeholder="Jarri zure materiala hemen" required><br>

            <label for="webgunea">Enpresaren webgunea:</label>
            <input type="text" name="webgunea" id="webgunea" placeholder="Jarri webgunea hemen"><br>

            <label for="kontua">Kontu korrontea:</label>
            <input type="text" name="kontua" id="kontua" placeholder="Jarri zure kontu korrontea hemen"><br>

            <label for="telefono_contacto">Telefono-harremana:</label>
            <input type="text" name="telefono_contacto" id="telefono_contacto" placeholder="Jarri zure telefonoa hemen"><br>

            <label for="gmail">Gmail:</label>
            <input type="email" id="gmail" name="gmail" placeholder="Jarri zure e-posta hemen" required><br>

            <label for="gehigarriak">Gehigarriak:</label>
            <textarea name="gehigarriak" cols="60" rows="10"></textarea><br>

            <div class="botones">
                <input type="submit" class="enviar" value="Bidali">
                <input type="reset" class="enviar" value="Ezabatu">
            </div>
        </form>
    </div>
    
    <?php
$servername = "localhost:3306";
$username = "root";
$password = "1WMG2023";
$dbname = "reborn";

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Revisar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if (isset($_POST['empresa']) && isset($_POST['material']) && isset($_POST['webgunea']) && isset($_POST['kontua']) && isset($_POST['telefono_contacto']) && isset($_POST['gmail']) && isset($_POST['gehigarriak'])) {

    $empresa = $_POST['empresa'];
    $material = $_POST['material'];
    $webgunea = $_POST['webgunea'];
    $kontua = $_POST['kontua'];
    $telefono = $_POST['telefono_contacto'];
    $gmail = $_POST['gmail'];
    $gehigarriak = $_POST['gehigarriak'];
    $id = NULL;

    // Corregir la sintaxis de la consulta SQL y agregar comillas a los valores de cadena
    $sqlInsertar = "INSERT INTO reborn.hornitzailea (ID, Enpresa, Materiala, Enpresaren_webgunea, Kontu_zenbakia_ES00_0000_0000_0000_0000_0000, Telefono_zenbakia, Enpresaren_gmail_helbidea, Gehigarriak) VALUES (NULL, '$empresa', '$material', '$webgunea', '$kontua', '$telefono', '$gmail', '$gehigarriak')";

    $resultado = $conexion->query($sqlInsertar);
}
?>
             <div class="ir_a_comprar">
                <a href="../../../supplies/idiomas/eusk/produktuak.php">Erostera joan</a>
             </div>
    <!---Empieza todo el texto-->
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
</body>
</html>
