<?php
include("header.php");
?>
<div class="container mt-4"> 
	<div class="row mt-4">
		<div class="col-md-4 offset-md-4">
			<div class="card">
				<div class="card header">
					<h3>Admin Login</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>User Name</label>
						<input type="text" placeholder="User Name" name="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" placeholder="Password" name="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-success">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>