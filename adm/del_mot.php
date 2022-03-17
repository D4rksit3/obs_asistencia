<?php
 $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
$delete = $_GET['id'];


    $sql = "DELETE FROM motivo WHERE id_motivo='$delete'";
    mysqli_query($conexion,$sql);
    header("LOCATION: edit_motivo.php");
