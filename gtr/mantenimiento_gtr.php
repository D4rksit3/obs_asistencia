<? 

session_start();
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


?>
<?php include "../vistas/header_gtr.php";?>

<head>

<!-- <link rel="stylesheet" href="style_login/style_mtto_gtr.css"> -->

</head>

<body>
    

<div class="container">


</div>


</body>