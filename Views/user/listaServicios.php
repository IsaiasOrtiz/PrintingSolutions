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
            $sql="SELECT * FROM servicio";
            $consulta = $pdo->prepare($sql);
            $consulta->execute();

            if($consulta->rowCount()>0)
              {
                echo "<table class='table'>
                   <tr>
                    <td colspan='4'> <center><h3>Lista de servicios.</h3></center></td>
                  </tr>
                ";
              while ($us=$consulta->fetch()) {   
                echo "
                  <tr>
                    <td><b>Nombre:</b></td>
                    <td>".$us['nombre']."</td>
                    <td><a href='editarServicio.php?id=".$us['idservicio']."' class='btn btn-primary'>Editar</a></td>
                     <td><a href='../../Controllers/EliminarServicio.php?id=".$us['idservicio']."' class='btn btn-danger'>Eliminar</a></td>
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