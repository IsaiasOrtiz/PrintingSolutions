<?php 
include "session.php";
$id=$_REQUEST["id"];
require_once "../Models/conection.php";
		$sql="SELECT * FROM usuarios";
		$consulta=$pdo->prepare($sql);
		$consulta->bindParam(":id",$id);
		$consulta->execute();
if ($consulta->rowCount()<2) {
		echo "No puedes quedarte sin usuarios
		<br>
		<a href='../Views/user/listaUsuarios.php'>[Regresar]</a>";
	}else
	{
		$sql1="DELETE FROM usuarios WHERE idusuarios=:id;";
		$consulta1=$pdo->prepare($sql1);
		$consulta1->bindParam(":id",$id);
		$consulta1->execute();
		header("location: ../Views/user/listaUsuarios.php");
	}


?>
<br>
<a href=''></a>