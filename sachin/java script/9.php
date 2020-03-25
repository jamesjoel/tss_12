<!DOCTYPE html>
<html>
<head>
	<title>password</title>
	<script type="text/javascript">
		function hide(){
			document.getElementById("pwd").setAttribute("type","password");

		}
		function show(){
			document.getElementById("pwd").setAttribute("type","text");
		}
		
	</script>
</head>
<body>
	<input type="password" id="pwd">
	<br/>
	<br/>
	<br/>
	<button onclick="hide()">hide</button>
	<button onclick="show()">show</button>

</body>
</html>