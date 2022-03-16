<?php
 $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
$delete = $_GET['id'];


    $sql = "DELETE FROM usuario WHERE id='$delete'";
    mysqli_query($conexion,$sql);
    header("LOCATION: edit_user.php");
