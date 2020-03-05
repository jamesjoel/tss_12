<?php
include('db.php');

if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

include("header.php");
$que = "SELECT * FROM product";
$result = mysqli_query($con, $que);
?>
<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
			<h2>View All Product</h2>
			<table class="table table-bordered table-dark table-hover">
				<tr>
					<th>S.No.</th>
					<th>Name</th>
					<th>Category</th>
					<th>Price</th>
					<th>Discount</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				$n=1;
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $data['name']; ?></td>
						<td><?php echo $data['category']; ?></td>
						<td><?php echo $data['price']; ?></td>
						<td><?php echo $data['discount']; ?></td>
						<td><a href="edit_pro.php?proid=<?php echo $data['id'] ?>" class="btn btn-sm btn-info">Edit</a></td>
						<td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
					</tr>	
				<?php

				$n++;
				}
				?>

			</table>
		</div>
	</div>
</div>
</body>
</html>