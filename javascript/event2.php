<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
			height: 100px;
			width: 100px;
			background-color: #457845;
		}
	</style>
	<script type="text/javascript">
		var a = 100;

		function demo(){
			document.getElementById("box").style.backgroundColor="#220011";
		}
		function demo1(){
			a++;
			document.getElementById("box").style.height=a+"px";
			document.getElementById("box").style.width=a+"px";
		}
		function demo2(){
			// alert();
			document.getElementById("box").style.backgroundColor="#457845";
		}
	</script>
</head>
<body>
<div id="box" onmouseover="demo()" onmousemove="demo1()" onmouseout="demo2()"></div>
</body>
</html>