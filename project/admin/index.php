<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<nav class="navbar bg-dark navbar-expand-sm navbar-dark">
	<a href="#" class="navbar-brand">Administrator</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="menu" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a href="#" class="nav-link">Dashboard</a>
			</li>
			<li cass="nav-item">
				<a href="#" class="nav-link">Add Product</a>
			</li>
			<li cass="nav-item">
				<a href="#" class="nav-link">View Product</a>
			</li>
			<li cass="nav-item">
				<a href="#" class="nav-link">Add Category</a>
			</li>
			<li cass="nav-item">
				<a href="#" class="nav-link">View Category</a>
			</li>
			<li cass="nav-item">
				<a href="#" class="nav-link">Logout</a>
			</li>
		</ul>
	</div>

</nav>

<div class="container mt-4">
	<div class="row mt-4">
		<div class="col-md-4 offset-md-4">
			<div class="card">
				<div class="card-header">
					<h3>Admin Login</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" placeholder="Username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" placeholder="Password" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-success">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>