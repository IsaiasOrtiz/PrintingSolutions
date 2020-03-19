<?php 
require_once "../Models/conection.php";
session_start();
$usuario=empty($_POST['username']) ? NULL : $_POST['username']; 
$pass=empty($_POST['password']) ? NULL : $_POST['password']; 
if(($usuario) && ($pass))
{
	$user=$_POST['username'];
	$clave=md5($_POST['password']);
	$consulta = $pdo->prepare("SELECT * FROM usuarios where correo=:user and clave=:clave;");
	$consulta->bindParam(':user',$user);
	$consulta->bindParam(':clave',$clave);
	$consulta->execute();
	if($consulta->rowCount()>0)
		{
		while ($us=$consulta->fetch()) {   
	    $_SESSION["correo"]=$us['correo'];
		$_SESSION["nombre"]= $us['nombre'];
		$_SESSION["id"]=$us['idusuarios'];
		header('Location: ../Views/user/home.php');
	    }

	}else{
		echo "invalido";
	}
	 
}else{
	
	header('Location: ../Views/login.php');
}

?>

