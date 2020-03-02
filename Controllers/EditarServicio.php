<?php
	//session_start();
	require_once "../Models/conection.php";
	include "session.php";
	$nombre=$_POST['txtNombre'];
	$id=$_POST['txtId'];
	$sql="UPDATE `servicio` SET `nombre`=:nombre WHERE `idservicio`=:id;";
	$consulta = $pdo->prepare($sql);
	$consulta->bindParam(':nombre',$nombre);
	$consulta->bindParam(':id',$id);
	$consulta->execute();	
	echo "<script type='text/javascript'>
    confirm('El servicio de inserto correctamente.');

</script>";
header("Location: ../Views/user/listaServicios.php");
?>
