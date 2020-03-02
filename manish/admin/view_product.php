<?php
include("db.php");
include("header.php");

$que="SELECT * FROM product";
$result=mysqli_query($con, $que);

?>
<div class="container mt-4">
	<div class="row">
		<div class="col-md-8 offset-md-2 col-10 offset-1">
			<h2>View All product</h2>
			<table class="table table-bordered table-warning table-hover table-striped ">
				<tr>
					<th>S.No.</th>
					<th>Name</th>
					<th>price</th>
					<th>category</th>
					<th>discount</th>
					
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
						
						

					</tr>					
				<?php
				}?>



			</table>
		</div>
	</div>
</div>

</body>
</html>