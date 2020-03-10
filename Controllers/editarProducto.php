<?php 
include "session.php";

if (isset($_POST['txtNombre']) && isset($_POST['txtDescripcion']) && isset($_POST['txtPrecio']) &&  isset($_POST['cbxServicio'])) {
    require_once "../Models/conection.php";
    $sql="UPDATE servicios SET nombre=:nombre, descripcion=:descripcion ,precio=:precio, idservicio=:servicio, idusuario=:usuario WHERE idservicios=:id;";

    $consulta=$pdo->prepare($sql);
    $consulta->bindParam(':nombre',$_POST['txtNombre']);
    $consulta->bindParam(':descripcion',$_POST['txtDescripcion']);
    $consulta->bindParam(':precio',$_POST['txtPrecio']);
    $consulta->bindParam(':servicio',$_POST['cbxServicio']);
    $consulta->bindParam(':usuario',$_SESSION['id']);
    $consulta->bindParam(':id',$_POST['txtId']);
    $consulta->execute();
    header("location: ../Views/user/listaProductos.php");
	
} 





function subir_fichero($directorio_destino, $nombre_fichero)
{
    $tmp_name = $_FILES[$nombre_fichero]['tmp_name'];
    //si hemos enviado un directorio que existe realmente y hemos subido el archivo    
    if (is_dir($directorio_destino) && is_uploaded_file($tmp_name))
    {
    	$time = time();
    	$hoy = date("Ymd"); 
        $img_file = $hoy.$time.$_FILES[$nombre_fichero]['name'];
        $img_type = $_FILES[$nombre_fichero]['type'];
        
        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
 strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?
            
            if (move_uploaded_file($tmp_name, $directorio_destino . '/' . $img_file))
            {
            	require_once "../Models/conection.php";
            	$urlImg=$directorio_destino.$img_file;
            	$sql="INSERT INTO servicios VALUES (null,:nombre, :descripcion, :precio, :imagen, :servicio, :usuario);";
            	$consulta=$pdo->prepare($sql);
            	$consulta->bindParam(':nombre',$_POST['txtNombre']);
            	$consulta->bindParam(':descripcion',$_POST['txtDescripcion']);
            	$consulta->bindParam(':precio',$_POST['txtPrecio']);
            	$consulta->bindParam(':imagen',$urlImg);
            	$consulta->bindParam(':servicio',$_POST['cbxServicio']);
            	$consulta->bindParam(':usuario',$_SESSION['id']);
            	$consulta->execute();

            	 
                return true;
            }
        }
    }
    //Si llegamos hasta aquí es que algo ha fallado
    return false;
}
?>

