
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
            require_once "../../models/conection.php";
            $sql="select t.*, t2.nombre 'nombre2'  , u.nombre 'usuario' from servicios t inner join servicio t2 on t.idservicio=t2.idservicio inner join usuarios u on u.idusuarios=t.idusuario";
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
                    <td><table>
                    <tr>
                    <td>
                    <IMG SRC='".$us['imagen']."' ALT='img' width='125px' height='auto'>
                    </td>
                    <td>
                    <B>ID:</B>".$us['idservicios']."
                    </br>
                    <B>Nombre:</B>".$us['nombre']."
                    </br>
                    <B>Descripcion:</B>".$us['descripcion']."
                    </br>
                    <B>Precio:</B>".$us['precio']."
                    </br>
                    <B>Servicio:</B>".$us['nombre2']."
                    </br>
                     <B>Agregado por:</B>".$us['usuario']."
                    </br>
                    	<a href='editarServicio.php?id=".$us['idservicios']."' class='btn btn-primary'>Editar</a>
                    
                    	<a href='../../Controllers/EliminarServicio.php?id=".$us['idservicios']."' class='btn btn-danger'>Eliminar</a>
                    </td>
                    </tr>
                    </table></td>
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

