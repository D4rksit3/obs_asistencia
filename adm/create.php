<?php include "../vistas/header_adm.php";?>
<?php

$id = $_GET['id'];

$conexion = mysqli_connect("localhost","root","root","obs_asitencia");
$sql = "SELECT * FROM usuario WHERE id='$id'";
$query = mysqli_query($conexion,$sql);

$result = mysqli_fetch_array($query);

/* 
echo $id; */


?>
<div class="container">
    <br>
<form class="row g-3" action="edit.php?id=<? echo $id ?>" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombre" value="<? echo $result['nombre'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="inputPassword4" name="usuario" value="<? echo $result['usuario'] ?>">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Contraseña</label>
    <input type="text" class="form-control" id="inputAddress" name="contraseña" value="<? echo $result['contraseña'] ?>">
  </div>
 
  <div class="col-md-6">
    <label for="inputState" class="form-label">Rol</label>
    <select class="form-select" id="validationCustom04" id="inputState" name="rol" class="form-select" required>
      <option selected disabled value="">Seleccionar...</option>

      <option value="2">GTR</option>
      <option value="3">SUPERVISOR</option>

    </select>
    <div class="invalid-feedback">
      Por favor selecciona el rol.
    </div>
  </div>
 
  <div class="col-10">
    <button type="submit" name="boton" class="btn btn-primary">Actualizar</button>
  </div>

<?

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$rol = $_POST['rol'];

if (isset($_POST['boton'])) {

    
    $insert = "UPDATE usuario SET nombre='$nombre',usuario='$usuario',contraseña='$contraseña',id_rol='$rol' WHERE id='$id' ";
    $res = mysqli_query($conexion,$insert);
    if ($res) {
        echo '<div class="alert alert-success" role="alert">
  USUARIO "'.$nombre.'" Editado correctamente!
</div>';
    }else {
        echo '<div class="alert alert-danger" role="alert">
  Error en actualizar!
</div>';
    }
    

    /* header("LOCATION: edit_user.php"); */
}else {
    
}




?>
</form>

</div>