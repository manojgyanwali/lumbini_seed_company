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
                   <img src="images/myimage.jpg" alt="" style="width:70%"> 
                </div>

                <div class="col-md-6">
                    <div class="productTitle">
                        <h2 ><b>Name of Product</b></h2>
                        <h6 style="float:right;">Status :  <i class="availableText">Available</i></h6>
                    </div>
                    
                    <p><i class="categoryName">Category Name</i></p>
                    <div class="priceAndOrder">
                        <h1 class="priceText"><b >Rs. 250 per kg<b></h1>
                        <h3 style="float:left; margin-right:20px;">Quantity</h3>
                        <input type="text" class="col-md-2 form-control" >
                    </div>

                    <div class="OrderButton">
                        <a href="productDetailsConfirmOrder.php"><button class="btn btnOrder">Order Now</button></a>
                        <a href="productDetailsConfirmOrder.php"><button class="btn btnCart">Add to Cart</button></a>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="container" style="margin-top:40px;">
            <!-- product specification and details  -->

            <div class="row">
                <div class="col-md-6">
                    <h3>Product Description</h3>
                    <p class="productDecription">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                    </p>
                </div>

                <div class="col-md-6">
                    <h3>Product specification</h3>
                    <h6>PRODUCT CODE : PT202</h6>
                        <ul class="productSpecsList">
                            <li>Lorem ipsum is simple a dummy text that is used for</li>
                            <li>Lorem ipsum is simple a dummy text that is used for dummy text that is used for</li>
                            <li>Lorem ipsum is simple a dummy text that is used for</li>
                            <li>Lorem ipsum is simple a dummy text that is used for</li>
                        </ul>

                </div>

            </div>
        </div>
    </section>



<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>