 <?php
 include("admin/db.php");
include("header.php");
$query = "SELECT * FROM product";
$result = mysqli_query($con, $query);
?>


<div class="jumbotron">
	<h1 class="text-center">new product</h1>
</div>
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
				<span style="background-color : red; width: 50px; text-align: center; margin-left: 150px; padding: 5px; color: #FFF;"><?php echo $d; ?>%</span>
				<img src="admin/product_image/111.jpeg<?php echo $data['image'] ?>" height="200" width="150" class="card-img-top">

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

<?php
include("footer.php");

?>