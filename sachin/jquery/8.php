<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("div").mouseover(function(){
				var a = Math.random();
				var b = a*800;
				var c = Math.floor(b);


				var x = Math.random();
				var y = x*500;
				var z = Math.floor(y);


				$("div").css({"margin-left":c+"px","margin-top":z+"px"})
			});


		});
	</script>
	<style type="text/css">
		div{
			height: 50px;
			width: 50px;
			border-radius: 100px;
			background-color: red;
		}
	</style>
</head>
<body>
	<div></div>

</body>
</html>