<?php
include('db.php');

if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

// print_r($_GET);
$a = $_GET['cateid'];

$que = "SELECT * FROM category WHERE id = $a";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
// print_r($data);

include("header.php");
?>

<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="update_cate.php" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Update Category</h3>
				</div>
				<div class="card-body">
					<input type="hidden" name="cid" value="<?php echo $a ?>">
					<div class="form-group">
						<label>Category Name</label>
						<input type="text" placeholder="Category Name" value="<?php echo $data['category name'] ?>" class="form-control" name="name">
					</div>
					



				</div>
				<div class="card-footer">
					<input type="submit" value="Update" class="btn btn-success">
				</div>
			</div>
				</form>
		</div>
	</div>
</div>
</body>
</html>