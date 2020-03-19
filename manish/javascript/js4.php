<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{

height: 100px;
width: 100px;
background-color: red;


		}
	</style>
	<script type="text/javascript">

		function demo(){

			document.getElementById("box").style.backgroundColor="red";

		}
		function demo1(){
			document.getElementById("box").style.backgroundColor="#000";
			
		}

		function demo2(){
			document.getElementById("box").style.backgroundColor="yellow";
			
		}
		
	</script>
</head>
<body>

	<div id="box" onmouseover="demo()" onmousemove="demo1()" onmouseout="demo2()"  ></div>




</body>
</html>