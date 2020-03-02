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
<nav class="navbar bg-danger navbar-expand-sm navbar-dark">
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
<?php
$que = "SELECT * FROM product";
$result = mysqli_query($con, $que);
?>


<div class="jumbotron">

<div class="container">
	<div class="row">

		<?php
		while($data=mysqli_fetch_assoc($result))
		{
			$p = $data['price'];
			$d = $data['discount'];
			$x = $p*$d/100;
			$p = $p-$x;
		?>

		<div class="col-md-3 col-6 col-sm-6">
			<div class="card my-3">
				<span style="background-color :green; width: 50px; text-align: center; margin-left: 150px; padding: 5px; color: #FFF;"><?php echo $d; ?>%</span>
				<img src="product_image/<?php echo $data['image'] ?>" height="200" width="150" class="card-img-top">

				<div class="card-body">
					<p class="font-weight-bold m-0 p-0"><?php echo $data['name'];?></p>
					<small>(<del>$ <?php echo $data['price'];?></del>)</small>
					<small class="font-weight-bold">$ <?php echo $p;?>.00</small>
				</div>
				<div class="card-footer text-center">
					<button class="btn btn-sm btn-blue">Buy</button>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		
	</div>
</div>


</body>
</html>