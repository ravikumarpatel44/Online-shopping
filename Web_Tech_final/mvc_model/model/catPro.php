<?php
/**
 * Created by PhpStorm.
 * User: ARIHANT
 * Date: 11-11-2016
 * Time: 18:37
 */
$con = mysqli_connect("localhost","root","","ecommerce");
if (mysqli_connect_errno()){
    echo "failed to connect to MySQL:".mysqli_connect_errno();
}
function getCatPro(){
    if(isset($_GET['cat'])){
        $cat_id=$_GET['cat'];
        global $con;
        $get_cat_pro = "select * from products where product_cat='$cat_id'";
        $run_cat_pro = mysqli_query($con,$get_cat_pro);
        $count_cats = mysqli_num_rows($run_cat_pro);

        if($count_cats==0){
            echo "<h2 style='padding: 20px;'>There is no Product in this category.</h2>";
        }
        return $run_cat_pro;


    }}