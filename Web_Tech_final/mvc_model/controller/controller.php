<?php
session_start();
error_reporting(0);
?>
<?php include_once("view/header.php");
include_once("view/sidebar1.php");
include_once ("view/print.php");
include_once ("model/cat.php");
include_once ("model/brand.php");
include_once ("model/cart.php");
include_once ("model/pro.php");
include_once ("model/catPro.php");
include_once ("model/brandPro.php");
include_once("model/search.php");
$run_cats=getCats();
while ($row_cats=mysqli_fetch_array($run_cats)){
$cat_id =$row_cats['cat_id'];
$cat_title=$row_cats['cat_title'];
_print($cat_id,$cat_title);
}
include_once("view/sidebar2.php");
$run_brands=getBrands();
while ($row_brands=mysqli_fetch_array($run_brands)){
 $brand_id =$row_brands['brand_id'];
 $brand_title=$row_brands['brand_title'];
 _print($brand_id,$brand_title);
}
include_once ("view/content_area1.php");
$run_pro=getPro();
include_once ("view/pro.php");
_pro($run_pro);
$run_cats=getCatPro();
include_once ("view/catPro.php");
getcatProview($run_cats);
$run_brands=getBrandPro();
include_once ("view/brandPro.php");
getbrandProview($run_cats);
search();
include_once("view/footer.php");

?>

