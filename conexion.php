<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "adproveedor";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) { // Se debe verificar con connect_errno
    die("Conexión fallida: " . $conexion->connect_error); // connect_error se usa para obtener el mensaje
} else {
    echo "La conexion ha sido exitosa";
}

$conexion->close();
?>