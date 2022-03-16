<?php include "../vistas/header_adm.php";?>

<div class="container">

<h1>EDITAR USUARIO</h1>

<form method="post">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Rol</th>
      <th scope="col">Editar</th>
     
    </tr>
  </thead>
  <tbody>
    
        <?
        $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
        $sql = "SELECT * FROM usuario";
        $query = mysqli_query($conexion,$sql);

        while ($array = mysqli_fetch_array($query)) {
            if ($array['id_rol'] == 1) {
                $USER = "ADMINISTRADOR";
            }elseif ($array['id_rol'] == 2) {
                $USER = "GTR";
            }elseif ($array['id_rol'] == 3) {
                $USER = "SUPERVISOR";
            }

            ?>
            <tr>
            <td><? echo $array['nombre'] ?></td>
            <td><? echo $array['usuario'] ?></td>
            <td><? echo $array['contraseña'] ?></td>
            <td><? echo $USER ?></td>
            <td>
            <a type="submit" href="edit.php?id=<? echo $array['id'] ?>" class="btn btn-dark">Editar</a>
            <a type="boton_del" href="del.php?id=<? echo $array['id'] ?>" class="btn btn-dark">Eliminar</a>
            </td>
            </tr>
            <?
        }
        $delete = $_GET['id'];

        if (isset($_POST['boton_del'])) {
            $sql = "DELETE FROM usuario WHERE id='$id'";
             mysqli_query($conexion,$sql);
        }else {
            
           /*  if ($del) {
                echo '<div class="alert alert-success" role="alert">
  Se elimino correctamente!
</div>';
            }else {
                
            } */
        }
        




        ?>
      
   
    
   
  </tbody>
</table>
</form>









</div>