<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").mouseover(function(){
				$("p").slideDown(1000);
			});
			$("a").mouseout(function(){
				$("p").slideUp(1000);
			})
		});
	</script>
	<style type="text/css">
		a{
			display: inline-block;
			background-color: #4502AC;
			color: #FFF;
			text-decoration: none;
			padding: 10px;
			font-size: 17px;
			font-weight: bold;
		}
		p{
			width: 300px;
			margin: 0;
			padding: 10px;
			text-align: justify;
			box-shadow: 0px 0px 10px #000;
			border-radius: 10px;
			display: none;

		}
	</style>
</head>
<body>
<a href="#">Click Here</a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>