<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#btn1").click(function(){
				$("div").attr("class","demo");
			});

			$("#btn2").click(function(){
				$("div").removeClass("demo");
			});


		});
	</script>
	<style type="text/css">
		div{
			height: 210px;
			width: 210px;
			background-color: #1245ff;
			text-align: center;
		}
		.demo{
			color:#fff;
		}
	</style>
		
</head>
<body>
	<button id="btn1">add</button>
	<button id="btn2">remove</button>
	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu .</div>


</body>
</html>