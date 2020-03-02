<?php
include("admin\db.php");
include("header.php");
$que = "SELECT * FROM product";
$result = mysqli_query($con, $que);
?>
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
				<span style="background-color :orange; width: 50px; text-align: center; margin-left: 155px; padding: 5px; color: #FFF;"><?php echo $d; ?>%</span>
				<img src="admin/product_image/<?php echo $data['image'] ?>" height="200" width="150" class="card-img-top">

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


	 <section class="services-section spad mt-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-3">
					<div class="section-title">
						<h2 align="center">Discover Our Services</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="service-item">
						<h4>Terminology</h4>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-item">
						<h4>Customers Service</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<h4>Product Sitting</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<h4>languages</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<h4> Select Payment types</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="service-item">
						<h4>Bar & Drink</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
			




<?php
include("footer.php")
?>
