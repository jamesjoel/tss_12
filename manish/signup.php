<?php

include("admin/db.php");
include("header.php");
?>
<script type="text/javascript">
	$(document).ready(function(){

$("#submit_btn").click(function(){

  var a=$("#full_name").val();
  var b=$("#email").val();
  var c=$("#pass").val();
  var d=$("#re_pass").val();
  var e=$("#add").val();
  var f=$("#city").val();
  var g=$("#contact").val();

  var x=$("#male").is(":checked");
  var y=$("#female").is(":checked");

  if (a=="")
   {
  	$("#full_name_msg").html("Insert Youer Full Name");
  }
  else
  {
  	$("#full_name_msg").html("");
  }
  if (b=="")
   {
  	$("#email_msg").html("Insert Youer Email");
  }
  else
  {
  	$("#email_msg").html("");
  }
  if (c=="")
   {
  	$("#pass_msg").html("Insert Youer Password");
  }
  else
  {
  	$("#pass_msg").html("");
  }
  if (d=="")
   {
  	$("#re_pass_msg").html("Insert Youer Re-Password");
  }
  else
  {
  	$("#re_pass_msg").html("");

if (c !=d) 
 {
 $("#re_pass_msg").html(" Insert Correct Re-Password");
}
else
{
	$("#re_pass_msg").html("");
}



  }
  if (e=="")
   {
  	$("#add_msg").html("Insert Youer Address");
  }
  else
  {
  	$("#add_msg").html("");
  }
  if (f=="Select")
   {
  	$("#city_msg").html("Insert Youer City");
  }
  else
  {
  	$("#city_msg").html("");
  }
  if (g=="")
   {
  	$("#contact_msg").html("Insert Youer Contact");
  }
  else
  {
  	$("#contact_msg").html("");

if (isNaN(g)==true)
 {
	$("#contact_msg").html("Insert Number Only");
}
else
{
	$("#contact_msg").html("");

  if (g.length !=10) 
  {
$("#contact_msg").html("Contact Number Should Be 10-Digit");
  }
else
{
	$("#contact_msg").html("");
}
}

  }

  if(x==false && y==false)
			{
				$("#gender_msg").html("Select Your Gender");
			}
			else
			{
				$("#gender_msg").html("");

			}


return false;
});	

});
</script>
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
							
							<input type="text" id="full_name" name="name" placeholder="Full Name" class="form-control">
						</div>

						<small class="text-danger" id="full_name_msg"></small>
					</div>
					<div class="form-group">
						<label>Username/Email</label>
						<div class="input-group">
							
							<input type="text"  id="email" name="email" placeholder="Username/Email" class="form-control">
						</div>
						<small class="text-danger" id="email_msg"></small>
					</div>
					<div class="form-group">
						<label>Password</label>
						<div class="input-group">
							
							<input type="password" id="pass" name="pass" placeholder="Password" class="form-control">
						</div>
						<small class="text-danger" id="pass_msg"></small>
					</div>
					<div class="form-group">
						<label>Re-Password</label>
						<div class="input-group">
							
							<input type="password"  id="re_pass" name="re-pass"  placeholder="Password" class="form-control">
						</div>
						<small class="text-danger" id="re_pass_msg"></small>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" id="add" name="add" placeholder="Address"></textarea>
						</div>
						<small class="text-danger" id="add_msg"></small>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" name="gender" id="male" value="Male" /> Male 
						<input type="radio" name="gender" id="female" value="Female" /> Female
					</div>
					<small class="text-danger" id="gender_msg"></small>

					<div class="form-group">
						<label>City</label>
						<select class="form-control" id="city" name="city">
							<option>Select</option>
							<option>Indore</option>
							<option>Mumbai</option>
							<option>Pune</option>
							<option>Bhopal</option>
							<option>Delhi</option>
						</select>
					</div>
					<small class="text-danger" id="city_msg"></small>
					<div class="form-group">
						<label>Contact No</label>
						<input type="text" name="contact" id="contact" placeholder="Contact No" class="form-control">
					</div>
					<small class="text-danger" id="contact_msg"></small>
				</div>
				<div class="card-footer bg-danger">
					<button type="submit" id="submit_btn" class="btn btn-blue">
						Signup <i class="fa fa-user" aria-hidden="true"></i></button>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>

