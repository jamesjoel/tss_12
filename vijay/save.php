<?php
include("admin/db.php");
$con=mysqli_connect("localhost","root", "","vijay");


$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];

$c = sha1($c);

$d=$_POST['add'];
$e=$_POST['gender'];
$f=$_POST['city'];
$g=$_POST['cont'];

 $query = "INSERT INTO user(name, email, password, address, gender, city, contact) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";

             
   mysqli_query($con, $query); // Fire the Query

header("location:login.php"); // and redirect to login page
                     
?>