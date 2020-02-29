<?php
include("admin/db.php");
include("header.php");
?>

<div class="container" style="min-height: 500px;">
	<div class="row">
		<div class="col-md-6 offset-md-3 my-4">
			<form action="auth.php" method="post">
			<div class="card my-4">
				<div class="card-header">
					<h4 class="mb-0">User Login</h4>
					<small>For New User <a href="signup.html">Signup</a> Here</small>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username/Email</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">@</span>
							</div>
							<input name="username" type="text" placeholder="Username/Email" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Password</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
							</div>
							<input name="pass" type="password" placeholder="Password" class="form-control">
						</div>
					</div>
				</div>
				<div class="card-footer">

					<p class="text-danger text-center">
						<?php
						if(isset($_SESSION['msg']))
						{

							echo $_SESSION['msg'];
							session_destroy();
						}
						?>
					</p>

					<button type="submit" class="btn btn-blue">Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>