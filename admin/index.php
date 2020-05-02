<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 adminMain">
                
                <div class="lsc">
                    <img src="/images/Logo.png" alt="logo" class="logo">

                    <h2 style="font-weight: bold;">Lumbini Seed Company</h2>
                </div>
               

                <h5 class="welcomeText">Welcome to Admin panel</h5>

                <h2 class="login">Login</h2>
                <form action="admin_login.php" method="POST" >

                    <p style="margin-top: 10px;">Enter your correct Username & Password</p>

                    <div class="form-group">
                        <input type="text" name="username" class="form-control col-md-11" placeholder="Enter your user name here">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control col-md-11" placeholder="Enter your password here">
                    </div>

                    <div class="from-group">
                        <button name="login" class="btn btn-info loginBtn">LOGIN</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>