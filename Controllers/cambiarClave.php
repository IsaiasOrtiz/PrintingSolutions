<?php
	//session_start();
	require_once "../Models/conection.php";
	include "session.php";
	$clave=md5($_POST['txtClave']);
	$clave2=md5($_POST['txtClave2']);
    $sql1="SELECT * FROM usuarios WHERE correo=:correo and clave=:clave;";
	$consulta1 = $pdo->prepare($sql1);
	$consulta1->bindParam(':correo',$_SESSION['correo']);
	$consulta1->bindParam(':clave',$clave);
	$consulta1->execute();	
	if ($consulta1->rowCount()>0) 
	{
	$sql="UPDATE usuarios SET clave=:clave2 WHERE correo=:correo;";
	$consulta = $pdo->prepare($sql);
	$consulta->bindParam(':clave2',$clave2);
	$consulta->bindParam(':correo',$_SESSION['correo']);
	$consulta->execute();	
	echo "<script>if(confirm('Clave cambiada exitosamente.')){
	document.location='../Views/user/home.php';}
	else{ alert('Operacion Cancelada');
	}</script>"; 
	//header("Location: ../Views/user/home.php");
	}
	else{
		echo "<script>if(confirm('Clave anterior es incorrecta!')){
	document.location='../Views/user/nuevaClave.php';}
	else{ alert('Operacion Cancelada');
	}</script>"; 
	}


	
	
?>