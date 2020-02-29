<?php
include ("db.php");


//print_r($_POST);
$a =$_POST['title'];
$b =$_POST['price'];
$c =$_POST['cate'];
$d =$_POST['discount'];
$e =$_POST['detail'];
$name=$_FILES['image']['name'];
$tmpname=$_FILES['image']['tmpname'];
$size=$_FILES['image']['size'];
$type=$_FILES['image']['type'];

if ($type =="image/jpg"|| $type == "image/jpeg" || $type == "image/png" || $type == "image/gif" )
{
	move_uploaded_file($tmpname,"product_image/".$name);
	$que="INSERT INTO product(name,price,ctegory,discount,detail,image)VALUES('$a','$b','$c','$d','$e',$name)";
	mysqli_query($con,$que);
	header ("loation:view_product.php");
}
else
{
	echo 'this is not a image';
}

?>