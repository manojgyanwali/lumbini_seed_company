<?php 
session_start();
include('includes/dbcon.php');

$quantity= $_SESSION['quantities'];
$product_id=$_SESSION['products'];





$qry="select *from product_portfolio where id='$product_id' ";
 $result=$conn->query($qry);
 if($result->rowCount()>0)
{
 $data=$result->fetch(PDO::FETCH_ASSOC);
}


                         
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Order</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/productDetailsConfirmOrder.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <!-- header is here  -->
    <?php include('header.html') ?>
    <!-- product portfolio navigation  -->
<section class="productPortfolio">
        <div class="container">
            <h2> Product Portfolio </h2>
            <div class="row">
                <div class="col-md-8">
                    <nav>
                        <a href="#"><span class="v1"><p class="pV1 nav-active" >Popular</p></span></a>
                        <a href="#"><span class="v1"><p class="pV1">Category one</p></span></a>
                        <a href="#"><span class="v1"><p class="pV1">Category two</p></span></a>
                        <a href="#"><span class="v1"><p class="pV1">Category three</p></span></a>
                        <a href="#"><span class="v1"><p class="pV1">Category four</p></span></a>
                    </nav>
                   
                    
                </div>
    
                <div class="col-md-4">
                <form action="product_search.php" method="POST">
                        <div class="input-group mb-3" id="searchSection">
                            <input type="text" name="search_box" class="form-control" placeholder="What are you looking for?">
                            <div class="input-group-prepend">
                                <button type="submit" class="input-group-text" name="search" id="search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
    
                </div>
            </div>
          </div>
    </section> 

    <div class="productConfirmOrders">
        <div class="container">
            <div class="row">

                <!-- left section  -->
                <div class="col-md-8">
                    
                    <table style="width:100%; margin-top:20px;">
                        <tr class="tableHead">
                            <th width="60%"><i>Item</i></th>
                            <th width="20%"><i>Price</i></th>
                            <th width="20%"><i>Quantity</i></th>
                        </tr>
                    </table>

                    <table style="width:100%; margin-top:20px;">
                        <tr class="tableItems">
                            <td class="firstTD" width="60%"> 
                                <img src="images/myimage.jpg" alt="" style="width:20%; float:left; margin-right:20px;">
                                <h5>Name of Product</h5>
                                <p><i>Category of product</i></p>
                            </td>
                            <td width="20%">Rs 250 per KG</td>
                            <td width="20%">45 kg</td>
                        </tr>
                    </table>

                    <table style="width:100%; margin-top:20px;">
                        <tr class="tableItems">
                            <td class="firstTD" width="60%"> 
                                <img src="product_portfolio_image/<?php echo $data['product_image']; ?>" alt="" style="width:20%; float:left; margin-right:20px;">
                                <h5><?php echo $data['product_name'];?></h5>
                                <p><i><?php echo $data['category_name'];?></i></p>
                            </td>
                            <td width="20%">Rs 250 per KG</td>
                            <td width="20%"><?php echo $quantity ?> KG</td>
                        </tr>
                    </table>

                </div>

                <!-- right section  -->
                <div class="col-md-4">
                    <div class="confirmCard">
                        <h4><B>ORDER CONFIRMATION</B></h4>

                        <form action="order_confirmation.php" method="POST" class="form-group confirmForm">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter the name for order">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Enter the address for order">
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter the phone number for order">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <button type="submit" name="submit" class="btn btnConfirm"> Confirm Order</button>
                            <?php if(isset($_SESSION['message']))
                            { echo $_SESSION['message'];
                             unset($_SESSION['message']);

                            }?>
                        </form>
                        
                            
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>