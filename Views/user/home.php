<?php   
  include "../../Layaut/Layaut.php";
  include "../../Layaut/NavU.php";
  seccion1();
  nav();
?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">PrintingSolutions</h1>
    <p class="lead font-weight-normal">Bienvenido:<?php 
      echo (" ".$_SESSION['nombre']);
     ?> En esta pagina podras hacer las modificaciones para tu pagina web.</p>
    
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>



<?php 
seccion2();
?>