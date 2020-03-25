<?php
include("admin/db.php");

$a = $_POST['name'];
$d = $_POST['add'];
$e = $_POST['city'];
$f = $_POST['gender'];
$g = $_POST['contact'];


$query = "UPDATE user1 SET name='$a', address='$d', city='$e', gender='$f', contact='$g'";

mysqli_query($con, $query); // Fire the Query

header("location:my_account.php"); // and redirect to login page

?>