<?php
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
						<label>category name</label>
<input type="text" placeholder="category name" class="form control" name="name">
</div>
</div>
<div class="card-footer">
	<input type="submit" value="add category" class="btn btn-success">
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>