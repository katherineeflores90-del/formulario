<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "proveedores";

$conexion = mysqli_connect($servidor,$usuario,$password,$basedatos);

if(!$conexion)
{
    die("Error de conexión");
}

?>