<?php
include("db.php");

print_r($_POST);
$a = $_POST['name'];
$b = $_POST['price'];
$c = $_POST['category'];
$d = $_POST['discount'];
$e = $_POST['detail'];

$que = "INSERT INTO product (name, price, category, discount, detail) VALUES ('$a', '$b', '$c', '$d', '$e')";

mysqli_query($con, $que);

header("location:vproduct.php");

?>