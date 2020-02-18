$(document).ready(function(){
	$("#submit").click(function(){

		var a= $("#full_name").val();
		var b= $("#email").val();
		var c = $("#pass").val();
		var d = $("#re_pass").val();
		var e = $("#add").val();
		var f = $("#city").val();
		var g = $("#contact").val();

		var x = true; 

		if(a=="")
		{
			x =false;
			$("#full_name_msg").html("insert your full_name");
		}
		else
		{
			$("#full_name_msg").html("");
		}

		if(b=="")
		{
			x=false;
			$("#email_msg").html("insert your email");
		}
		else
		{
			$("#email_msg").html("");
		}

		if(c=="")
		{
			x=false;
			$("#pass_msg").html("insert your password");
		}
		else
		{
			$("#pass_msg").html("");
		}

		if(d=="")
		{
			x=false;
			$("#re_pass_msg").html("insert your re_pass");
		}
		else
		{
			$("#re_pass_msg").html("");
		}

		if(e=="")
		{
			x=false;
			$("#add_msg").html("insert your add");
		}
		else
		{
			$("#add_msg").html("");
		}

		if(f=="Select")
		{
			x=false;
			$("#city_msg").html("select your city");
		}
		else
		{
			$("#city_msg").html("");
		}

		if(g=="")
		{
			x=false;
			$("#contact_msg").html("insert your contact");
		}
		else
		{
			$("#contact_msg").html("");
		}

		return x;

	});
});	
