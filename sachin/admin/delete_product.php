<?php
include("db.php");
$a = $_GET['cateid'];


$que = "DELETE FROM product WHERE id = $a";
mysqli_query($con, $que);
header("location:vproduct.php");
?>