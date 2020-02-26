<?php

// print_r($_POST);
include("admin/db.php");
session_start();
$u = $_POST['username'];
$p = $_POST['pass'];
$que = "SELECT * FROM user WHERE email = '$u'";
$result = mysqli_query($con, $que);

// echo mysqli_num_rows($result);

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	// echo $data['password'];
	if($data['password']==$p)
	{
		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg'] = "Invalid Password";
		header("location:login.php");
	}
}
else
{
	$_SESSION['msg'] = "Invalid Username and Password";
	header("location:login.php");
}

?>