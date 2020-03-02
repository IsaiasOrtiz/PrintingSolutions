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
       <form class="was-validated" action="../../Controllers/nuevoProducto.php" method="POST">
  <div class="mb-3">
    <label for="validationTextarea">Nombre del producto:</label>
    <input type="text" name="txtNombre" class="form-control is-invalid" id="validationTextarea" placeholder="ej. Sublimacion de camisetas." required>
  </div>
   <div class="mb-3">
    <label for="validationTextarea">Descripcion:</label>
    <input type="text" name="txtNombre" class="form-control is-invalid" id="validationTextarea" placeholder="ej. El sublimado se hara con..." required>
  </div>
  <div class="mb-3">
    <label for="validationTextarea">Precio:</label>
    <input type="number" min="0.01" step="0.01" max="100000" name="txtPrecio" class="form-control is-invalid" id="validationTextarea" placeholder="5.50" required>
  </div>
  <div class="mb-3">
    <label for="validationTextarea">Imagen:</label>
    <input type="file"  name="txtImagen"  accept="image/*" id="validationTextarea" required>
  </div>
  <div class="mb-3">
    <select name="cars" class="form-control is-invalid" id="validationTextarea" placeholder="Seleccione" required>

   <?php 

require_once "../../Models/conection.php";
$sql="SELECT * FROM servicio";
$consulta=$pdo->prepare($sql);
$consulta->execute();
while ($sv=$consulta->fetch()) {
	echo "
		<option value='".$sv['idservicio']."'>".$sv['nombre']."</option>
	";
}

?>
  </select>
  </div>


  <input type="submit" class="btn btn-outline-secondary" value="Agregar">
</form>
      </div>
    </div>
  </div>



<?php 
seccion2();
?>