<?php
session_start();
    include('../includes/dbcon.php');
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $qry="select *from admin_login where username='$username' and password='$password'";
    $result=$conn->query($qry);
    if($result->rowCount()>0)
    {
        $data=$result->fetch(PDO::FETCH_ASSOC);
        $username=$data['username'];
        $_SESSION['username']=$username;
        header('location:home.php');
    }
    else
    {
        header('location:index.php');
    }


?>