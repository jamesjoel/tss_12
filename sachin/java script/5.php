<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style> #box{
		height: 300px;
		width: 200px;
		margin: 0 auto;
		background-color: blue;
	}


	</style>
	<script type="text/javascript">
		function demo(){
			var a=document.getElementById("box").style.backgroundColor="red";
			var a=document.getElementById("box").style.height="266px";
			var a=document.getElementById("box").style.width="255px";
			
			

		}
	</script>
</head>
<body>
	<div id="box"></div>
	<button onclick="demo()">okk</button>

</body>
</html>