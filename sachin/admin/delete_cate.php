<?php
include("db.php");
$a = $_GET['cateid'];

$que2 = "SELECT * FROM category WHERE id = $a";
$result = mysqli_query($con, $que2);
$data = mysqli_fetch_assoc($result);
$x = $data['name'];


$que = "DELETE FROM category WHERE id = $a";
mysqli_query($con, $que);

$que = "DELETE FROM product WHERE category = '$x'";
mysqli_query($con, $que);

header("location:vcategory.php");
?>





