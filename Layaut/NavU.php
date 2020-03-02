<?php 
 session_start();
 
if (!$_SESSION["correo"]) {
   header("Location: /PrintingSolutions/views");
}else{
   
}
function nav()
{
 
	echo " <nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <a class='navbar-brand' href='#'>
   <img src='/PrintingSolutions/Img/logo3.png'/  width='100px'>
  </a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class='collapse navbar-collapse' id='navbarNavDropdown'>
    <ul class='navbar-nav'>
      <li class='nav-item active'>
        <a class='nav-link' href='home.php'>Inicio<span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          Servicios
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
          <a class='dropdown-item' href='listaServicios.php'>Lista de servicios</a>
          <a class='dropdown-item' href='servicios.php'>Crear</a>
        </div>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          Productos o servicios
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
          <a class='dropdown-item' href='listaProductos.php'>Lista de productos o servicios</a>
          <a class='dropdown-item' href='crearProducto.php'>Crear producto o servicio</a>
        </div>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='salir.php'>Salir</a>
      </li>
    </ul>
  </div>
</nav>";

}
?>