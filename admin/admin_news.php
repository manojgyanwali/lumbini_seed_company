<?php 
include('../includes/dbcon.php');
include('includes/header.php');
include('includes/sidebar.php');
?>
<div class="col-md-5 col-md-5 col-sm-12">

    <div class="jumbotron">
    <h4>NEWS AND EVENTS</h4>
            <?php

                $qry="select  *from news_and_events order by id desc";
                $result=$conn->query($qry);
                if($result->rowCount()>0) 
                {
                    
                    while($data=$result->fetch(PDO::FETCH_ASSOC))
                    {
            ?>
                        <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#lkdlajlkf"><?php echo $data['title'];   ?></a>
                        </li>
                      </ul>
                      <span ><a href="edit_post.php ? product_id=<?php echo $data['id'];?>">EDIT</a> |  <a href="delete_post.php">DELETE</a> </span>
                    
        
                  
            <?php
              
                   }   
                }
                else
                {
                    echo "no data found";
                }
            ?>
    
    </div>

</div>
</div>
</div>

<form action="add_news.php" method="POST">
   <button type="submit" name="add" class="btn btn-danger btn-lg" style="margin-right:500px;">ADD</button>
</forms>

<?php
include('includes/footer.php');
?>
