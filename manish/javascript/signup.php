<?php
include("header.php")  ?>


<div class="container" style="min-height: 500px;">
	<div class="row">
		<div class="col-md-6 offset-md-3 my-4">
			<form action="signup_save.php" method="post">
			<div class="card my-4">
				<div class="card-header bg-dark">
					<h4 class="mb-0 text-light">User Registration</h4>
					<small class="text-light">For Already signup User <a href="login.php">Login</a> Here</small>
				</div>
				
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<div class="input-group">
							
							<input type="text" name="name" placeholder="Full Name" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Username/Email</label>
						<div class="input-group">
							
							<input type="text" name="email" placeholder="Username/Email" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Password</label>
						<div class="input-group">
					<input type="password" name="pass" placeholder="********" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Address</label>
						<div class="input-group"><textarea name="add" placeholder="Address" class="form-control"></textarea></div>
					</div>

					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-dark "> submit</button>
						</div>
					</div>
					
		</form>
		</div>
	</div>
</div>
<?php  include("footer.php") ?>

