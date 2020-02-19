<?php
include("db.php");
include("header.php");

$que="SELECT * FROM category";
$result=mysqli_query($con, $que);

?>

<div class="container mt-4">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h2>View All Category</h2>
			<table class="table table-bordered table-dark table-hover">
				<tr>
					<th>S.No.</th>
					<th>Category Name</th>
				</tr>
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $data['id'] ?></td>
						<td><?php echo $data['name'];?></td>
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