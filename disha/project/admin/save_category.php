<?php
include("db.php");
//print_r($_POST);
//die;
$a = $_POST['name'];

 
 $que = "INSERT INTO `category` (`id`, `name`) VALUES (NULL, '$a')";

if ($con->query($que) === TRUE) {
    header("location:view_category.php");
} else {
    echo "Error: " . $que . "<br>" . $con->error;
}

/*
 if ($con->query($que) === TRUE) {
    header("location:view_category.php");
} else {
    echo "Error: " . $que . "<br>" . $con->error;
}*/

?>