<?php
include("db.php");
 //print_r($_GET);

$a = $_GET['cateid'];


$que = "DELETE FROM product WHERE id = $a";
mysqli_query($con, $que);



header("location:view_product.php");
?>