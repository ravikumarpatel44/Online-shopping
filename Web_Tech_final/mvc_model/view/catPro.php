<?php
/**
 * Created by PhpStorm.
 * User: ARIHANT
 * Date: 11-11-2016
 * Time: 18:43
 */
/*function _printcatPro(){
    echo "<h2 style='padding: 20px;'>There is no Product in this category.</h2>";
};*/
function getcatProview($run_cat_pro){
    while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
    $pro_id = $row_cat_pro['product_id'];
    $pro_cat = $row_cat_pro['product_cat'];
    $pro_brand = $row_cat_pro['product_brand'];
    $pro_title = $row_cat_pro['product_title'];
    $pro_price = $row_cat_pro['product_price'];
    $pro_image = $row_cat_pro ['product_image'];
        echo "
         <div id='single_product'>
         <h3>$pro_title</h3>
         <img src='product_images/$pro_image' width='180px' height='180px' 
    / >
    <p><b> $pro_price</b></p>
    <a href='details.php?pro_id=$pro_id' style='float: left;'>Details</a>
    <a href='index.php?pro_id=$pro_id'><button style='float: right'>Add to Cart</button></a>
    
         </div>
         
         ";

}
};