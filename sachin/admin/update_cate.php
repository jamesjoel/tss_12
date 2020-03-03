<?php
include("db.php");
// print_r($_POST);
$a = $_POST['name'];
$b = $_POST['cid'];

$que = "UPDATE category SET name = '$a' WHERE id=$b";
mysqli_query($con, $que);

header("location:vcategory.php");
?>