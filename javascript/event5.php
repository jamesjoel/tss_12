<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(){
			var a = document.getElementById("color").value;
			document.getElementById("body").style.backgroundColor=a;
		}
	</script>
</head>
<body id="body">
<select onchange="demo()" id="color">
	<option>Select</option>
	<option>Red</option>
	<option>Green</option>
	<option>Blue</option>
</select>
</body>
</html>