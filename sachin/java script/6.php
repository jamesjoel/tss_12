<!DOCTYPE html>
<html>
<head>
	<title></title>
	
		<style>
			#box{
				margin: 0;
				padding: 0;

			}

		a{
			height: 202px;
			width: 201px;
			
			display:inline-block;}

			#a{
background-color: yellow;
			}
#b{
	background-color: green;
}


		}</style>

		<script type="text/javascript">

		function demo1(){
			var a=document.getElementById("box").style.backgroundColor="red";

		}
		function demo2(){
			var a=document.getElementById("box").style.backgroundColor="blue";

		}
	</script>
</head>
<body id="box">
	<a href="#" id="a" onclick="demo1()" ></a>
	<a href="#" id="b" onclick="demo2()"></a>
	
</body>

</html>