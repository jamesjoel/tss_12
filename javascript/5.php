<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#box{
			height: 200px;
			width: 200px;
			background-color: red;
		}
	</style>

<script>
	function demo(){
		document.getElementById("box").style.backgroundColor="green";
		document.getElementById("box").style.height="300px";
		document.getElementById("box").style.width="300px";
	}
</script>

</head>
<body>
<button onclick="demo()">OK</button>
<br />
<br />

<div id="box"></div>
</body>
</html>