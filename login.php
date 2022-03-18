<head>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style_login/style_login.css">
</head>



<body >
    
<form action="validar.php" method="POST">
    
<div class="container">
  

  <div class="mb-3">
  
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
  </div>

  <div class="mb-3">
    <label for="validationCustom04" class="form-label">Rol</label>
    <select class="form-select" id="validationCustom04" required name="id_rol">
      <option selected disabled value="">Selecciona el rol</option>

    <?php   
     $conexion = mysqli_connect("localhost","root","root","obs_asitencia");
    $query = "SELECT * FROM roles";
    $result = mysqli_query($conexion,$query);

    while ($fila = mysqli_fetch_array($result)) {
      $row = $fila['rol']; 
      ?>

      <option value="<?php echo $fila['id_rol']  ?>" name="option"><?php echo $fila['rol']  ?></option>

      <!-- <option value="1">ADMINISTRADOR</option>
      <option value="2">GTR</option>
      <option value="3">SUPERVISOR</option> -->
    <?php 
    } 
    ?>

    </select>
    <div class="invalid-feedback">
      Por favor selecciona el rol.
    </div>
</div>
  <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
  </div>


</form>

</body>