<?php
include("db.php");

$a = $_POST['title'];
$b = $_POST['price'];
$c = $_POST['cate'];
$d = $_POST['discount'];
$e = $_POST['detail'];

$query = "INSERT INTO product (name, price, category, discount, detail) VALUES ('$a', '$b', '$c', '$d', '$e')";

mysqli_query($con, $query);

header("location:add_product.php");

?>