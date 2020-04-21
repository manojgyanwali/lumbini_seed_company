<?php 
    include('../includes/dbcon.php');
    include('includes/header.php');
    include('includes/sidebar.php');
    $product_id=$_REQUEST['product_id'];

    $qry="select *from product_portfolio where id=$product_id";
    $result=$conn->query($qry);
    $data=$result->FETCH(PDO::FETCH_ASSOC)


    
//     if(isset($_REQUEST['publish']))
//         {
//             $product_name=$_REQUEST['product_name'];
//             $category_name=$_REQUEST['category'];
//             $product_description=$_REQUEST['ckeditor'];
//             $product_specification=$_REQUEST['product_specification'];
//             $price_product=$_REQUEST['price_of_product'];
            
//             $tempname=$_FILES['file']['tmp_name'];
//             $imagename=$_FILES['file']['name'];
//             if($imagename==""||$product_name=="")
//                 {
//                 $message= "fill all the fields";
//                 }
//              else
//                 {
//                 move_uploaded_file($tempname,"../product_portfolio_image/".$imagename);
//                 $qry="insert into product_portfolio (product_name,product_image,category_name,product_description,product_specification,price_of_product)
//                 value('$product_name','$imagename','$category_name','$product_description','$product_specification',$price_product)";
//                 $result= $conn->query($qry);
               
               
//                 }
//         }
// ?>



            <div class="col-md-5 col-sm-12 mt-5">
                <h5>add your post here</h5>

                <form action="update_post.php ? id=<?php echo $product_id ?>" method="POST" enctype="multipart/form-data">
                    <textarea name="product_name"  placeholder="add title here"><?php echo $data['product_name'];?> </textarea></br>
                    <input type="file" name="image" value="please choose file"><?php echo $data['product_image'];?></br>
                    <textarea  name="category"   placeholder="category"><?php echo $data['category_name'];?></textarea></br>
                    
                    
                    <textarea name="ckeditor" placeholder="add your content here" id="ckeditor" class="ckeditor"><?php echo $data['product_description'];?></textarea>
                    
                    <textarea  name="product_specification" placeholder="product_specification"><?php echo $data['product_specification'];?></textarea></br>
                    <textarea  name="price_of_product" placeholder="price_of_product"><?php echo $data['price_of_product'];?></textarea>
                    
                    <input type="submit" name="update" value="update"></br>
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
?>
<script src="../ckeditor/ckeditor.js"></script>


