
<?php   
  include "../../Layaut/Layaut.php";
  include "../../Layaut/NavU.php";
  seccion1();
  nav();

?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron card card-block">
       <form class="was-validated">
  <div class="mb-3">
    <label for="validationTextarea">Textarea</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
    <div class="invalid-feedback">
      Ingrese datos.
    </div>
  </div>


  <div class="form-group">
    <select class="custom-select" required>
      <option value="">Seleccionar categoria</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="invalid-feedback">Debe seleccionar una categoria</div>
  </div>

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Debe subir una imagen</div>
  </div>
</form>
      </div>
    </div>
  </div>



<?php 
seccion2();
?>
