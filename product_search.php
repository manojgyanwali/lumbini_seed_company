<?php 
include('includes/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic card test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

    <!-- header section is here  -->

    <?php include('header.html') ?>
    
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

    <!-- card section begins here  -->

    <section class="SectionCard">
        <div class="container">
            <div class="row" id="cardRow">
                <?php
                
                    if(isset($_REQUEST['search']))
                    {
                        $productname=$_REQUEST['search_box'];
                        $qry="select *from product_portfolio where product_name like '%$productname%'";
                        $result=$conn->query($qry);
                        if($result->rowCount()>0)
                        {
                            while($data=$result->FETCH(PDO::FETCH_ASSOC))
                            {
        
                                 ?>   
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card">
                                        <a href="productDetails.php ? product_id=<?php echo $data['id'];?>"> <img src="product_portfolio_image/<?php echo $data['product_image']; ?>" alt="" class="card-img img-responsive"></a>
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: center; margin-top: 20px;"><?php echo $data['product_name'];?></h5>
                                            <p class="card-text" style="text-align: center; color: #2D5F2E;"><i><?php echo $data['category_name']; ?></i></p>
                                         </div>
                                    </div>
                            </div>
                        <?php
                            }
                        }
                       else
                       {
                           echo "nothing found";
                       }
                       
                    }
                   ?>
                    

                   

                

                

            </div>
        </div>
    </section>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>