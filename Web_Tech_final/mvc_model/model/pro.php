<?php
/**
 * Created by PhpStorm.
 * User: ARIHANT
 * Date: 11-11-2016
 * Time: 13:49
 */

$con = mysqli_connect("localhost","root","","ecommerce");
if (mysqli_connect_errno()){
    echo "failed to connect to MySQL:".mysqli_connect_errno();
}
function getPro(){
    if(!isset($_GET['cat'])){
        if (!isset($_GET['brand'])){
            global $con;

            $get_pro = "select * from products order BY rand() LIMIT 0,12";
            $run_pro = mysqli_query($con,$get_pro);
            #return $run_pro;
            while($row_pro=mysqli_fetch_array($run_pro)){
                $pro_id = $row_pro['product_id'];
                $pro_cat = $row_pro['product_cat'];
                $pro_brand = $row_pro['product_brand'];
                $pro_title = $row_pro['product_title'];
                $pro_price = $row_pro['product_price'];
                $pro_image = $row_pro['product_image'];

                echo "
         <div id='single_product'>
         <h3>$pro_title</h3>
         <img src='product_images/$pro_image' width='180px' height='180px' 
    / >
    <p><b>$pro_price</b></p>
    <a href='details.php?pro_id=$pro_id' style='float: left;'>Details</a>
    <a href='index.php?add_cart=$pro_id'><button style='float: right'>Add to Cart</button></a>
    
         </div>
         
         ";

            }
}}}