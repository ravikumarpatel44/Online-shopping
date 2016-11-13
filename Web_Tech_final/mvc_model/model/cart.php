<?php
/**
 * Created by PhpStorm.
 * User: ARIHANT
 * Date: 11-11-2016
 * Time: 13:32
 */
$con = mysqli_connect("localhost","root","","ecommerce");
if (mysqli_connect_errno()){
    echo "failed to connect to MySQL:".mysqli_connect_errno();
}
function cart(){
    if(isset($_GET['add_cart'])){
        $pro_id = $_GET['add_cart'];
        global  $con;
        $ip=getIp();
        $check_pro = "select * from cart where ip_add='$ip' and p_id='$pro_id'";
        $run_check = mysqli_query($con,$check_pro);
        if (mysqli_num_rows($run_check)>0){
           // echo " ";
        }
        else{
            $insert_pro = "insert into cart(p_id,ip_add) VALUES ('$pro_id','$ip')";
            $run_pro = mysqli_query($con,$insert_pro);
            echo "<script>window.open('index.php','_self')</script>";
        }
    }}