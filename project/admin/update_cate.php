<?php
include("db.php");
// print_r($_POST);
// die;

$a = $_POST['name']; //demo
$b = $_POST['cid']; // 6

$que3 = "SELECT * FROM category WHERE id = $b";
$result = mysqli_query($con, $que3);
$data = mysqli_fetch_assoc($result);
$c = $data['name'];


$que = "UPDATE category SET name = '$a' WHERE id=$b";
mysqli_query($con, $que);


$que2 = "UPDATE product SET category = '$a' WHERE category = '$c'";
mysqli_query($con, $que2);

header("location:view_category.php");
?>