<?php
//header("Content-Type: text/html;charset=utf-8");
$usuario  = "root";
$password = "root";
$servidor = "localhost";
$basededatos = "obs_asitencia";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
mysqli_query($con,"SET SESSION collation_connection ='ISO-8859-1'");
mysqli_set_charset($con, 'ISO-8859-1');
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

?>
