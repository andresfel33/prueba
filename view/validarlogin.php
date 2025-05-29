<?php
session_start();
if(!isset($_SESSION['users_id'])){
session_unset();
session_destroy();
header("Location: ../login.php");
exit();
}
?>