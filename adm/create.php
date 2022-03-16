<?php include "../vistas/header_adm.php";?>
<?php

$name = $_POST['name'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$rol = $_POST['rol'];

echo $user.$name.$pass;