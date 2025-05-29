<?php

include "conexion.php";
$con=conexion();
$idusuario=$_POST['idusuario'];
;$name=$_POST['nombre'];
$tel=$_POST['tel'];
$correo=$_POST['email'];
$sql="insert into contactos (nombre,telefono,email,idusuario) values('$name','$tel','$correo',$idusuario)";
$result=mysqli_query($con,$sql);
echo $result;
?>