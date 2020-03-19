<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$("div").mouseover(function(){

				$("div").css({"background-color":"green" ,"height":"200px"});
			});

			$("div").mouseout(function(){
				$("div").css({"background-color":"red", "height":"100px"});




			});
});
		</script>

		<style type="text/css">
			div{

				height: 100px;
				width: 100px;
				background-color: red;
			}
		</style>


</head>
<body>
	<div></div>

</body>
</html>