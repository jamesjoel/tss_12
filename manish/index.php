<?php

include("admin/db.php");
include("header.php");

$que = "SELECT * FROM product";
$result = mysqli_query($con, $que);
?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-6 col-sm-6">
			<div class="card my-3 ml-0">
				<img src="images/banner-1.jpg" class="image-fluid" alt="responsive imagee ">

				<div class="card-body ">
					<div class="inner-text">
                            <h4>Men’s</h4>
                        </div>
				</div>
				
			</div>
		</div>
		<div class="col-md-4 col-6 col-sm-6">
			<div class="card my-3 ml-0">
				<img src="images/banner-2.jpg" class="image-fluid" alt="responsive imagee ">

				<div class="card-body ">
					<div class="inner-text">
                            <h4>Women’s</h4>
                        </div>
				</div>
				
			</div>
		</div>
		<div class="col-md-4 col-6 col-sm-6">
			<div class="card my-3 ml-0">
				<img src="images/banner-3.jpg" class="image-fluid" alt="responsive imagee ">

				<div class="card-body ">
					<div class="inner-text">
                            <h4 class="">Kid’s</h4>
                        </div>
                    </div>
				
			</div>
		</div>
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


<?php
include("footer.php")
?>
