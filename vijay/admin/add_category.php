<?php
include('db.php');

if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}


include("header.php");
?>

<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">
		  <form action="save_category.php" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Add New Category</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Category Name</label>
						<input type="text" placeholder="Category Name" class="form-control" name="name">
					</div>
					



				</div>
				<div class="card-footer">
					<input type="submit" value="Add Category" class="btn btn-success">
				</div>
			</div>
		  </form>
		</div>
	</div>
</div>
</body>
</html>