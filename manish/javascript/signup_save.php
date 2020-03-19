<?php

include("db.php");

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['pass'];
$c = sha1($c);
$d = $_POST['add'];

$query= "INSERT INTO employee( name,email,password,address) VALUES('$a','$b','$c','$d' )";

mysqli_query($con,$query);
header("location:login.php");







  ?>