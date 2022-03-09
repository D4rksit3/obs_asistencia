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






 
<div class="container">
  <br>
        <h1> Subir Reporte </h1>

        <!-- Interactuar excel con php/mysql-->

            <form action="../gtr/validar_excel.php" method="POST" enctype="multipart/form-data">    
                <div class="form-group">
                    <label for="exampleFormControlFile1">Seleccionar Archivo (Solo .csv)</label>
                    <br>
                    <br>
                    <input type="file" name="dataCliente" id="file-input"  class="form-control-file" >
                    <br>
                    <br>
                </div>
                    <input type="submit" name="subir" class="btn btn-success" value="Subir Excel"/>
                    
                    <br>
            </form>

            <?php
          
            ?>
       
            
       


    </div>
