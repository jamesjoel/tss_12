<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){

			$("a").mouseover(function(){

				$("h1").slideUp(1000);


			});
			$("a").mouseout(function(){

				$("h1").slideDown(1000);


			});



		});
	</script>
	<style type="text/css">
a{

background-color: #000;
color: #fff;
margin: 0;
padding: 10px;
text-decoration: none;
font-size: 17px;

}
h1{
			background-color: red;
			color: #fff;
			font-style: helvetica;
			display: inline-block;
			

</style>


</head>
<body>
	<br>
	<br>
	<a href="#">click</a>
	<br><br>
	<h1>
		Welcome
	</h1>

</body>
</html>