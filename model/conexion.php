<?php
include_once '../(entornos)/_dev_.php';
function conexion(){
$conn=new mysqli(host,usuario,passwd,db);
return $conn;
}
?>