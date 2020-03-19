
<?php
include("db.php");



$a= $_POST['title'];
$b= $_POST['detail'];
$name = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];
$type = $_FILES['image']['type'];


move_uploaded_file($tmpname,"news_image/".$name);

$que="INSERT INTO news( title,  detail , image) VALUES('$a','$b','$name') ";

mysqli_query($con,$que);
header("location:index.php");


?>