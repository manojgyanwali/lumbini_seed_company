<?php 
session_start();
include('../includes/dbcon.php');
if(isset($_REQUEST['add']))
        {
             $product_name=$_REQUEST['product_name'];
            $category_name=$_REQUEST['category'];
            $product_description=$_REQUEST['product_description'];
            
            $tempname=$_FILES['file']['tmp_name'];
            $imagename=$_FILES['file']['name'];
            if($imagename==""||$product_name=="")
                {
                $message= "fill all the fields";
                }
             else
                {
                move_uploaded_file($tempname,"../product_portfolio_image/".$imagename);
                $qry="insert into product_portfolio (product_name,product_image,category_name,product_description)
                value('$product_name','$imagename','$category_name','$product_description')";
                $result= $conn->query($qry);
                }
        }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/dashbaordNav.css">
</head>
<body>
    <div class="dashboardNav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 leftDiv">
                    <div class="lscContent">
                        <img src="/images/Logo.png" style="float: left; margin-right: 12px;" alt="logo">
                        <h5 style="font-weight: bold;"> Lumbini Seed Company</h5>
                    </div>
                    <div class="nav navContent">
                        <ul>
                            <li><a href="home.php" class="active"><i class="fa fa-home">Home</i></a></li>
                            <li><a href="#"><i class="fa fa-building">Company's profile</i></a></li>
                            <li><a href=""><i class="fa fa-seedling">Product Portfolio</i></a></li>
                            <li><a href="#"><i class="fa fa-network-wired">Distrubution Network</i></a></li>
                            <li><a href="#"><i class="fa fa-newspaper">News & Event</i></a></li>
                            <li><a href="#"><i class="fa fa-accessible-icon">Career Opportunity</i></a></li>
                            <li><a href="#"><i class="fa fa-address-book"></i>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 topDiv">
                    <div class="topSection">
                            <form action="product_search.php" method="POST">
                                <div class="input-group mb-3" id="searchSection">
                                    <input type="text" name="search_box" class="form-control col-md-6 offset-md-3" placeholder="What are you looking for?">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="input-group-text btn-info" name="search" id="search"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                    </div>

     <!-- Tabs  -->
     <div class="productPorfolioSection" style="margin-top: 50px;">
         <h2>PRODUCT PORTFOLIO</h2>
     </div>

        <div class="myTabs">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#addCategory" role="tab" aria-controls="nav-home" aria-selected="true">Add Category</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#addProduct" role="tab" aria-controls="nav-profile" aria-selected="false">Add Product</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#viewProduct" role="tab" aria-controls="nav-contact" aria-selected="false">View Product</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#viewOrders" role="tab" aria-controls="nav-contact" aria-selected="false">View Orders</a>

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">

                <!-- add category  -->
                <div class="tab-pane fade show active" id="addCategory" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container">
                            <h2 style="margin-top:40px;">Add Category</h2>
                            <p>NOTE : First You need to create a category for any upcoming product</p>

                        <div class="categories">
                        <form action="addcategory.php" method="POST">
                            <label for="input">Add Category</label>
                            <input type="text" name="category" class="form-control col-md-6" placeholder="Enter Category here" >
                            <button name="add" class="btn btn-info addBTN">Add</button>
                            <?php 
                            if(isset($_SESSION['e_message']))
                            {
                                echo $_SESSION['e_message'];
                                unset($_SESSION['e_message']);
                            }

                            if(isset($_SESSION['message']))
                            {
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                            }
                            
                            ?>
                        </form>

                        </div>
                    </div>                    
                </div>

                <!-- add product  -->
                <div class="tab-pane fade" id="addProduct" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container">
                        <h2 style="margin-top:40px;">Add Category</h2>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="categories">
                                <label for="input">Add Category</label>
                                <input type="text" name="product_name" class="form-control col-md-6" placeholder="Enter Product Name">
                            </div>
                            <div class="elements">
                                <label>Add Product Image (250*250)</label><br>
                                <input type="file" name="file" value="please choose file"></br>
                            </div>
                            
                            <div class="elements">
                                <label>Select Category</label><br>
                            
                                <select name="category" class="selectpicker">
                                    <?php 
                                    $qry="select *from category_type";
                                    $result=$conn->query($qry);
                                    while($data=$result->FETCH(PDO::FETCH_ASSOC)) 
                                    {
                                    ?>
                                    <option><?php echo $data['category']; ?></option>
                                
                                    <?php
                                     }
                                    ?>
                                    
                                </select>
                            </div>

                                <div class="elements">
                                    <label for="">Product Description</label>
                                    <textarea name="product_description" class="form-control" name="" id="" cols="20" rows="10"></textarea>
                                </div>
                                     
                                <input type="submit" name="add" value="insert">

                                
                        </form>
                    </div>
                </div>

                <!-- view product  -->

                <div class="tab-pane fade" id="viewProduct" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="container">
                        <h2 style="margin-top:40px;">View Products</h2>

                        <table class="trHeadProduct">
                            <tr class="trHead">
                                <td>Product</td>
                                <td>Name</td>
                                <td>Category</td>
                                <td>Edit | Delete</td>
                            </tr>
                        </table>
                        <table class="viewProductTable">
                            <tr class="trProducts">
                                <td>Image</td>
                                <td>Name</td>
                                <td>Category</td>
                                <td>edit or delete</td>
                            </tr>
                        </table>

                    
                    </div>    
                </div>

                <!-- view orders  -->
                <div class="tab-pane fade" id="viewOrders" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="container">
                        <h2 style="margin-top:40px;">Add Category</h2>
                        <p>NOTE : First You need to create a category for any upcoming product</p>
                    <div class="categories">
                        <label for="input">Add Category</label>
                        <input type="text" class="form-control col-md-6" placeholder="Enter Category here" >
                        <button class="btn btn-info addBTN">Add</button>
                    </div>
                </div>  
                 </div>

              </div>
        </div>
                    
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>