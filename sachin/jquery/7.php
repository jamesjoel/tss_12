<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("div").animate({"margin-left":"700px","height":"200px","width":"200px"},1000);
				$("div").animate({"margin-top":"300px"},1000);
				$("div").animate({"margin-left":"0px","height":"10px","width":"10px"},1000);
				$("div").animate({"margin-top":"0px"},1000);
				
				
			})
			
		});
		
	</script>
	<style type="text/css">
		div{
			height: 10px;
			width: 10px;
			border-radius: 100px;
			background-color: red;
		}
	</style>
</head>
<body><button>okk</button>
	<div></div>

</body>
</html>