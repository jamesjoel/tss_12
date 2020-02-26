<?php
// print_r($_POST);
// die;
//connection to database
$con=mysqli_connect("localhost","root","","project");

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];
$d=$_POST['add'];
$e=$_POST['city'];
$f=$_POST['gender'];
$g=$_POST['cont'];

 $query = "INSERT INTO user (name,email,password,address,city,gender,contact) values ('$a','$b','$c','$d','$e','$f','$g')";

 mysqli_query($con,$query);  //fire the query
 header ("location:login.php");  //and redirect to login page
?>