<?php include "../vistas/header_adm.php";?>

<div class="container">

<h1>EDITAR MOTIVO</h1>

<form method="post">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Motivo</th>
      <th scope="col">Editar</th>
     
    </tr>
  </thead>
  <tbody>
    
        <?
        $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
        $sql = "SELECT * FROM motivo";
        $query = mysqli_query($conexion,$sql);

        while ($array = mysqli_fetch_array($query)) {
         

            ?>
            <tr>
            <td><? echo $array['motivo'] ?></td>
            
            <td>
            <a type="submit" href="ed_mot.php?id=<? echo $array['id_motivo'] ?>" class="btn btn-dark">Editar</a>
            <a type="boton_del" href="del_mot.php?id=<? echo $array['id_motivo'] ?>" class="btn btn-dark">Eliminar</a>
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