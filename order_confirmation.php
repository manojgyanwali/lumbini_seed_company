<?php 
session_start();
include('includes/dbcon.php');
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone'];

$email=$_REQUEST['email'];






    $qry="insert into customer_data(name,address,phone_no,email_address)
    value('$name','$address',$phone,'$email')";
    $result=$conn->exec($qry);
    if($result>0)
    {
        $message= "order has been confirmed";
        $_SESSION['message']=$message;
       header('location:productDetailsConfirmOrder.php');

    }
    

    else
    {
        echo "DATA IS NOT INSERTED";
       
    }
       
    

    
        
    
    

?>