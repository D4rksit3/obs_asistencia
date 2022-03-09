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
$hora = date('d-m-Y h:i:s a', time());
$fecha = date('d-m-Y');
?>
<?php include "../vistas/header_gtr.php";?>

<div class="container">
<br>
<style>
.table>:not(caption)>*>* {
    padding: 0.5rem 0.5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}

</style>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Nombre</th>
      <th scope="col">Asistencia</th>
      <th scope="col">Confirmar</th>
    </tr>
  </thead>
  <tbody>
  <?  
            $conn = mysqli_connect("localhost","root","root","obs_asitencia");
            $sql = "SELECT * FROM reporte WHERE validar='0' and fecha='$fecha'";
            $res = mysqli_query($conn,$sql);

            while ($filas = mysqli_fetch_array($res)) {
        ?>
    <tr>
      <th>
        
          <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="<? echo $filas['nombre_asesor'] ?>">
            


          
        </th>
      <td>
      <div class="col-auto"><select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Selecciona Opcion</option>
            <option value="0">Asistio</option>
            <option value="0">Falto</option></select></div>     
        </td>
        <td>
          <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirmar Asistencia</button>
            </div>
        </td>
      
    </tr>
    <?  
            }
        ?>
  </tbody>
</table>


