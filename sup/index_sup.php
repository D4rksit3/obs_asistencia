<? 

session_start();
$varsesion = $_SESSION['usuario'];
$rol = $_SESSION['id_rol'];
$user = $varsesion;

if($varsesion == null || $varsesion = ''){

  
  header('Location:../login.php');
  die();
}
if ($rol != 3) {
  header('Location:../login.php');
  die();
}
$hora = date('d-m-Y h:i:s a', time());
$fecha = date('d-m-Y');





?>
<?php include "../vistas/header_sup.php";?>

<body>
  
  <div class="container">
    <p>Ausentismo por fecha <? echo $fecha ?></p>
    
        <!-- <table class="table">
          <thead class="table-dark">
            ...
          </thead>
          <tbody>
            ...
          </tbody>
        </table>-->

        <table class="table"> 
  <thead class="table-dark">
    <tr  >
      
      
     
      <th  scope="col">Sub Campaña</th>
      <th scope="col">Supervisor</th>
      <th scope="col">Ejecutivo</th>
      <th scope="col">DNI</th>
      <th scope="col">Asesor</th>
      <!-- <th scope="col">Telefono</th> -->
      <th scope="col">Horario</th>
      <th scope="col">Condicion</th>
      <th scope="col">Modalidad</th>
      <th scope="col">Motivo</th>
      
      <!-- <th scope="col">Observacion GTR</th>
      <th scope="col">Motivo</th>
      <th scope="col">Observacion VC</th> -->



    </tr>
  </thead>
  <tbody>
  <?php 
      $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
      
      $sql = "SELECT * FROM reporte WHERE validar='0' AND fecha='$fecha'";
      $result = mysqli_query($conexion,$sql);
      
      //$varsesion



      while ($reportes = mysqli_fetch_array($result)) {
        ?>
    <tr class="table-danger">
      
      
      
        
        <td scope="row"><?php echo $reportes['sub_campaña']?></td>
        <td scope="row"><?php echo $reportes['supervisor']?></td>
        <td scope="row"><?php echo $reportes['ejecutivo']?></td>
        <td scope="row"><?php echo $reportes['documento']?></td>
        <td scope="row"><?php echo $reportes['nombre_asesor']?></td>
        
        <td scope="row"><?php echo $reportes['horario']?></td>
        <td scope="row"><?php echo $reportes['condicion']?></td>
        <td scope="row"><?php echo $reportes['modalidad']?></td>

        <td>
          <a href="motivo_sup.php?id=<?php echo $reportes['id']; ?>" class="btn btn-warning">Motivo</a>
          
        </td>
      
        


       
    </tr>
    
    <?php } ?>
  </tbody>
</table>
</div>



 




</body>


