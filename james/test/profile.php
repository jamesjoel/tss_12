<?php
include("db.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}



include("header.php");

$a = $_SESSION['id'];

$que = "SELECT * FROM test WHERE id = $a";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
?>
<div class="container mt-4" style="min-height: 600px;">
	<h2 class="text-center">
		Welcome : <?php echo $_SESSION['name'] ?>
	</h2>
	<div class="col-md-6 offset-md-3">
		<table class="table table-dark table-hover table-bordered">
			<tr>
				<td>Full Name</td>
				<td><?php echo $data['name'] ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $data['email'] ?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $data['address'] ?></td>
			</tr>
			
		</table>
	</div>
</div>
</body>
</html>