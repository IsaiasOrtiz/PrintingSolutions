<?php 
include "session.php";
$id=$_REQUEST["id"];
echo $id;
require_once "../Models/conection.php";
$sql="DELETE FROM servicio WHERE idservicio=:id;";
$consulta=$pdo->prepare($sql);
$consulta->bindParam(":id",$id);
$consulta->execute();
?>