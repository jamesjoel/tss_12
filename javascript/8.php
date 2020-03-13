<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(a){
			document.getElementById("img").setAttribute("src", a);
		}
	</script>
</head>
<body>
<div style="width: 500px; min-height: 400px; margin: 20px auto; background-color: #CCC; text-align: center; padding: 10px;">

	<img src="1.jpg" height="300" width="300" id="img">
	<hr />

	<img src="1.jpg" height="100" width="100" onclick="demo('1.jpg')">
	<img src="2.jpg" height="100" width="100" onclick="demo('2.jpg')">
	<img src="3.jpg" height="100" width="100" onclick="demo('3.jpg')">
	<img src="4.jpg" height="100" width="100" onclick="demo('4.jpg')">



</div>
</body>
</html>