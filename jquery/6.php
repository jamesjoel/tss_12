<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("div").animate({"margin-left":"700px", "height":"300px", "width":"300px"}, 1000);
				$("div").animate({"margin-top":"300px"}, 1000);
				$("div").animate({"margin-left":"0px"}, 1000);
				$("div").animate({"margin-top":"0px", "height":"10px", "width":"10px"}, 1000);
				// $("div").animate({"width":"400px"}, 2000);
				// $("div").css({"width":"400px"});
			})
		});
	</script>

	<style type="text/css">
		div{
			height: 10px;
			width: 10px;
			background-color: #120ACD;
			border-radius: 500px;
		}
	</style>
</head>
<body>
<button>OK</button>
<div></div>
</body>
</html>