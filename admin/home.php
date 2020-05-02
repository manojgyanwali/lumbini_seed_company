<?php session_start(); 
if(isset($_SESSION['username']))
{
    echo "";
}
else
{
    header('location:admin_login.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
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
                            <li><a href="" class="active"><i class="fa fa-home">   Home</i></a></li>
                            <li><a href="#"><i class="fa fa-building">    Company's profile</i></a></li>
                            <li><a href="productPortfolio.php"><i class="fa fa-seedling">  Product Portfolio</i></a></li>
                            <li><a href="#"><i class="fa fa-network-wired">   Distrubution Network</i></a></li>
                            <li><a href="#"><i class="fa fa-newspaper">  News & Event</i></a></li>
                            <li><a href="#"><i class="fa fa-accessible-icon">  Career Opportunity</i></a></li>
                            <li><a href="#"><i class="fa fa-address-book"></i>  Contact</a></li>
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

     <!-- top section  -->
                    <div class="topSections">
                        <h5 style="font-weight:bold;">WELCOME TO LSC</h5>
                        <h1>27 March, 2020</h1>
                    </div>

             <div class="downSection">
                        
                    <h4 style="font-weight:bold;">TOP REPORTS</h4>

                <div class="row cardRow">
                <!-- card first -->
                    <?php
                    include('../includes/dbcon.php');
                    $qry="select *from customer_data";
                    $result=$conn->query($qry);
                   $order= $result->rowCount();
                    
                    ?>
                    <div class="col-md-3">
                        <a href="#" class="cardA"><div class="card card1">
                            <h1 class="cardHeading"><?php echo $order  ?></h1>
                            <i class="fa fa-cart-arrow-down cardIcons"></i>
                            <h5 style="font-weight:bold">RECENT ORDERS</h5>
                        </div></a>
                    </div>

                    <!-- secon card  -->
                    <div class="col-md-3">
                        <a href="#" class="cardA"><div class="card card2">
                        <img src="../images/logo.png" alt="logo" style="width:29%;padding:0 0 20px 0;">
                            <i class="fa fa-align-right cardIcons"></i>
                            <h5 style="font-weight:bold">RECENT NEWS</h5>
                        </div></a>
                    </div>

                    <!-- third card  -->

                    <div class="col-md-3">
                        <a href="#" class="cardA"><div class="card card3">
                        <h1 class="cardHeading">04</h1>
                            <i class="fa fa-file cardIcons"></i>
                            <h5 style="font-weight:bold">CV RECEIVED</h5>
                        </div></a>
                    </div>

                    <!-- fourth card  -->
                    <div class="col-md-3">
                        <a href="#" class="cardA"><div class="card card4">
                        <h1 class="cardHeading">20</h1>
                            <i class="fa fa-id-badge cardIcons"></i>
                            <h5 style="font-weight:bold">RECENT ORDERS</h5>
                    </div></a>
                </div>
            </div>
    </div>
    


   

   
    
</body>
</html>