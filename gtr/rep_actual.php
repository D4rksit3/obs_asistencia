<? 
session_start();
$varsesion = $_SESSION['usuario'];
$rol = $_SESSION['id_rol'];
$hora = date('d-m-Y h:i:s a', time());
$fecha = date('d-m-Y');
if($varsesion == null || $varsesion = ''){
  header('Location:../login.php');
  die();
}if ($rol != 2) {
  header('Location:../login.php');
  die();
}
?>
<?php include "../vistas/header_gtr.php";?>

<div class="container">

<h1>Ausentismo Actual</h1>
<p> Ausentes por Fecha: <? echo $fecha ?></p>






<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css
https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css
https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="style_login/jquery-3.6.0.js" type="text/javascript"></script>



</head>
<body>
    
    <div class="">
  



    <table table id="customersTable" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
                <!-- <th scope="col">ID</th>-->
                <th scope="col">Fecha</th> 
                
                <th scope="col">Supervisor</th>
                <th scope="col">Ejecutivo</th>
                <th scope="col">DNI</th>
                <th scope="col">Asesor</th>
                
                <th scope="col">Horario</th>
                <th scope="col">Condicion</th>
                <th scope="col">Modalidad</th> 
                <th scope="col">Telefono</th>
                <th scope="col">Motivo</th> 
                <th scope="col">Observacion VC</th>
                

                
        </tr>
    </thead>
   
    <!-- <tfoot>
        <tr>
                <th  scope="col">Sub Campaña</th>
                <th scope="col">Supervisor</th>
                <th scope="col">Ejecutivo</th>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Horario</th>
                <th scope="col">Condicion</th>
                <th scope="col">Modalidad</th> 
        </tr>
    </tfoot> -->
</table>












<!--  -->
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script> 


<script type="text/javascript">
    $(document).ready(function() {
        $('#customersTable').dataTable({
            dom: 'Bfrtip',
            buttons: [ 'excel','print' ],
            "processing": true,
            "ajax": "get_fecha.php",
            "columns": [
                /* {data: 'key_id'}, */
                /*{data: 'sub_campaña'}, */
                {data: 'fecha'},
                {data: 'supervisor'},
                {data: 'ejecutivo'},
                {data: 'documento'},
                {data: 'nombre_asesor'},
                
                {data: 'horario'},
                {data: 'condicion'},
                {data: 'modalidad'},
                {data: 'telefono'},
                {data: 'motivo'},
                {data: 'observacion_vc'},
                


            ]
        });
    });
    </script>

</div>