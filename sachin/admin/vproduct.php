<?php

include("header.php");
include("db.php");

$que="SELECT * FROM product";
$result=mysqli_query($con, $que);

?>

<div class="container mt-4">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h2>View All Product</h2>
			<table class="table table-bordered table-dark table-hover table-striped">
				<tr>
					<th>S.No.</th>
					<th>Product Name</th>
					<th>price</th>
					<th>Cetegory</th>
					<th>Discount</th>
					<th>Detail</th>
				</tr>
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $data['id'] ?></td>
						<td><?php echo $data['name'];?></td>
						<td><?php echo $data['price'];?></td>
						<td><?php echo $data['category'];?></td>
						<td><?php echo $data['discount'];?></td>
						<td><?php echo $data['detail'];?></td>
					</tr>					
				<?php
				}
				?>



			</table>
		</div>
	</div>
</div>
</body>
</html>