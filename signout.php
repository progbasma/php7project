<?php
session_start();
session_unset();
session_destroy();
setcookie("Ecommerceshop",'', time()-3600*24*30); 
header('location:signin.php');
?>