<!DOCTYPE html>
<?php
session_start();
include("functions/functions.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Onilne Shop</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>
</head>
<body>
 <!-- main Container starts here-->
<div class="main_wrapper">
    <!--starts here header-->
    <div class="header_wrapper">
        <a href="index.php"><img id="logo" src="images/logo.jpg"/></a>
        <img id="banner" src="images/logo.jpg"/>
    </div>
    <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">Home</a> </li>
                <li><a href="all_products.php">All Products</a> </li>
                <li><a href="customer/my_account.php">My Account</a> </li>
                <li><a href="">Sign Up</a> </li>
                <li><a href="cart.php">Shopping Cart</a> </li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        <div id="form">
            <form method="get" action="results.php"
enctype="multipart/form-data">
                <input type="text" placeholder="search a product" name="user_query"/>
                <input type="submit" name="search" value="search"/>
            </form>
        </div>
    </div>

    <!--header ends here -->
    <!--navigation starts here-->


    <div class="content_wrapper">
        <!--navigation bar ends-->
        <!--content wrapper ends-->

    <div id="sidebar">
        <div id="sidebar_title">Categories</div>
        <ul id="cats">
           <?php getCats();  ?>

        </ul>
        <div id="sidebar_title">Brands</div>
        <ul id="cats">
           <?php
           getBrands();
           ?>

        </ul>


    </div>

    <div id="content_area">
        <?php cart(); ?>
        <div id="shopping_cart">
            <span style="float:right; font-size: 18px; padding:5px;
             line-height: 40px;">


             Welcome Guest!<b style="color: yellow ">Shopping Cart</b>
           Total Items <?php total_items();?> : Total Price <?php total_price(); ?><a href="cart.php" style="color: yellow">Goto Cart</a></span>"

        </div>
        
        <div id="products_box">
        <?php
        if (!isset($_SESSION['customer_email'])) {
            # code...
           include("customer_login.php");
        }
        else{
            include("payment.php");
        }

        ?>

            
        </div>


    </div>
    </div>
    <div id="footer">
       <h2 style="text-align:center; padding-top: 30px;">&copy;2016 by ITGroup.com</h2>

    </div>
</div>

</body>
</html>