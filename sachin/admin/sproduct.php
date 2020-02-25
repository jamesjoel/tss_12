<?php
include("db.php");

//print_r($_POST);
$a = $_POST['name'];
$b = $_POST['price'];
$c = $_POST['category'];
$d = $_POST['discount'];
$e = $_POST['detail'];
$name = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp-name'];
$size = $_FILES['image']['size'];
$type = $_FILES['image']['type'];
if($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/gif")
{
 move_uploaded_file($tmpname,"product-image/".$name)
$que = "INSERT INTO product (name, price, category, discount, detail, image) VALUES ('$a', '$b', '$c', '$d', '$e','$name')";

mysqli_query($con, $que);

header("location:vproduct.php");
}
else
{
	echo "this file type is not allow pls choose the correct type"
}

?>