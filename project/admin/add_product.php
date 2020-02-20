<?php
include("db.php");
include("header.php");
$que = "SELECT * FROM category";
$result = mysqli_query($con, $que);
?>

<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">
				<form action="save_product.php" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Add New Product</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Title/Name</label>
						<input type="text" placeholder="Title/Name" class="form-control" name="title">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" placeholder="Price" class="form-control" name="price">
					</div>



					<div class="form-group">
						<label>Category</label>
						<select class="form-control" name="cate">
							<option>Select</option>
							<?php
							while($data=mysqli_fetch_assoc($result))
							{ ?>
								<option><?php echo $data['name'];?></option>
							<?php
							}
							?>
						</select>
					</div>

					<div class="form-group">
						<label>Discount</label>
						<input type="text" name="discount" placeholder="Discount" class="form-control">
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="file"  class="form-control">
					</div>
					<div class="form-group">
						<label>Detail</label>
						<textarea class="form-control" name="detail"></textarea>
					</div>




				</div>
				<div class="card-footer">
					<input type="submit" value="Add Product" class="btn btn-success">
				</div>
			</div>
				</form>
		</div>
	</div>
</div>
</body>
</html>