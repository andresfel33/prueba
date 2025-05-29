<?php

include "conexion.php";
$con=conexion();
$id=$_POST['id'];
$sql="DELETE FROM contactos where idcontacto='$id'";
$result=mysqli_query($con,$sql);
echo $result;
?>