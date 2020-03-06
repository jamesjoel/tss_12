<?php

include("admin/db.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");

$a = $_SESSION['id'];
$que = "SELECT * FROM user11 WHERE id = $a";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
// print_r($data);



?>

<div class="container">
	<h3>My Profile</h3>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-hover table-dark table-bordered">
				<tr>
					<td>Full Name</td>
					<td><?php echo $data['name']; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $data['email']; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $data['address']; ?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $data['city']; ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $data['gender']; ?></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><?php echo $data['contact']; ?></td>
				</tr>
			</table>
			<br />
			<a href="edit_profile.php" class="btn btn-sm btn-warning">Edit Profile</a>
			<a href="change_password.php" class="btn btn-sm btn-warning">Change Password</a>
		</div>
	</div>
</div>
</div>
