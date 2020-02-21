<?php
// print_r($_POST);
// Connection to Database
$con = mysqli_connect("localhost", "root", "password", "tss12");


$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['pass'];
$d = $_POST['add'];
$e = $_POST['city'];
$f = $_POST['gender'];
$g = $_POST['contact'];
$query = "INSERT INTO user (name, email, password, address, gender, city, contact) VALUES ('$a', '$b', '$c', '$d', '$f', '$e', '$g')";

mysqli_query($con, $query); // Fire the Query

header("location:login.php"); // and redirect to login page

?>