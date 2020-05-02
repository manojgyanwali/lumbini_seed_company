<?php
session_start();
include('../includes/dbcon.php');
$category=$_REQUEST['category'];
if($category=="")
{
    $e_message= "please fill category name";
    $_SESSION['e_message']=$e_message;
    header('location:productPortfolio.php');

}
else
{
    $qry="insert into  category_type (category) value('$category')";
    $result=$conn->exec($qry);
        if($result>0)
        {  
            $message="category added";
            $_SESSION['message']=$message;
           header('location:productPortfolio.php');
        }
}

       
    
  
?>