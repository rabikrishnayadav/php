<?php
session_start();
session_destroy();
header('location:login.php');
setcookie('emailcookie','',time()-86400);
setcookie('passwordcookie','',time()-86400);
?>