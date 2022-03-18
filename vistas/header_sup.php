<? 

session_start();
$varsesion = $_SESSION['usuario'];
$rol = $_SESSION['id_rol'];

if($varsesion == null || $varsesion = ''){

  
  header('Location:../login.php');
  die();
}
if ($rol != 3) {
  header('Location:../login.php');
  die();
}


?>


<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 

</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" >
      <img src="https://mdybpo.com/wp-content/uploads/2021/06/mdy_logo.svg" alt="" width="60" height="30" class="d-inline-block align-text-top">
      Control de Ausentismo
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../sup/index_sup.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../sup/edit_motivo.php">Editar motivo</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" href="../sup/motivo_sup.php">Motivo</a>
        </li>  -->
        <!-- <li class="nav-item">
          <a class="nav-link active" href="../gtr/mantenimiento_gtr.php">Mantenimiento</a>
        </li> -->
      </ul>
      <span class="navbar-text">
        <label for="">USUARIO: <? 
        $user = $_SESSION['usuario'];
        $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
        $sql = "SELECT * FROM usuario WHERE usuario = '$user'";

        $result = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_array($result);
        echo $fila['nombre'];
        
        
        ?> </label> 





        <a class="btn btn-danger" href="../vistas/logout.php"> Cerrar Sesion</a>
      </span>
    </div>
  </div>
</nav>

