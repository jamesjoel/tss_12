<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("div").mousemove(function(){
				$("div").css({"height":"400px" ,"width":"300" ,"background-color":"blue"});
			});
			$("div").mouseout(function(){
				$("div").css({"height":"200px" ,"width":"200" ,"background-color":"red"});
			});



		});

	</script>
	<style type="text/css">
		div{
			height: 200px;
			width: 200px;
			background-color: red;
		}



	</style>
</head>
<body>
	<div></div>

</body>
</html>