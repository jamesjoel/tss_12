<?php
include("db.php");
 //print_r($_GET);

$a = $_GET['cateid'];


$que = "DELETE FROM category WHERE id = $a";
mysqli_query($con, $que);
header("location:view_category.php");
?>