<?php 
session_start();
$neewsid=$_REQUEST['newsid'];


?>
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

<?php include('header.html');?>

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
<?php 
include('includes/dbcon.php');
$qry="select *from news_and_events where id=$neewsid";
$result=$conn->query($qry);
$data=$result->fetch(PDO::FETCH_ASSOC);
?>

<div class="mainNewsDetail">
    <div class="container">
        <div class="newsSection">
            <img src="news_and_events_images/<?php echo  $data['image']?>" alt="mains news detail image" class="mainNewsDetailImg">
                <h3 class="mainNewsDetailHeading"><?php echo  $data['title']?></h3>
                <p class="date">18 March, 2020</p>
                <p class="mainNewsDetailP"><?php echo  $data['description']?></p>
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
    <?php
        $qry2="select  *from news_and_events order by id asc limit 4";
        $result2=$conn->query($qry2);
        while($data2=$result2->fetch(PDO::FETCH_ASSOC))
         {
     ?>
        <div class="col-md-3">
                <div class="card newsCard" style="width: 100%;">
                    <a href="morenews.php? newsid=<?php echo $data2['id']; ?>"  class="newscardImg"><img class="card-img-top" src="news_and_events_images/<?php echo $data2['image'];?>" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="morenews.php? newsid=<?php echo $data2['id'];?>" class="allnewsTitle"><h5 class="card-title"><?php echo $data2['title'];?></h5></a>
                        <p class="date" style="color:#2d5f2e">18 March, 2020</p>
                        
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