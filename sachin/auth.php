<?php

// print_r($_POST);
include("admin/db.php");

$u = $_POST['username'];
$p = $_POST['pass'];
$que = "SELECT * FROM user1 WHERE email = '$u'";
$result = mysqli_query($con, $que);



if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);

	if($data['password']==sha1($p))
	{
	
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['name'];
		$_SESSION['is_user_logged_in']=true;

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