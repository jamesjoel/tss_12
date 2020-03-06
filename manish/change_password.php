<?php
include("admin/db.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");


?>

<div class="container" style="min-height: 500px;">
	<div class="row">
		<div class="col-md-6 offset-md-3 my-4">
			<form action="update_password.php" method="post">
			<div class="card my-4">
				<div class="card-header">
					<h4 class="mb-0">Update Your Password</h4>
					
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Current Password</label>
						<input type="password" class="form-control" name="c_pass"/>
					</div>					
					<div class="form-group">
						<label>New Password</label>
						<input type="password" class="form-control" name="n_pass"/>
					</div>					
					<div class="form-group">
						<label>Confirm New Password</label>
						<input type="password" class="form-control" name="cn_pass"/>
					</div>					

					<p class="text-danger">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
					</p>
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