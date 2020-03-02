<?php 
include("header.php");
include("admin/db.php");
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3 col-8 col-offset-2 bg-danger">
			<form action="auth.php" method="post">
			<div class="card my-5 mx-5">
				<div class="card-header"><h4 class="text-center">Member Login</h></div>
				<div class="card-body">
					<div class="form-group">
						<input type="text" name="Username" placeholder="Username"  class="form-control radi">
					</div>
					<div class="form-group">
						<input  type="password" name="pass" placeholder="password"  class="form-control radi">
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
					<button class="btn btn-primary btn-primary btn-block hhvv">Login</button>
					<h6 class="text-center">Forget password?</h6>
				</div>

			</div>
		</form>
		</div>
	</div>
</div>

