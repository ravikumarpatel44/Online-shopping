<?php
/**
 * Created by PhpStorm.
 * User: ARIHANT
 * Date: 11-11-2016
 * Time: 18:38
 */
$con = mysqli_connect("localhost","root","","ecommerce");
if (mysqli_connect_errno()){
    echo "failed to connect to MySQL:".mysqli_connect_errno();
}
function getBrandPro(){
    if(isset($_GET['brand'])){

        $brand_id=$_GET['brand'];


        global $con;

        $get_brand_pro = "select * from products where product_brand='$brand_id'";
        $run_brand_pro = mysqli_query($con,$get_brand_pro);
        $count_brands = mysqli_num_rows($run_brand_pro);
        if($count_brands==0){
            echo "<h2 style='padding: 20px;'>There is no Product in this category.</h2>";

        }
        return $run_brand_pro;

        }}
