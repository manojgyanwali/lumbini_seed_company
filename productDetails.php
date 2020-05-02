<?php 
session_start();
include('includes/dbcon.php');
$product_id= $_REQUEST['product_id'];
$_SESSION['products']=$product_id;
 

$qry="select  *from product_portfolio where id=$product_id";
$result=$conn->query($qry);
$data=$result->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porduct Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/productDetails.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

<!-- header starts here  -->
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
                    <div class="input-group mb-3" id="searchSection">
                        <input type="text" class="form-control" placeholder="What are you looking for?">
                        <div class="input-group-prepend">
                           <button class="input-group-text" id="search"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
    
                </div>
            </div>
          </div>
    </section>    

    <!-- prodcut details with image and order  -->

    <section class="productdetailspage">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <img  src="product_portfolio_image/<?php echo $data['product_image']; ?>"  alt="" style="width:70%"> 
                </div>

                <div class="col-md-6">
                    <div class="productTitle">
                        <h2 ><b><?php echo $data['product_name'];?></b></h2>
                        <h6 style="float:right;">Status:<i class="availableText">Available</i></h6>
                    </div>
                <form action="quantity.php" method="POST">
                    <p><i class="categoryName"><?php echo $data['category_name']; ?></i></p>
                    <div class="priceAndOrder">
                        <h1 class="priceText"><b >Rs. <?php echo $data['price_of_product']; ?> per kg<b></h1>
                        <h3 style="float:left; margin-right:20px;">Quantity</h3>
                        
                        <input type="text" name="quantity" class="col-md-2 form-control" >
                       

                        
                    </div>
                    
                    <div class="OrderButton">
                        <button type="submit" class="btn btnOrder">Order Now</button>
                        <button type="submit"class="btn btnCart">Add to Cart</button>
                    </div>
                   
                <form> 
               
                </div>

            </div>
        </div>
        
        <div class="container" style="margin-top:40px;">
            <!-- product specification and details  -->

            <div class="row">
                <div class="col-md-6">
                    <h3>Product Description</h3>
                    <p class="productDecription">
                    <?php echo $data['product_description'];?>

                    </p>
                </div>

                <div class="col-md-6">
                    <h3>Product specification</h3>
                    <h6>PRODUCT CODE : PT202</h6>
                        <ul class="productSpecsList">
                            <li><?php echo $data['product_specification1']; ?></li>
                            <li><?php echo $data['product_specification2']; ?></li>
                            <li><?php echo $data['product_specification3']; ?></li>
                            <li><?php echo $data['product_specification4']; ?></li>
                        </ul>

                </div>

            </div>
        </div>
    </section>



<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>