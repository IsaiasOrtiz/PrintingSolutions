<?php 
 session_start();
 //$vr=empty() ? NULL : $_SESSION["correo"]; 
 
if ($_SESSION["correo"]) {
   
}else{
   header("Location: /PrintingSolutions/views");
}

?>