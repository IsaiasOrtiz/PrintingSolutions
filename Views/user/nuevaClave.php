<?php   
  include "../../Layaut/Layaut.php";
  include "../../Layaut/NavU.php";
  //include "../../models/crearProducto1.php";

  seccion1();
  nav();
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron card card-block">
       <form class="was-validated"   enctype="multipart/form-data" action="../../Controllers/cambiarClave.php" method="POST">
  <div class="mb-3">
    <label for="validationTextarea">Clave anterior:</label>
    <input type="password" name="txtClave" class="form-control is-invalid" id="validationTextarea" placeholder="**************" required>
  </div>
  <div class="mb-3">
    <label for="validationTextarea">Clave Nueva:</label>
    <input type="password" name="txtClave2" class="form-control is-invalid" id="validationTextarea" placeholder="**************" required>
  </div>
  <input type="submit" class="btn btn-outline-secondary" value="Cambiar">
</form>
      </div>
    </div>
  </div>

