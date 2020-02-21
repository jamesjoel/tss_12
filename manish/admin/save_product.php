<?php
include("db.php");

// print_r($_POST);
$a = $_POST['title'];
$b = $_POST['price'];
$c = $_POST['cate'];
$d = $_POST['discount'];
$e = $_POST['detail'];

$que = "INSERT INTO product (name, price, category, discount, detail) VALUES ('$a', '$b', '$c', '$d', '$e')";

mysqli_query($con, $que);

header("location:view_product.php");

?>