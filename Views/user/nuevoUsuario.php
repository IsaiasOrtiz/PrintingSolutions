<?php   
  include "../../Layaut/Layaut.php";
  include "../../Layaut/NavU.php";
  //include "../../models/crearProducto1.php";

  seccion1();
  nav();
  if (isset($_REQUEST['service'])){
    
     $Var=$_REQUEST["service"];
  }else {
    $Var="Ingrese datos";
  }
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron card card-block">
       <form class="was-validated"   enctype="multipart/form-data" action="../../Controllers/crearUsuario.php" method="POST">
  <div class="mb-3">
    <label for="validationTextarea">Nombres:</label>
    <input type="text" name="txtNombre" class="form-control is-invalid" id="validationTextarea" placeholder="ej.Jose Jose" required>
  </div>
   <div class="mb-3">
    <label for="validationTextarea">Apellidos:</label>
    <input type="text" name="txtApellidos" class="form-control is-invalid" id="validationTextarea" placeholder="ej. Martinez..." required>
  </div>
  <div class="mb-3">
    <label for="validationTextarea">Correo:</label>
    <input type="email" name="txtCorreo" class="form-control is-invalid" id="validationTextarea" placeholder="ej. printingSolutions@gmail.com..." required>
  </div>
  <div class="mb-3">
    <label for="validationTextarea">Clave:</label>
    <input type="password" name="txtClave" class="form-control is-invalid" id="validationTextarea" placeholder="**************" required>
  </div>
  <input type="submit" class="btn btn-outline-secondary" value="Agregar">
</form>
      </div>
    </div>
  </div>



<?php 
seccion2();
?>