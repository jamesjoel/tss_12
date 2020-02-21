<?php
include("header.php");
?>

<div class="jumbotron">
	<h1 class="text-center">DEMO PAGE</h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h3>This is Demo Page</h3>
			<form action="demo_save.php" method="post">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input name="pwd" type="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea name="add" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>City</label>
					<select name="city" class="form-control">
						<option>Select</option>
						<option>Indore</option>
						<option>Bhopal</option>
						<option>Mumbai</option>
						
					</select>
				</div>
				<div class="form-group">
					<label>Gender</label>
					Male <input type="radio" value="male" name='gender'>
					Female <input type="radio" value="female" name='gender'>
				</div>
				<div class="form-group">
					
					<input type="submit" value="Add" class="btn btn-primary">
				</div>
			</form>



		</div>	
	</div>
</div>
<?php
include("footer.php");
?>