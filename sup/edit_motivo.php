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
    
    $sql = " SELECT * FROM reporte WHERE validar='1' AND fecha='$fecha'";
    $sql .= " ORDER BY id ";
    $resultado = $conexion->prepare($sql);
    $resultado->execute();
    $empleados=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">



<head>



</head>
<body>
       
    <div>
        
        <br>
        <p>Motivos a la fecha: <? echo $fecha; ?></p>
        <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Supervisor</th>
         
                <th>Nombre Asesor</th>
                <th>Telefono</th>
                <th>Motivo</th>
                <th>Observacion</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
        <?php
                              foreach($empleados as $empleados){
        ?>
    
            <tr>
                <td><?php echo $empleados['supervisor'];?></td>
                
                <td><?php echo $empleados['nombre_asesor'];?></td>
                <td><?php echo $empleados['telefono'];?></td>
                <td><?php echo $empleados['motivo'];?></td>
                <td><?php echo $empleados['observacion_vc'];?></td>
                <td>     <a href="act_motivo.php?id=<?php echo $empleados['id']; ?>" class="btn btn-warning">Editar</a>
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
       /*  dom: 'Bfrtip',
        buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ] */
    } );
} );
</script>




</body>


