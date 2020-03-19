<?php
	//session_start();
	require_once "../Models/conection.php";
	include "session.php";
	$nombre=$_POST['txtNombre'];
	$apellidos=$_POST['txtApellidos'];
	$correo=$_POST['txtCorreo'];
	$clave=md5($_POST['txtClave']);
   
	$sql="SELECT * FROM usuarios WHERE correo= :correo;";
	$consulta = $pdo->prepare($sql);
	$consulta->bindParam(':correo',$correo);
	$consulta->execute();
	if ($consulta->rowCount()>0) {
		echo "Existe";
	}else
	{
		$sql="INSERT INTO `usuarios`  VALUES ('', :nombre , :apellidos , :correo , :clave);";
	$consulta = $pdo->prepare($sql);
	$consulta->bindParam(':nombre',$nombre);
	$consulta->bindParam(':apellidos',$apellidos);
	$consulta->bindParam(':correo',$correo);
	$consulta->bindParam(':clave',$clave);
	$consulta->execute();
header("Location: ../Views/user/listaUsuarios.php");
		
	}


	
?>
