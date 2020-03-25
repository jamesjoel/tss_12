<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo() {
			document.getElementById("img").setAttribute("src","m13.jpg");
			
		}
		function demo1() {
			document.getElementById("img2").setAttribute("src","m5.jpg");
			
		}
	</script>

</head>
<body><div><button onclick="demo()" float="left">change</button>
	<img src="m10.jpg" id="img" height="300" width="200"></div>
	<div>
	<button onclick="demo1()" float="right">change</button>
	<img src="m12.jpg" id="img1" height="300" width="200"></div>

</body>
</html>