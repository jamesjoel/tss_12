<?php
include("header.php")
?>
<div class="saperator"></div>

            <div class="container" style="min-height: 500px;">
	<div class="row">
		<div class="col-md-6 offset-md-3 my-4">
			<form action="data.php" method="post">
			<div class="card my-4">
				<div class="card-header bg-danger">
					<h4 class="mb-0">User Registration</h4>
					<small>For Already signup User <a href="login.php">Login</a> Here</small>
				</div>
				<form action="data.php" method="post">
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
							
							<input type="password" name="pass" placeholder="Password" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Re-Password</label>
						<div class="input-group">
							
							<input type="password" name="re-pass"  placeholder="Password" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="add" placeholder="Address"></textarea>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" name="gender" value="Male" /> Male 
						<input type="radio" name="gender" value="Female" /> Female
					</div>

					<div class="form-group">
						<label>City</label>
						<select class="form-control" name="city">
							<option>Select</option>
							<option>Indore</option>
							<option>Mumbai</option>
							<option>Pune</option>
							<option>Bhopal</option>
							<option>Delhi</option>
						</select>
					</div>
					<div class="form-group">
						<label>Contact No</label>
						<input type="text" name="contact" placeholder="Contact No" class="form-control">
					</div>
				</div>
				<div class="card-footer bg-danger">
					<button type="submit" class="btn btn-blue">
						Signup <i class="fa fa-user" aria-hidden="true"></i></button>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>

