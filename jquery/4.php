<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// 1sec = 1000
				// $("div").hide();
				// $("div").slideUp(5000);
				// $("div").fadeOut(5000);

				// $("div").show();
				// $("div").slideDown(3000);
				// $("div").fadeIn(4000);


			});
		});
	</script>
	<style type="text/css">
		div{
			height: 200px;
			width: 200px;
			background-color: red;
			display: none;
		}
	</style>
</head>
<body>
<button>OK</button>
<div></div>
</body>
</html>