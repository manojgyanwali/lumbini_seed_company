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
            <?php
                    include('includes/dbcon.php');
                    $qry="select  *from news_and_events order by id desc limit 1";
                    $result=$conn->query($qry);
                    $data=$result->FETCH(PDO::FETCH_ASSOC);
                    

            ?>
            <div class="col-md-8">
                <img src="news_and_events_images/<?php echo $data['image']; ?>" alt="newsImage" class="newsHeadImg">
                <a href="newsDetails.php ? news_id=<?php echo $data['id'] ?>" class="newsHeadA"><h3 class="newsHead"><?php echo $data['title']; ?> </h3></a>
                <p style="color:#2D5F2E"><?php echo $data['date']?></p>
                <p class="newsHeadP"><?php echo  $data['description']; ?> </p>
                <a href="newsDetails.php ? news_id=<?php echo $data['id'] ?>" class="continueLink"><h5>Continue Reading....</h5></a>
            </div>
            <div class="col-md-4">
            <h3>Recent news</h3>
           
            <?php 
            $qry2="select *from news_and_events order by id desc limit 3";
            $result2=$conn->query($qry2);

           while( $data2=$result2->fetch(PDO::FETCH_ASSOC))
           {
            ?>
               
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-4 col-sm-6 col-xm-6">
                        <a href="newsDetails.php ?news_id=<?php echo $data2['id']; ?>"><img src="news_and_events_images/<?php echo $data2['image'];?>" alt="sub news Img" class="subHeadImg"></a>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xm-6">
                        <a href="newsDetails.php ?news_id=<?php echo $data2['id']; ?>" class="subNewsHeadA"><h6 class="subNewsHead"><?php echo $data2['title']; ?></h6></a>
                        <p>18 March, 2020</p>
                    </div>
                </div>
           

            <?php 
            }
            ?>
            </div>
        </div>
    </div>
</div>

<!-- all news and events  -->

<div class="allNewsCard">
    <div class="container">

        <h4 class="allNewsHead"> All News</h4>
            <div class="row cardRow">
                <?php 
                    $qry3="select *from news_and_events order by id";
                    $result3=$conn->query($qry3);
                    while($data3=$result3->fetch(PDO::FETCH_ASSOC))
                    {                 
                ?>   
            <div class="col-md-4">
                <div class="card newsCard" style="width: 100%;">
                    <a href="newsDetails.php? news_id=<?php echo $data3['id'];?>" class="newscardImg"><img class="card-img-top" src="news_and_events_images/<?php echo $data3['image'];?> " alt="Card image cap"></a>
                    <div class="card-body">
                    <a href="newsDetails.php? news_id=<?php echo $data3['id'];?>" class="allnewsTitle"><h5 class="card-title"><?php echo $data3['title'];?></h5></a>
                        <p class="date" style="color:#2d5f2e"><?PHP echo $data3['date'] ;?></p>
                        <p class="card-text"><?php echo $data['description'];?></p>
                        
                    </div>
                </div>
            </div>

           
                <?php 
                    }
                ?>
            
            


        </div>
    </div>
</div>
    
</body>
</html>