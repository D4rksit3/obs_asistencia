<? 
session_start();
$conexion = mysqli_connect("localhost","root","root","obs_asitencia");
$varsesion = $_SESSION['usuario'];
$rol = $_SESSION['id_rol'];
if($varsesion == null || $varsesion = ''){
  header('Location:../login.php');
  die();
}
if ($rol != 2) {
  header('Location:../login.php');
  die();
}
$hora = date('d-m-Y h:i:s a', time());
$fecha = date('d-m-Y');
?>
<?

$id = $_GET['id'];
$validar = $_POST['seleccion'];


$query = "UPDATE reporte SET validar='$validar' WHERE id='$id'";
mysqli_query($conexion,$query);

header("Location: mod_ingresos.php");




?>