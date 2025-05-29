<?php

include "conexion.php";
$con=conexion();
$id=$_POST['id'];
$name=$_POST['nombre'];
$tel=$_POST['tel'];
$correo=$_POST['email'];
$sql="update contactos set  nombre='$name' , telefono='$tel' ,email='$correo' where idcontacto='$id'";
$result=mysqli_query($con,$sql);
echo $result;
?>