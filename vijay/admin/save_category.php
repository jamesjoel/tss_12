<?php
include("db.php");

$a = $_POST['name'];

$query = "INSERT INTO category (name) VALUES ('$a')";
mysqli_query($con, $query);

header("location:view_category.php");
?>