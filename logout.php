<?php 
session_start();
session_destroy();
setcookie('admin_email',false,time()-7*24*60*60);
header('location:adminlogin.php');
?>