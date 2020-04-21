<?php 
    include('../includes/dbcon.php');
    include('includes/header.php');
    include('includes/sidebar.php');
?> 
<!-- main content area start -->
<div class="col-md-5 col-md-5 col-sm-12">
    <div class="jumbotron">
            <h4>Recent Post</h4>
            <?php

                $qry="select  *from product_portfolio order by id desc";
                $result=$conn->query($qry);
                if($result->rowCount()>0) 
                {
                    
                    while($data=$result->fetch(PDO::FETCH_ASSOC))
                    {
            ?>
                        <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#lkdlajlkf"><?php echo $data['product_name'];   ?></a>
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
            <!-- <div class="col-md-5 col-md-5 col-sm-12">
                
                <div class="jumbotron">
           
                        <h4>Recent Comments</h4>
                      
                        
                        <ul class="nav flex-column"><li class="nav-item"><a class="nav-link" href="#lkdlajlkf">kfjaklj afjahjakhf akjhfhfhfa askashfsjhahfas askjfahshfas akdkahfha akahakfhasf </a></ul>
                            <span > <a href="">EDIT</a> |  <a href="">DELETE</a> </span>
                        <ul class="nav flex-column"><li class="nav-item"><a class="nav-link" href="#lkdlajlkf">kfjaklj afjahjakhf akjhfhfhfa askashfsjhahfas askjfahshfas akdkahfha akahakfhasf </a></ul>
                             <span > <a href="">EDIT</a> |  <a href="">DELETE</a> </span>
                        <ul class="nav flex-column"><li class="nav-item"><a class="nav-link" href="#lkdlajlkf">kfjaklj afjahjakhf akjhfhfhfa askashfsjhahfas askjfahshfas akdkahfha akahakfhasf </a></ul>
                                <span > <a href="">EDIT</a> |  <a href="">DELETE</a> </span>
                        <ul class="nav flex-column"><li class="nav-item"><a class="nav-link" href="#lkdlajlkf">kfjaklj afjahjakhf akjhfhfhfa askashfsjhahfas askjfahshfas akdkahfha akahakfhasf </a></ul>
                        <span > <a href="">EDIT</a> |  <a href="">DELETE</a> </span>
                        
                </div>   
            </div> -->

        
</div>
</div>
    <form action="add_product_portfolio.php" method="POST">
   
    <button type="submit" name="add" class="btn btn-danger btn-lg" style="margin-right:500px;">ADD</button>

    </forms>
    <!-- main content area end -->
    
    
<?php
    include('includes/footer.php');
?>
