<?php
include("db.php");
$a = $_GET['cateid'];


$que = "DELETE FROM category WHERE id = $a";
mysqli_query($con, $que);
header("location:vcategory.php");
?>