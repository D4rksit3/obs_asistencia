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

<?php
    include_once '../DB/conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    
    $sql = " SELECT * FROM reporte WHERE validar='0' AND fecha='$fecha'";
    $sql .= " ORDER BY id ";
    $resultado = $conexion->prepare($sql);
    $resultado->execute();
    $empleados=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css
https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css
https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="style_login/jquery-3.6.0.js" type="text/javascript"></script>



<head>



</head>
<body>
       
    <div>
      <br>
      <p>Reporte por fecha: <? echo $fecha; ?></p>
       

        <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Sub campa??a</th>
                <th>Supervisor</th>
           
                <th>DNI</th>
                <th>Asesor</th>
                <th>Horario</th>
                <th>Condicion</th>
                <th>Modalidad</th>
                <th>Motivo</th>
            </tr>
        </thead>
        <tbody>
        <?php
                              foreach($empleados as $empleados){
        ?>
    
            <tr>
              <td><?php echo $empleados['sub_campa??a'];?></td>
                <td><?php echo $empleados['supervisor'];?></td>
                
                <td><?php echo $empleados['documento'];?></td>
                <td><?php echo $empleados['nombre_asesor'];?></td>
                <td><?php echo $empleados['horario'];?></td>
                <td><?php echo $empleados['condicion'];?></td>
                <td><?php echo $empleados['modalidad'];?></td>
                <td>
          <a href="motivo_sup.php?id=<?php echo $empleados['id']; ?>" class="btn btn-warning">Motivo</a>
          
        </td>
            </tr>
         
            <?php } ?>
        </tbody>
       
    </table>
        

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script> 

<script>
    $(document).ready(function() {
    $('#example').DataTable( {
     
    } );
} );
</script>




</body>















