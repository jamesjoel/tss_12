<?php
$con= mysqli_connect("localhost", "root", "", "project2");

$a=$_POST["full_name"];
$b=$_POST["email"];
$c=$_POST["pass"];
$d=$_POST["add"];
$e=$_POST["contact"];
$f=$_POST["city"];

$query = "INSERT INTO user(full_name, username,  password, address, contact, city )VALUES('$a','$b', '$c', '$d', '$e', '$f')";

mysqli_query($con, $query);
header("location: login.php");


?>