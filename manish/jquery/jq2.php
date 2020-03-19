<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){

   $("#a").click(function(){

   var a=	$("input").val();
   $("p").html(a);

   alert(a);


   });

});
</script>

</head>
<body><button id="a">ok</button>
	<br><br>
	<input type="text"  id="x" name=""> <br><br>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</body>
</html>