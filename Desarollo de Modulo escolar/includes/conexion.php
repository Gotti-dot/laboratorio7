<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema_de_inscripcion_escolar";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexion falida: " . $conn->connect_error);
    }
?>