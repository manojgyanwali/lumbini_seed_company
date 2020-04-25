<?php
include('../includes/dbcon.php');
$product_id=$_REQUEST['product_id'];
$qry="delete from product_portfolio where id='$product_id'";
$result=$conn->query($qry);
header('location:dashboard.php');


?>