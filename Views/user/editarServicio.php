<?php   
  include "../../Layaut/Layaut.php";
  include "../../Layaut/NavU.php";
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
       <form class="was-validated" action="../../Controllers/EditarServicio.php" method="POST">
  <div class="mb-3">
    <label for="validationTextarea">ID:</label>
    <?php
    echo "<input type='text' name='txtId' class='form-control is-invalid' id='validationTextarea' placeholder='ej. Serigrafia' required readonly='readonly' value='".$_REQUEST['id']."'>"; 
    ?>
    
    <label for="validationTextarea">Nombre del servicio:</label>
    <input type="text" name="txtNombre" class="form-control is-invalid" id="validationTextarea" placeholder="ej. Serigrafia" required>
    <div class="invalid-feedback">
      <?php 
      
      echo $Var;
      ?>
      
    </div>
  </div>
  <input type="submit" class="btn btn-outline-secondary" value="Editar">
</form>
      </div>
    </div>
  </div>



<?php 
seccion2();
?>