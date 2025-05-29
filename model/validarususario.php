<?php
include "conexion.php";
function validarusuario($usuario,$pass){
$con=conexion();
$sql="select idusuario from usuario where usuario='".$usuario."' and pass='".$pass."'";
$result = mysqli_query($con, $sql);
return $result;
}

?>