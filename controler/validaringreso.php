<?php
include_once '../model/validarususario.php';
session_start();

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$result=validarusuario($usuario,$pass);
$row = mysqli_fetch_assoc($result);
  
if (isset($row['idusuario'])) {
   $_SESSION['usuario'] = $usuario;
    $_SESSION['users_id'] = $row['idusuario'];
     echo 'success';
}else{
     echo 'error';
}
?>