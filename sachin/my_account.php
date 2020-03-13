<?php

include("admin/db.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");


$a = $_SESSION['id'];
$que = "SELECT * FROM user1 WHERE id = $a";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
?>
<div class=" container bg-dark">.</div>
<div class="container">
	<h2><p align="center">USER PROFILE</p></h2>
	<div class="row">
		<div class="col-md-9 offset-md-2">
			<table class="table-hover table-dark table-bordered" width="600" height="200">
				
				<tr>
					<td>full Name</td>
					<td><?php echo $data['name'];?></td>
				</tr>
				<tr>
					<td>email</td>
					<td><?php echo $data['email'];?></td>
				</tr>
				<tr>
					<td>addres</td>
					<td><?php echo $data['address'];?></td>
				</tr>
				<tr>
					<td>city</td>
					<td><?php echo $data['city'];?></td>
				</tr>
				<tr>
					<td>gendre</td>
					<td><?php echo $data['gender'];?></td>
				</tr>
				<tr>
					<td>contect</td>
					<td><?php echo $data['contact'];?></td>
				</tr>
			</table>
		
		<a href="edit_profile.php" class="btn btn-sm btn-warning">Edit Profile</a>
			<a href="change_password.php" class="btn btn-sm btn-warning">Change Password</a>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>