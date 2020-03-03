<?php
include("db.php");
include("header.php");

$que="SELECT * FROM category";
$result=mysqli_query($con, $que);

?>
<div class="container mt-4">
	<div class="row">
		<div class="col-md-8 offset-md-2 col-10 offset-1">
			<h2>View All Category</h2>
			<table class="table table-bordered table-warning table-hover table-striped ">
				<tr>
					<th>S.No.</th>
					<th>Category Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $data['id'] ?></td>
						<td><?php echo $data['name'];?></td>
						<td><a class="btn btn-sm btn-light" href="edit_cate.php?cateid=<?php echo $data['id'] ?>">Edit</a></td>
						<td><a class="btn btn-sm btn-light" href="delete_cete.php?cateid=<?php echo $data['id'] ?>">Delete</a></td>
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