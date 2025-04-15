<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemas_de_revervas_de_hotel";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>