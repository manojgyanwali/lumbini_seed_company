<?php
session_start();
$quantity=$_REQUEST['quantity'];
$_SESSION['quantities']=$quantity;
header('location:productDetailsConfirmOrder.php');
?>