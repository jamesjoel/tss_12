<?php
include("db.php");

$a = $_POST['name'];

$que = "INSERT INTO category(name) VALUES('$a')";
mysqli_query($con,$que);
header("location:view_category.php");
?>
