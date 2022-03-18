<? 
session_start();
$varsesion = $_SESSION['usuario'];
$conexion = mysqli_connect("localhost","root","root","obs_asitencia");

$rol = $_SESSION['id_rol'];
$user = $varsesion;
if($varsesion == null || $varsesion = ''){
  header('Location:../login.php');
  die();
}if ($rol != 3) {
  header('Location:../login.php');
  die();
}
$id =  $_GET['id'];
$hora = date('d-m-Y h:i:s a', time());
$fecha = date('d-m-Y');
?>

<?

$id = $_GET['id'];



$telefono = $_POST['telefono'];
$observacion = $_POST['observacion'];
$motivo = $_POST['motivo'];
$validar = '1';

/* echo $telefono.' '.$observacion.' '.$motivo.' '.$id; */


$query = "UPDATE reporte SET validar='$validar',telefono='$telefono',motivo='$motivo',observacion_vc='$observacion' WHERE id='$id'";
mysqli_query($conexion,$query);

header("Location: edit_motivo.php")

//77025138

?>