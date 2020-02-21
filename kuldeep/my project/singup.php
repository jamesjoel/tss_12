<?php
include("header.php");
?>
				<div class="col-md-5 offset-2">
					<form action="save.php" method="post">
					<div class="card mt-4">
						<div class="card-header">
							<h4>singup form</h4>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>fullname</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-user"></i></span>
									</div>
									<input type="text" name="full_name" placeholder="fullname" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>username/email</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-user"></i></span>
									</div>
									<input type="text" name="email" placeholder="username/email" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>password</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-lock"></i></span>
									</div>
									<input type="text" name="pass" placeholder="password" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" name="add" placeholder="Address"></textarea>
							</div>
							<div class="form-group">
								<label>contact</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-phone"></i></span>
									</div>
									<input type="text" name="contact" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>city</label>
								<select class="form-control" name="city">
									<option>select</option>
									<option>indore</option>
									<option>bhopal</option>
									<option>pune</option>
								</select>
							</div>
						</div>
						<div class="card-footer">
							<button class="btn btn-primary" type="submit">singup</button>
						</div>
					</div>
					</form>
				</div>
<?php
include("footer.php");
?>


	
