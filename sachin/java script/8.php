<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(a){
			document.getElementById("img").setAttribute("src",a);

		}
	</script>
</head>
<body><div style="width: 500px; min-height: 400px; margin: 20px auto; background-color: #CCC; text-align: center; padding: 10px;">

	<img src="m10.jpg" height="200" width="300" id="img">
	<hr/>
	<img src="m10.jpg" height="100" width="100" onclick="demo('m10.jpg')">
	<img src="m11.jpg" height="100" width="100" onclick="demo('m11.jpg')">
	<img src="m12.jpg" height="100" width="100" onclick="demo('m12.jpg')">
	<img src="m5.png" height="100" width="100" onclick="demo('m5.png')">
</div>
</body>
</html>