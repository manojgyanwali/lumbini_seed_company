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
                            <td width="20%">12 KG</td>
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
                            <td width="20%">12 KG</td>
                        </tr>
                    </table>

                </div>

                <!-- right section  -->
                <div class="col-md-4">
                    <div class="confirmCard">
                        <h4><B>ORDER CONFIRMATION</B></h4>

                        <form action="" class="form-group confirmForm">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter the name for order">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" placeholder="Enter the address for order">
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" class="form-control" placeholder="Enter the phone number for order">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
                            <button class="btn btnConfirm"> Confirm Order</button>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>