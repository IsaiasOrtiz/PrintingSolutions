<?php 
	require_once "../models/conection.php";
	include "session.php";
	

	function listar(){
	$nombre=$_POST['txtNombre'];
	$sql="SELECT * FROM servicio";
	$consulta = $pdo->prepare($sql);
	$consulta->execute();
	if($consulta->rowCount()>0)
		{
		while ($us=$consulta->fetch()) {   
	    echo "<table>
				<tr>
					<td>Nombre: </td>
					<td>".$us['nombre']."</td>
					<td>Eliminar</td>
				</tr>
			</table>";
	    }

	}else{
		echo "No se encontraron registros.";
	}
	}
?>
