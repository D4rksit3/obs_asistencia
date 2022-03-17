<?php include "../vistas/header_adm.php";?>
<?php

$id = $_GET['id'];

$conexion = mysqli_connect("localhost","root","root","obs_asitencia");
$sql = "SELECT * FROM motivo WHERE id_motivo='$id'";
$query = mysqli_query($conexion,$sql);

$result = mysqli_fetch_array($query);

/* 
echo $id; */


?>
<div class="container">
    <br>
<form class="row g-3" action="ed_mot.php?id=<? echo $id ?>" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Motivo</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombre" value="<? echo $result['motivo'] ?>">
  </div>

 

 
  <div class="col-10">
    <button type="submit" name="boton" class="btn btn-primary">Actualizar</button>
  </div>

<?

$nombre = $_POST['nombre'];


if (isset($_POST['boton'])) {

    
    $insert = "UPDATE motivo SET motivo='$nombre' WHERE id_motivo='$id' ";
    $res = mysqli_query($conexion,$insert);
    if ($res) {
        echo '<div class="alert alert-success" role="alert">
 Motivo "'.$nombre.'" Editado correctamente!
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