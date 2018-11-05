<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$database = "comentarios";

$conexion = mysqli_connect($servidor, $usuario, $password)or die(mysqli_error($conexion));
mysqli_select_db($conexion, $database)or die(mysqli_error($conexion));
?>