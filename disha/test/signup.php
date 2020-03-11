<?php
include("db.php");
include('header.php');
?>
<div class="container mt-4" style="min-height: 600px;">
	<h2 class="text-center">
		User Registration
	</h2>
	<div class="col-md-4 offset-md-4">

		<form action="save.php" method="post">

		<div class="card">
			<div class="card-header">
				<h4>Signup</h4>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Full Name</label>
					<input name="name" type="text" class="form-control">
				</div>

				<div class="form-group">
					<label>Username</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Re-Password</label>
					<input type="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea class="form-control" name="address"></textarea>
				</div>
			</div>
			<div class="card-footer">
				<input type="submit" value="Login" class="btn btn-success">
			</div>
		</div>
	</form>
	</div>
</div>



</body>
</html>