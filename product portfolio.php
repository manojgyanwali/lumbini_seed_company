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
                    <div class="input-group mb-3" id="searchSection">
                        <input type="text" class="form-control" placeholder="What are you looking for?">
                        <div class="input-group-prepend">
                           <button class="input-group-text" id="search"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
    
                </div>
            </div>
            

        </div>
    </section>

    <!-- card section begins here  -->

    <section class="SectionCard">
        <div class="container">
            <div class="row" id="cardRow">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="productDetails.php"><img src="images/myimage.jpg" alt="" class="card-img img-responsive"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; margin-top: 20px;">Name of seed</h5>
                            <p class="card-text" style="text-align: center; color: #2D5F2E;"><i>Category one</i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="www.facebook.com"><img src="images/myimage.jpg" alt="" class="card-img img-responsive"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; margin-top: 20px;">Name of seed</h5>
                            <p class="card-text" style="text-align: center; color: #2D5F2E;"><i>Category one</i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="www.facebook.com"><img src="images/myimage.jpg" alt="" class="card-img img-responsive"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; margin-top: 20px;">Name of seed</h5>
                            <p class="card-text" style="text-align: center; color: #2D5F2E;"><i>Category one</i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="www.facebook.com"><img src="images/myimage.jpg" alt="" class="card-img img-responsive"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; margin-top: 20px;">Name of seed</h5>
                            <p class="card-text" style="text-align: center; color: #2D5F2E;"><i>Category one</i></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" id="cardRow">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="www.facebook.com"><img src="images/myimage.jpg" alt="" class="card-img img-responsive"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; margin-top: 20px;">Name of seed</h5>
                            <p class="card-text" style="text-align: center; color: #2D5F2E;"><i>Category one</i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="www.facebook.com"><img src="images/myimage.jpg" alt="" class="card-img img-responsive"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; margin-top: 20px;">Name of seed</h5>
                            <p class="card-text" style="text-align: center; color: #2D5F2E;"><i>Category one</i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="www.facebook.com"><img src="images/myimage.jpg" alt="" class="card-img img-responsive"></a>
                        <div class="card-body"> 
                            <h5 class="card-title" style="text-align: center; margin-top: 20px;">Name of seed</h5>
                            <p class="card-text" style="text-align: center; color: #2D5F2E;"><i>Category one</i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="www.facebook.com"><img src="images/myimage.jpg" alt="" class="card-img img-responsive"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center; margin-top: 20px;">Name of seed</h5>
                            <p class="card-text" style="text-align: center; color: #2D5F2E;"><i>Category one</i></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>