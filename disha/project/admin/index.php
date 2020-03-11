<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<nav class="navbar bg-gray navbar-expand-sm navbar-dark">

	<a href="#" class="navbar-brand">Administrator</a>
</nav>

<div class="container mt-4">
	<div class="row mt-4">
		<div class="col-md-4 offset-md-4">
			<form action="auth.php" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Admin Login</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" placeholder="Username" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" placeholder="Password" class="form-control" name="pass">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-success">
				</div>
				<p class="text-danger text-center">
					<?php
					if(isset($_SESSION['msg']))
					{
						echo $_SESSION['msg'];
						session_destroy();
					}
					?>
				</p>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>