<?php include "../vistas/header_adm.php";?>

<div class="container">
    <h1> CREAR USUARIO</h1>

    <form action="admin.php" method="post">
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre de usuario</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="name" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Usuario (DNI)</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="user" id="inputPassword" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-2">
      <input type="password" class="form-control" name="pass" id="inputPassword" required>
    </div>
  </div>
  
  
  <div class="mb-3 row">
    <label for="exampleDataList" class="form-label">Selecciona Rol</label>
    <div class="col-sm-4">
    <select class="form-select" name="rol" aria-label="Default select example">
    <option selected>SELECCIONAR</option>
   
    <!-- <option value="1">One</option> -->
    <option value="2">GTR</option>
    <option value="3">SUPERVISOR</option>
    
    </select>
  </div>
  </div>

  <div class="mb-3 row">
  <div class="col-sm-2">
  <button type="submit" name="submit"  class="btn btn-dark">Crear Usuario</button>
  </div>
  </div>
  </form>
  <?
  
$name = $_POST['name'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$rol = $_POST['rol'];

if (isset($_POST['submit'])) {
    
    $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
    $sql = "INSERT INTO usuario (nombre,usuario,contraseña,id_rol) VALUES ('$name','$user','$pass','$rol')";
    $query = mysqli_query($conexion,$sql);
    
    echo '<div class="alert alert-success" role="alert">
  USUARIO "'.$name.'" Agregado correctamente!
</div>';
    
}


  ?>


</div>




























