<?php session_start();
?>
<?php 
session_destroy();
$_SESSION['active'] = false;
require("index.php"); 
exit();
?>