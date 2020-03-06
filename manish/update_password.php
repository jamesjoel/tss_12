<?php
include("admin/db.php");
// print_r($_POST);
$a = $_POST['c_pass'];
$b = $_POST['n_pass'];
$c = $_POST['cn_pass'];

$x = $_SESSION['id'];

$que = "SELECT * FROM user11 WHERE id = $x";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);

if($data['password']==sha1($a))
{
	if($b == $c)
	{
		$b = sha1($b);
		$que = "UPDATE user SET password = '$b' WHERE id = $x";
		mysqli_query($con, $que);
		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg']="New Password and Confirm New is Incorrect";
		header("location:change_password.php");		
	}
}
else
{
	$_SESSION['msg']="Current Password is Incorrect";
	header("location:change_password.php");
}

?>