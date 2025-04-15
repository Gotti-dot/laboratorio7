<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_de_ventas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
?>