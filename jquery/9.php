<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		
			$("#btn1").click(function(){
				$("div").attr("class", "demo");
			});
			$("#btn2").click(function(){
				$("div").removeClass("demo");
			});
		});





	</script>
	<style type="text/css">
		div{
			height: 200px;
			width: 200px;
			background-color: #124575;
		}
		.demo{
			color: #FFF;
		}
	</style>
</head>
<body>
	<button id="btn1">Add</button>
	<button id="btn2">Remove</button>
	<div>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis
	</div>
</body>
</html>