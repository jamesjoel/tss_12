<?php
// print_r($_FILES);
$a = $_FILES['photo']['name'];
$b= $_FILES['photo']['tmp_name'];


move_uploaded_file($b, "demo/".$a);
?>