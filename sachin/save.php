<?php  
//print_r($_POST);
$con =mysqli_connect("localhost" ,"root" ,"" ,"user1");
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['pass'];
$d = $_POST['add'];
$f = $_POST['gender'];
$e = $_POST['city'];
$g = $_POST['cont'];


   $query = "INSERT INTO header1(name,email,password,address,gender,city,contact)
                 VALUES('$a' ,'$b' ,'$c' ,'$d' ,'$f' ,'$e','$g')";

  mysqli_query($con, $query);







?>

