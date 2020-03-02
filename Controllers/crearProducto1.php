<?php 

require_once "../Models/conection.php";
$sql="SELECT * FROM servicio";
$consulta=$pdo->prepare($sql);

$consulta->execute();
echo "
		<option value='seleccione'>Seleccione...</option>
	";
while ($sv=$consulta->fetch()) {
	echo "
		<option value='".$sv['id']."'>".$sv['nombre']."</option>
	";
}

?>
