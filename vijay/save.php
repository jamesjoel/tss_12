<?php
 //print_r($_POST);
$con=mysqli_connect("localhost","root", "","vijay");
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];
$d=$_POST['add'];
$e=$_POST['gender'];
$f=$_POST['city'];
$g=$_POST['cont'];

 $query = "INSERT INTO user(name, email, password, address, gender, city, contact) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
  mysqli_query($con, $query);
                        
?>