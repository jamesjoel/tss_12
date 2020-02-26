<?php
include("db.php");
include("header.php");
?>

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
					<input type="submit" value="Login" class="btn btn-warning">
				</div>
			</div>
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
				<span style="background-color : blue; width: 50px; text-align: center; margin-left: 150px; padding: 5px; color: #FFF;"><?php echo $d; ?>%</span>
				<img src="images/7.jpg" class="card-img-top">

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