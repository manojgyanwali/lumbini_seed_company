<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/newsDetails.css">
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

<!-- MAIN NEWS DETAILS SECTION  -->

<div class="mainNewsDetail">
    <div class="container">
        <div class="newsSection">
            <img src="images/news.png" alt="mains news detail image" class="mainNewsDetailImg">
                <h3 class="mainNewsDetailHeading">Ls has brought new seed of rice</h3>
                <p class="date">18 March, 2020</p>
                <p class="mainNewsDetailP">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        </div>

        <div class="shareSection">
        <a href="" id="fb_share"><i class="fa fa-facebook"> Share in Facebook</i></a>

            <script>
                window.onload = function() {
                    fb_share.href ='http://www.facebook.com/share.php?u=' + encodeURIComponent(location.href); 
                }  
            </script>
        </div>
       
    </div>
</div>

<!-- more news and Event  -->

<div class="moreNews">
    <div class="container">

    <h4 class="allNewsHead"> More News & Event</h4>

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
    </div>
</div>

</body>
</html>