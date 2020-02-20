<?php
 //print_r($_POST);
$conn =mysqli_connect("localhost" ,"root" ,"" ,"project1");
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['pass'];
$d = $_POST['add'];
$f = $_POST['gender'];
$e = $_POST['city'];
$g = $_POST['contact'];


   $query = "INSERT INTO user11 (name,email,password,address,gender,city,contact)
                 VALUES('$a' ,'$b' ,'$c' ,'$d' ,'$f' ,'$e','$g')";

  mysqli_query($conn, $query);
  header("location:login.php");







?>

