<?php 
include('../includes/dbcon.php');
$product_name=$_REQUEST['product_name'];
$image=$_FILES['image']['name'];
$category_name=$_REQUEST['category'];
$product_description=$_REQUEST['ckeditor'];
$product_specification=$_REQUEST['product_specification'];
$price_product=$_REQUEST['price_of_product'];
$tempname=$_FILES['image']['tmp_name'];

move_uploaded_file($tempname,"../product_portfolio_image/".$image);

$qry="update product_portfolio set product_name='$product_name',product_image='$image',category_name='$category_name',
product_description='$product_description',product_specification='$product_specification',
price_of_product=$price_product where id={$_REQUEST['id']};";
$result=$conn->query($qry);


?>