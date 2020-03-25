<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").mousemove(function(){
				$("p").slideUp(1000);

			});
			$("a").mousemove(function(){
				$("p").slideDown(1000);

			});



		});
		</script>
		<style type="text/css">
			a{
				background-color: red;
				margin-top: 5px;
				padding: 5px;
				display: inline-block;
				text-decoration: none;
			}
			p{
				height: 400px;
				width: 200px;
				box-shadow: 0px 0px 10px #000;
				border-radius:10px ;
				text-align: center;
				box-shadow: 0px 2px 0px 4px;


			}
		</style>
		
</head>
<body><a href="#">CLICKHERE</a>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</body>
</html>