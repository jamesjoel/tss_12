<?php
// print_r($_POST);
$con = mysqli_connect("localhost", "root", "password", "tss12");


$a = $_POST['name'];
$b = $_POST['pwd'];
$c = $_POST['add'];
$d = $_POST['city'];
$e = $_POST['gender'];

$que = "INSERT INTO demo (name, password, address, city, gender) VALUES ('$a', '$b', '$c', '$d', '$e')";

mysqli_query($con, $que);

header("location:about.php");
?>