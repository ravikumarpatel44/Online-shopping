<?php
/**
 * Created by PhpStorm.
 * User: ARIHANT
 * Date: 11-11-2016
 * Time: 13:47
 */

function _pro($run_pro){
while($row_pro=mysqli_fetch_array($run_pro)){
    $pro_id = $row_pro['product_id'];
    $pro_cat = $row_pro['product_cat'];
    $pro_brand = $row_pro['product_brand'];
    $pro_title = $row_pro['product_title'];
    $pro_price = $row_pro['product_price'];
    $pro_image = $row_pro['product_image'];

    echo "
         <div id='single_product'>
         
         
        <img src='product_images/$pro_image' width='200px' height='200px';/>

    <h3 style='margin-bottom: 10px'>$pro_title</h3>

    <p><b>Price</b> <b>$pro_price</b></p>
    <a href='details.php?pro_id=$pro_id' style='float: left;'>Details</a>
    <a href='index.php?add_cart=$pro_id'><button style='float: right'>Add to Cart</button></a>
    
         </div>
         
         ";

}}