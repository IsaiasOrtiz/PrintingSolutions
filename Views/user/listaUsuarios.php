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

          
          <?php 
            require_once "../../Models/conection.php";
            $sql="SELECT * FROM usuarios;";
            $consulta = $pdo->prepare($sql);
            $consulta->execute();

            if($consulta->rowCount()>0)
              {
                echo "<table class='table'>
                   <tr>
                    <td colspan='4'> <center><h3>Lista de Usuarios.</h3></center></td>
                  </tr>
                ";
              while ($us=$consulta->fetch()) {   
                echo "
                  <tr >
                    <td class='p-3 mb-2 bg-info text-white' colspan='2'>Usuario.</td>
                  </tr>
                  <tr>
                    <td><b>Nombre:</td><td>".$us['nombre']."</td>
                  </tr>
                  <tr>
                    <td><b>Apellidos:</td><td>".$us['apellidos']."</td>
                  </tr>
                  <tr>
                    <td><b>Correo:</td><td>".$us['correo']."</td>
                  </tr>
                  <tr>
                    <td><b>clave:</td><td>***********</td>
                  </tr>
                  <tr>
                  <td><a href='../../Controllers/eliminarUsuario.php?id=".$us['idusuarios']."' class='btn btn-danger'>Eliminar</a></td>
                  <td></td>
                     
                  </tr>



                ";
                }
                echo "</table>";

            }else{
              echo "No se encontraron registros.";
            }

           ?>
      </div>
    </div>
  </div>



<?php 
seccion2();
?>

