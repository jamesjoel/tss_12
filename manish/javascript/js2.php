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
<body>
<div style="background-color: #fff; width: 500px; min-height: 400px; margin: 20px auto; text-align: center; padding: 10px;">

	<img src="image/596.jpg" id="img">

	<hr>

<img src="image/12.jpg" height="100" width="100" onclick="demo('image/12.jpg')">
<img src="image/4.jpg" height="100" width="100" onclick="demo('image/4.jpg')">
<img src="image/13.jpg" height="100" width="100" onclick="demo('image/13.jpg')">
<img src="image/8.jpg" height="100" width="100" onclick="demo('image/8.jpg')">

	
</div>


</body>
</html>