<?php
//variables para base de datos
$servidor="localhost";
$db="carrito_venta";
$usuario="root";
$password="root";

$conexion= mysqli_connect($servidor, $usuario, $password, $db);

//validar la conexion
if (!$conexion) {
    echo "Conexion Fallida";
}

?>