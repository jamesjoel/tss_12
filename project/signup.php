<?php
include("admin/db.php");
include("header.php");
?>
<script type="text/javascript">
	$(document).ready(function(){

		$("#submit-btn").click(function(){

			var a = $("#full_name").val();
			var b = $("#email").val();
			var c = $("#pass").val();
			var d = $("#re_pass").val();
			var e = $("#add").val();
			var f = $("#city").val();
			var g = $("#contact").val();

			var x = $("#male").is(":checked");
			var y = $("#female").is(":checked");


			var check = true;

			if(a=="")
			{
				check = false;
				$("#full_name_msg").html("Insert Your Full Name");
				$("#full_name").addClass("form-error");
			}
			else
			{
				$("#full_name_msg").html("");
				$("#full_name").removeClass("form-error");

			}
			if(b=="")
			{
				check = false;
				$("#email_msg").html("Insert Your Email/Username");
				$("#email").addClass("form-error");
			}
			else
			{
				$("#email_msg").html("");
				var reg = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
				if(reg.test(b)==false)
				{
					check = false;
					$("#email_msg").html("Email Id is Not Correct");
				}
				else
				{
					$("#email_msg").html("");
					$("#email").removeClass("form-error");
				}




			}
			if(c=="")
			{
				check = false;
				$("#pass_msg").html("Insert Your Password");
				$("#pass").addClass("form-error");
			}
			else
			{
				$("#pass_msg").html("");
				$("#pass").removeClass("form-error");
			}
			if(d=="")
			{
				check = false;
				$("#re_pass_msg").html("Insert Your Re-Password");
				$("#re_pass").addClass("form-error");
			}
			else
			{
				$("#re_pass_msg").html("");

				if(c != d)
				{
					check = false;
					$("#re_pass_msg").html("Insert Correct Re-Password");
				}
				else
				{
					$("#re_pass_msg").html("");
					$("#re_pass").removeClass("form-error");

				}

			}
			if(e=="")
			{
				check = false;
				$("#add_msg").html("Insert Your Address");
				$("#add").addClass("form-error");
			}
			else
			{
				$("#add_msg").html("");
				$("#add").removeClass("form-error");

			}
			if(f=="Select")
			{
				check = false;
				$("#city_msg").html("Select Your City");
				$("#city").addClass("form-error");
			}
			else
			{
				$("#city_msg").html("");
				$("#city").removeClass("form-error");

			}
			if(g=="")
			{
				check = false;
				$("#contact_msg").html("Insert Your Contact Number");
				$("#contact").addClass("form-error");
			}
			else
			{
				$("#contact_msg").html("");
				if(isNaN(g)==true)
				{
					check = false;
					$("#contact_msg").html("Insert Numbers Only");
				}
				else
				{
					$("#contact_msg").html("");
					$("#contact").removeClass("form-error");
					if(g.length != 10)
					{
						check = false;
						$("#contact_msg").html("Contact Number Should Be 10 Digit");
						$("#contact").addClass("form-error");
					}
					else
					{

						$("#contact_msg").html("");
						$("#contact").removeClass("form-error");
					}


				}


			}


			if(x==false && y==false)
			{
				check = false;
				$("#gender_msg").html("Select Your Gender");
			}
			else
			{
				$("#gender_msg").html("");

			}

<<<<<<< HEAD
return false;
=======



			return check;
>>>>>>> 71bf0d9af9ca4c859f4662fce6867b7d46b3c226zz

		});
});

</script>



<div class="container" style="min-height: 500px;">
	<div class="row">
		<div class="col-md-6 offset-md-3 my-4">
			<form action="save.php" method="post">
			<div class="card my-4">
				<div class="card-header">
					<h4 class="mb-0">User Registration</h4>
					<small>For Already signup User <a href="login.html">Login</a> Here</small>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<div class="input-group">
							
							<input type="text" id="full_name" placeholder="Full Name" class="form-control" name="name" />

							
						</div>
						<small class="text-danger" id="full_name_msg"></small>
					</div>
					<div class="form-group">
						<label>Username/Email</label>
						<div class="input-group">
							
							<input name="email" id="email" type="text" placeholder="Username/Email" class="form-control">
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
							
							<input type="password" id="re_pass" name="re_pass" placeholder="Password" class="form-control">
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
						<input type="radio" id="male" value="male" name="gender"/> Male 
						<input type="radio" id="female" value="female" name="gender"/> Female
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
						<input type="text" id="contact" name="contact" placeholder="Contact No" class="form-control">
					</div>
					<small class="text-danger" id="contact_msg"></small>
				</div>
				<div class="card-footer">
					<button type="submit" id="submit-btn" class="btn btn-blue">Signup <i class="fa fa-user" aria-hidden="true"></i></button>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>