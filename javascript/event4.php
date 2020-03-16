<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo1(){
			document.getElementById('txt1').style.backgroundColor="red";
		}
		function demo2(){
			document.getElementById('txt1').style.backgroundColor="green";

		}
	</script>
</head>
<body>
<input type="text" onfocus="demo1()" onblur="demo2()" id="txt1"/>
<Br />
<Br />
<input type="text" />
<br />
<br />
<input type="text" />
</body>
</html>