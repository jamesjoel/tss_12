<?php

include("header.php")  ?>


<div class="container">
<div class="row">
<div class="col-md-6 offset-3 my-5 ">

<form action="login_save.php" method="post">
	<div class="card">
		<div class="card-header h4 text-dark">Login User</div>
		<div class="card-body">
			<div class="form-group">
				<label>User Name</label>
				<div class="input-group"><input class="form-control" type="text" name="user"  placeholder="user name"></div>
			</div>
		
    <div class="form-group">
    	<label>Password</label>
    	<div class="form-input"><input class="form-control" type="Password" name="pass" placeholder="*****"></div>
    </div>
      <div class="card-footer">
         <p class="text-danger text-center">
						<?php
						if(isset($_SESSION['mass']))
						{

							echo $_SESSION['mass'];
							session_destroy();
						}
						?>
					</p>
			<button class="btn btn-dark ">Login</button>
		</div>
	</div>
</form>
</div>
</div>
</div>
	<?php include("footer.php")  ?>





