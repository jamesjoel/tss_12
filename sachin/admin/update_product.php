<?php
include("db.php");

// print_r($_POST);
$a = $_POST['title'];
$b = $_POST['price'];
$c = $_POST['cate'];
$d = $_POST['discount'];
$e = $_POST['detail'];

$x = $_POST['proid'];

$que = "UPDATE product SET name = '$a', price = '$b', category = '$c', discount = '$d', detail = '$e' WHERE id = $x";
mysqli_query($con, $que);
header("location:vproduct.php");

?>