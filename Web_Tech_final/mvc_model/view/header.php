<!DOCTYPE html>
<?php
session_start();
include("functions/functions.php");
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <title>Onilne Shoping</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
</head>

<body>
<!-- main Container starts here-->
<div class="main_wrapper">
    <!--starts here header-->
    <div class="header_wrapper">
        <a href="index.php"><img id="logo" class="location" src="images/gambarlogo.png" /></a>
        <div class="form">
            <form method="get" action="model/search.php"enctype="multipart/form-data">
                <input class="srch" type="text" placeholder="&nbsp&nbsp&nbsp Search products" name="user_query"/>
                <input class="sch" type="submit" name="search" value="Search"/>
            </form>
        </div>
    </div>
    <div class="menubar">
        <ul id="menu">
            <li><a href="index.php">Home</a> </li>

            <li><a href="customer/my_account.php">My Account</a> </li>
            <li><a href="customer_register.php">Sign Up</a> </li>
            <li><a href="view/login.php"</a>Login</li>
            <li><a href="view/contact.php">Contact Us</a></li>
        </ul>

    </div>


    <div id="header2">

        <div class="carousel-inner" class="first">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" class="first">


                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active" class="first">
                        <div class="div1"><img src="image/1.jpg" alt="Chania" width="100%" height="280"></div>



                    </div>

                    <div class="item">

                        <div class="div1"><img src="image/2.jpg" alt="Chania" width="100%" height="280"></div>


                    </div>

                    <div class="item">

                        <div class="div1"><img src="image/3.jpg" alt="Chania" width="100%" height="280"></div>


                    </div>

                    <div class="item">

                        <div class="div1"><img src="image/4.jpg" alt="Chania" width="100%" height="280"></div>


                    </div>

                    <div class="item">

                        <div class="div1"><img src="image/5.jpg" alt="Chania" width="100%" height="280"></div>


                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


    </div>

