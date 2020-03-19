<?php
include("header.php");

if( !isset( $_SESSION['is_user_logged_in']) )
{

	header("location:login.php");
}

$a = $_SESSION['id'];
 $que = " SELECT * FROM employee WHERE id= $a";
 $result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);

?>
<div class="container">
	<h3 > <span class="text-danger">My Profile </span>   <?php echo $_SESSION['name'];  ?></h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<table class="table table-hover table-dark table-bordered">
				<tr>
					<td>Full Name</td>
					<td><?php echo $data['name']; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td> <?php echo $data['email']  ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td> <?php  echo $data['address']; ?></td>
				</tr>
		</div>
	</div>
</div>