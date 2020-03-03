<?php
include('db.php');

if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

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
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				$n=1;
				while($data=mysqli_fetch_assoc($result))
				{ ?>
				
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $data['name'];?></td>
						<td><a class="btn btn-sm btn-info" href="edit_cate.php?cateid=<?php echo $data['id'] ?>">Edit</a></td>
						<td><a class="btn btn-sm btn-danger" href="delete_cate.php?cateid=<?php echo $data['id'] ?>">Delete</a></td>
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