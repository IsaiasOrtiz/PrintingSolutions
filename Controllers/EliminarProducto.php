<?php 
include "session.php";
$id=$_REQUEST["id"];
echo $id;
require_once "../Models/conection.php";
$sql2="SELECT * FROM servicios WHERE idservicios = :id";
$consulta1=$pdo->prepare($sql2);
$consulta1->bindParam(':id',$id);
$consulta1->execute();
while ($img=$consulta1->fetch()) {
	unlink($img['imagen']);
}

$sql="DELETE FROM servicios WHERE idservicios=:id;";
$consulta=$pdo->prepare($sql);
$consulta->bindParam(':id',$id);
$consulta->execute();
header("location: ../Views/user/listaProductos.php");
?>