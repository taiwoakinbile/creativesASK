<?php 
session_start();

session_destroy();
header("Location: http://localhost/creativesASK/signin.php");
exit;
?>