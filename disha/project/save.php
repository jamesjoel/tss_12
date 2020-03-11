<?php
$con = mysqli_connect("localhost", "root", "", "project");

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['pass'];


$c = sha1($c);

$d = $_POST['add'];
$e = $_POST['city'];
$f = $_POST['gender'];
$g = $_POST['contact'];

$que = "INSERT INTO user (name, email, password, address, gender, city, contact) VALUES ('$a', '$b', '$c', '$d', '$f', '$e', '$g')";

if ($con->query($que) === TRUE) {
    header("location:login.php"); // and redirect to login page
} else {
    echo "Error: " . $que . "<br>" . $con->error;
}

?>