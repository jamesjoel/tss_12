<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("div").mouseover(function(){
				$("div").css({ "height":"400px", "background-color":"blue" });

			});

			$("div").mouseout(function(){

				$("div").css({"height" : "200px", "background-color":"red"});
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