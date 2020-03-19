<?php 

include("db.php");

$u=$_POST['user'];
$p=$_POST['pass'];


$que= " SELECT * FROM employee WHERE email='$u'";
$result= mysqli_query($con, $que);

if (mysqli_num_rows($result)==1)
 {
 	$data= mysqli_fetch_assoc($result);

 	if ($data["password"]==sha1($p))
 	 {
 	 	$_SESSION['id']=$data['id'];
 	 	$_SESSION['name']=$data['name'];
 	 	$_SESSION["is_user_logged_in"]=true;
 	 	header("location:profile.php");
 		
 	}
 	else
 	{
 		$_SESSION['mass']="  This  Password is Incorrect ";
 		header("location:login.php");
}	
}
else
{
	$_SESSION['mass']="  This Username and Password is Incorrect ";
	header("location:login.php");
}
?>