<?php
include("admin/db.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");


$a = $_SESSION['id'];
$que = "SELECT * FROM user WHERE id = $a";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
// print_r($data);


?>

<div class="container" style="min-height: 500px;">
	<div class="row">
		<div class="col-md-6 offset-md-3 my-4">
			<form action="update.php" method="post">
			<div class="card my-4">
				<div class="card-header">
					<h4 class="mb-0">Update Profile</h4>
					
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<div class="input-group">
							
							<input type="text" placeholder="Full Name" class="form-control" value="<?php echo $data['name']; ?>" name="name">
						</div>
					</div>
					<div class="form-group">
						<label>Username/Email</label>
						<div class="input-group">
							
							<input name="email" type="text" disabled="disabled" placeholder="Username/Email" value="<?php echo $data['email'] ?>" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="add" placeholder="Address"><?php echo $data['address'] ?></textarea>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" <?php if($data['gender']=='male') echo "checked='checked'" ?> value="male" name="gender"/> Male 
						<input type="radio" <?php if($data['gender']=='female') echo "checked='checked'" ?> value="female" name="gender"/> Female
					</div>

					<div class="form-group">
						<label>City</label>
						<select class="form-control" name="city">
							<option>Select</option>
							<option <?php if($data['city']=="Indore") echo "selected='selected'"; ?>>Indore</option>
							<option <?php if($data['city']=="Mumbai") echo "selected='selected'"; ?>>Mumbai</option>
							<option <?php if($data['city']=="Pune") echo "selected='selected'"; ?>>Pune</option>
							<option <?php if($data['city']=="Bhopal") echo "selected='selected'"; ?>>Bhopal</option>
							<option <?php if($data['city']=="Delhi") echo "selected='selected'"; ?>>Delhi</option>
						</select>
					</div>
					<div class="form-group">
						<label>Contact No</label>
						<input type="text" value="<?php echo $data['contact'];?>" name="contact" placeholder="Contact No" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-blue">Update <i class="fa fa-user" aria-hidden="true"></i></button>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>