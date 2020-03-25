<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function start(){
		var a=document.getElementById("txt").value;
	     document.getElementById("xyz").innerHTML =a;
		//alert(a);
	}
	</script>
</head>
<body>
	<input type="text" id="txt">
	<button onclick="start()">done</button>

	<h2 id="xyz"></h2>

</body>
</html>