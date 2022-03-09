<? 
session_start();
$varsesion = $_SESSION['usuario'];
$conexion= mysqli_connect("localhost","root","root","obs_asitencia");
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
$id =  $_GET['id'];
$hora = date('d-m-Y h:i:s a', time());
$fecha = date('d-m-Y');



?>
<?php include "../vistas/header_sup.php";?>

<div class="container">

<h1> Agregar Motivo </h1>

<?  

$data = "SELECT * FROM reporte WHERE id='$id";
$result = mysqli_query($conexion,$data);

while ($fila = mysqli_fetch_array($result)){

echo $fila['id'];

} 
?>



<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre Asesor</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">DNI Asesor</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Telefono</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">+51</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="exampleFormControlTextarea1" class="form-label">Observacion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Motivo</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Selecciona el Motivo</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <!-- <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Obs</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div> -->

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar Motivo</button>
  </div>
</form>




</div>

<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>
