<?php

// db settings
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'obs_asitencia';

// db connection
$con = mysqli_connect($hostname, $username, $password, $database) or die("Error " . mysqli_error($con));
$hora = date('d-m-Y h:i:s a', time());
$fecha = date('d-m-Y');
// fetch records
$sql = "SELECT * FROM reporte WHERE fecha='$fecha' AND validar='0'";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

$dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array
);

echo json_encode($dataset);
?>