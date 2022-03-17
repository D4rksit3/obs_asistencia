<?php include "../vistas/header_adm.php";?>

<div class="container">
    <h1> AGREGAR MOTIVO</h1>

    <form action="user.php" method="post">
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">AGREGAR MOTIVO</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="name" required>
    </div>
  </div>
 
  

  <div class="mb-3 row">
  <div class="col-sm-2">
  <button type="submit" name="submit"  class="btn btn-dark">Agregar</button>
  </div>
  </div>
  </form>
  <?
  
$name = $_POST['name'];
if (isset($_POST['submit'])) {
    
    $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
    $sql = "INSERT INTO motivo (motivo) VALUES ('$name')";
    mysqli_query($conexion,$sql);
    
    echo '<div class="alert alert-success" role="alert">
 El motivo se agrego correctamente!
</div>';
    
}


  ?>


</div>



