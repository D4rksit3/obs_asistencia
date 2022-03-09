<?php
$conexion = mysqli_connect("localhost","root","root","obs_asitencia");
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$rol = $_POST['id_rol'];

session_start();

$_SESSION['usuario'] =  $usuario;
$_SESSION['contraseña'] = $contraseña;
$_SESSION['id_rol'] = $rol;

/* echo $usuario.' '.$contraseña.' '.$rol; */

$sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND contraseña= '$contraseña' AND id_rol = '$rol'";

$resultado = mysqli_query($conexion,$sql);
$filas = mysqli_fetch_array($resultado);

if ($filas['id_rol'] == 1){

    header('location: admin.php');


}elseif ($filas['id_rol'] == 2){
    header('Location:gtr/index_gtr.php');
}elseif ($filas['id_rol'] == 3) {
    header('Location:sup/index_sup.php');
}else {
    echo "error";
}

/* session_start();

$_SESSION['usuario'] =  $usuario;
$_SESSION['contraseña'] = $contraseña;
$_SESSION['id_rol'] = $rol;

$conexion = mysqli_connect("localhost","root","root","obs_asistencia");

$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contraseña='$contraseña' AND id_rol='$rol' ";
$resultado = mysqli_query($conexion,$sql);

echo $resultado; */


?>