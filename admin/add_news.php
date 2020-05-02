<?php 
    include('../includes/dbcon.php');
    include('includes/header.php');
    include('includes/sidebar.php');

    
    
?>



            <div class="col-md-5 col-sm-12 mt-5">
                <h5>add your news here</h5>

                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file" value="please choose file"></br>
                    <textarea name="title"  placeholder="add title here"> </textarea></br>
                    <textarea name="ckeditor" placeholder="add your content here" id="ckeditor" class="ckeditor"></textarea>

                    <input type="submit" name="publish" value="publish"></br>
                   <?php if(isset($message)) 
                   {
                        echo $message;
                   }

                   ?>
                </form>

            </div>


</div>
</div>



<?php
    include('includes/footer.php');
    if(isset($_REQUEST['publish']))
        {
            $title=$_REQUEST['title'];
            $product_description=$_REQUEST['ckeditor'];

            
            $tempnames=$_FILES['file']['tmp_name'];
            $imagenames=$_FILES['file']['name'];
            if($imagenames=="")
                {
                $message= "fill all the fields";
                }
             else
                {
               
                move_uploaded_file($tempnames,"../news_and_events_images/".$imagenames);
             
                $qry="insert into news_and_events (image,title,description)
                value('$imagenames','$title','$product_description')";
                $result= $conn->query($qry);
               
               
                }
        }
?>
<script src="../ckeditor/ckeditor.js"></script>


