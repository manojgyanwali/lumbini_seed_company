<?php

$servername="mysql:host=localhost; dbname=lumbini_seed_company";
$user="root";
$password="";


try
{
    $conn= new PDO($servername,$user,$password);
   
}

catch(PDOException $e)
{
    echo "connection failed".$e->getMessage();
}




?>