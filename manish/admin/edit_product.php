<?php
include("db.php");



if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

include("header.php");

$a = $_GET['proid'];
$que2 = "SELECT * FROM product WHERE id = $a";
$result2 = mysqli_query($con, $que2);
$data2 = mysqli_fetch_assoc($result2);
// print_r($data2);


$que = "SELECT * FROM category";
$result = mysqli_query($con, $que);
?>

<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<form action="update_product.php" method="post" enctype="multipart/form-data">

				<input type="hidden" name="pid" value="<?php echo $a; ?>">
			<div class="card">
				<div class="card-header">
					<h3>Update Product</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Title/Name</label>
						<input type="text" placeholder="Title/Name" class="form-control" value="<?php echo $data2['name'] ?>" name="title">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" placeholder="Price" class="form-control" value="<?php echo $data2['price'] ?>" name="price">
					</div>



					<div class="form-group">
						<label>Category</label>
						<select class="form-control" name="cate">
							<option>Select</option>
							<?php
							while($data=mysqli_fetch_assoc($result))
							{ 

								if($data['name']==$data2["category"])
								{
									?>
									<option selected="selected"><?php echo $data['name'];?></option>
									<?php 
								}
								else
								{ 
									?>
									<option><?php echo $data['name'];?></option>
									<?php 
								}
							}
							?>
						</select>
					</div>

					<div class="form-group">
						<label>Discount</label>
						<input type="text" name="discount" placeholder="Discount" value="<?php echo $data2['discount'];?>" class="form-control">
					</div>
					<!-- <div class="form-group">
						<label>Image</label>
						<input type="file" name="image"  class="form-control">
					</div> -->
					<div class="form-group">
						<label>Detail</label>
						<textarea class="form-control" name="detail"><?php echo $data2['detail']; ?></textarea>
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