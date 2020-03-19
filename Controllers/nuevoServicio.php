<?php
	//session_start();
	require_once "../Models/conection.php";
	include "session.php";
	$nombre=$_POST['txtNombre'];
	$sql="INSERT INTO `printingsolutions`.`servicio` (`idservicio`, `nombre`) VALUES ('', :nombre);";
	$consulta = $pdo->prepare($sql);
	$consulta->bindParam(':nombre',$nombre);
	$consulta->execute();
	echo "<script type='text/javascript'>
    confirm('El servicio de inserto correctamente.');

</script>";
header("Location: ../Views/user/servicios.php?service=El servicio: <b>".$nombre." </b>Insertado correctamente.");
?>
