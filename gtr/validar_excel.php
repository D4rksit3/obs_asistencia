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
<meta charset="iso-8859-1" >
<?php include "../vistas/header_gtr.php";
header('Content-Type: text/html; charset=ISO-8859-1');  
?>

<div class="container">
<?php

require('config.php');
$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);
$hora = date('d-m-Y h:i:s a', time());
$fecha = date('d-m-Y');



$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);
       
        $key = !empty($datos[0])  ? ($datos[0]) : '';
		$sub_campaña = !empty($datos[1])  ? ($datos[1]) : '';
        $dni_sup  = !empty($datos[2])  ? ($datos[2]) : '';
        $supervisor = !empty($datos[3])  ? ($datos[3]) : '';
        $ejecutivo = !empty($datos[4])  ? ($datos[4]) : '';
        $documento = !empty($datos[5])  ? ($datos[5]) : '';
        $nombre_asesor = !empty($datos[6])  ? ($datos[6]) : '';
        $telefono = !empty($datos[7])  ? ($datos[7]) : '';
        $horario = !empty($datos[8])  ? ($datos[8]) : '';
        $condicion = !empty($datos[9])  ? ($datos[9]) : '';
        $modalidad = !empty($datos[10])  ? ($datos[10]) : '';
        $tipo_as = !empty($datos[11])  ? ($datos[11]) : '';
        
        
      

        $string = htmlentities($nombre_asesor, ENT_QUOTES,'ISO-8859-1');
    if( !empty($key) ){

        
            $checkemail_duplicidad = ("SELECT key_id FROM reporte WHERE key_id='$key' ");
            
            $ca_dupli = mysqli_query($con, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }   

//No existe Registros Duplicados
        if ( $cant_duplicidad == 0 ) { 
            
            
            
            $insertarData = "INSERT INTO reporte (key_id, fecha, sub_campaña,dni_sup, supervisor, ejecutivo, documento, nombre_asesor, telefono, horario, condicion, modalidad, tipo_as) VALUES  ('$key', '$fecha', '$sub_campaña','$dni_sup', '$supervisor', '$ejecutivo', '$documento', '$string', '$telefono', '$horario', '$condicion', '$modalidad', '$tipo_as')";
            $res = mysqli_query($con, $insertarData); 

            if ($res){?>

                <table class="table table-sm table-dark">
                <tr class="bg-success" >            
                            
                <td class="bg-success">Reporte subido  <?php echo $string ?></td>   
               
               </tr>
           </table>


            <?php
            }else{?>
            <meta charset="iso-8859-1" >
                <table class="table table-sm table-danger">
                    <tr class="bg-warning" >            
                                
                    <td class="bg-warning">Error en subir reporte del usuario  <?php echo $nombre_asesor ?></td>   
                
                    </tr>
                </table>

                
                
                <?php    
            }
            ?>
           
            
            <?php 
 
            } 
/**Caso Contrario actualizo el o los Registros ya existentes*/
else{
    ?>
    <table class="table table-sm table-dark">
    <tr class="bg-success" >
       
       <td class="bg-danger">ya registrado <?php echo $string ?></td>
      
   </tr>
   </table>
    <?php 
    /* $result_update = "Datos ya registrados".$dni;
    echo $result_update; */
    /* $updateData =  ("UPDATE clientes SET 
        nombre='" .$nombre. "',
		correo='" .$correo. "',
        celular='" .$celular. "'  
        WHERE celular='".$celular."'
    ");
    $result_update = mysqli_query($con, $updateData); */
    } 
  }

 $i++;
}

?>

<a class="btn btn-dark" href="up_reporte_gtr.php">Atras</a>
</div>
