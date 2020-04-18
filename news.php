<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/news.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

<!-- header section  -->

<?php include('header.html') ?>



<!-- head with search section  -->

<div class="headSearch">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>News & Event</h2>
            </div>
            <div class="col-md-4">
            <div class="input-group mb-3" id="searchSection">
                        <input type="text" class="form-control" placeholder="What are you looking for?">
                        <div class="input-group-prepend">
                           <button class="input-group-text" id="search" style="background-color:#2D5F2E;color:white;"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- image article first section  -->

<div class="imageArticle1">
    <div class="container">
        <div class="row">
            <!-- left section  -->
            <div class="col-md-8">
                <img src="images/news.png" alt="newsImage" class="newsHeadImg">
                <a href="#" class="newsHeadA"><h3 class="newsHead">Ls Has bring new seed of rice </h3></a>
                <p style="color:#2D5F2E">20 March, 2020</p>

                <p class="newsHeadP">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur arcu interdum pharetra cursus. Mauris porta, nibh id condimentum congue, ante justo facilisis ligula, quis condimentum nibh lectus eget nisi. Fusce laoreet malesuada nibh vel imperdiet. Maecenas ultrices condimentum felis, eget pretium urna sagittis ac. Integer nisi erat, euismod in commodo a, placerat in est. Morbi at sapien lectus. Integer at facilisis ligula. Proin sit amet suscipit diam, vitae volutpat ante. Suspendisse risus erat, vestibulum et condimentum vitae, iaculis semper magna. Integer nec metus sapien. Proin eget tortor a diam imperdiet viverra in vel mi.
                </p>

                <a href="#" class="continueLink"><h5>Continue Reading....</h5></a>
            </div>
            <!-- right section  -->
            <div class="col-md-4">
                <h3 style="color:#2d5f2e">Recent News & Event</h3>

                <!-- image row 1  -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-4 col-sm-6 col-xm-6">
                        <a href=""><img src="images/subnewsImg.png" alt="sub news Img" class="subHeadImg"></a>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xm-6">
                        <a href="#" class="subNewsHeadA"><h6 class="subNewsHead">Farmers has been noticed about the virus</h6></a>
                        <p>18 March, 2020</p>
                    </div>
                </div>

                <!-- image row 2 -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-4 col-sm-6 col-xm-6">
                        <a href=""><img src="images/subnewsImg.png" alt="sub news Img" class="subHeadImg"></a>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xm-6">
                        <a href="#" class="subNewsHeadA"><h6 class="subNewsHead">Farmers has been noticed about the virus</h6></a>
                        <p>18 March, 2020</p>
                    </div>
                </div>

                <!-- image row 3 -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-4 col-sm-6 col-xm-6">
                        <a href=""><img src="images/subnewsImg.png" alt="sub news Img" class="subHeadImg"></a>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xm-6">
                        <a href="#" class="subNewsHeadA"><h6 class="subNewsHead">Farmers has been noticed about the virus</h6></a>
                        <p>18 March, 2020</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- all news and events  -->

<div class="allNewsCard">
    <div class="container">

        <h4 class="allNewsHead"> All News</h4>

        <!-- first row  -->
        <div class="row cardRow">
            <!-- first card  -->
            <div class="col-md-4">
                <div class="card newsCard" style="width: 100%;">
                    <a href="" class="newscardImg"><img class="card-img-top" src="images/card.png" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="" class="allnewsTitle"><h5 class="card-title">Head Line of the news goes here</h5></a>
                        <p class="date" style="color:#2d5f2e">18 March, 2020</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>

            <!-- second card  -->
            <div class="col-md-4">
                <div class="card newsCard" style="width: 100%;">
                    <a href="" class="newscardImg"><img class="card-img-top" src="images/card.png" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="" class="allnewsTitle"><h5 class="card-title">Head Line of the news goes here</h5></a>
                        <p class="date" style="color:#2d5f2e">18 March, 2020</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>

            <!-- third card  -->
            <div class="col-md-4">
                <div class="card newsCard" style="width: 100%;">
                    <a href="" class="newscardImg"><img class="card-img-top" src="images/card.png" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="" class="allnewsTitle"><h5 class="card-title">Head Line of the news goes here</h5></a>
                        <p class="date" style="color:#2d5f2e">18 March, 2020</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            


        </div>

        <!-- second row  -->
        <div class="row cardRow">
            <!-- first card  -->
            <div class="col-md-4">
                <div class="card newsCard" style="width: 100%;">
                    <a href="" class=""><img class="card-img-top newscardImg" src="images/card.png" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href=""><h5 class="card-title">Head Line of the news goes here</h5></a>
                        <p class="date" style="color:#2d5f2e">18 March, 2020</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>

            <!-- second card  -->
            <div class="col-md-4">
                <div class="card newsCard" style="width: 100%;">
                    <a href="" class=""><img class="card-img-top newscardImg" src="images/card.png" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href=""><h5 class="card-title">Head Line of the news goes here</h5></a>
                        <p class="date" style="color:#2d5f2e">18 March, 2020</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>

            <!-- third card  -->
            <div class="col-md-4">
                <div class="card newsCard" style="width: 100%;">
                    <a href="" class=""><img class="card-img-top newscardImg" src="images/card.png" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href=""><h5 class="card-title">Head Line of the news goes here</h5></a>
                        <p class="date" style="color:#2d5f2e">18 March, 2020</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            


        </div>
    </div>
</div>
    
</body>
</html>