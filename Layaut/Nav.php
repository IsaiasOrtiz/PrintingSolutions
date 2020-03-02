<?php 
function nav()
{
  require_once "../Models/conection.php";
  $sql="SELECT * FROM servicio;";
  $consulta=$pdo->prepare($sql);
  $consulta->execute();
  
	echo " <nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <a class='navbar-brand' href='#'>
   <img src='../Img/logo3.png'/  width='100px'>
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
        ";
        while ($services=$consulta->fetch()) {
    echo "<a class='dropdown-item' href='#'>".$services['nombre']."</a>";
        }
    
          
       echo " </div>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='#'>Contactanos</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='login.php'>Login</a>
      </li>
    </ul>
  </div>
</nav>";
}
?>