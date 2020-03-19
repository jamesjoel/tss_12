<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	

			#a{
			background-color: #ED7EC8;
		}
		#b{
			background-color: orange;
		}
		#c{
			background-color: #9CCC65;
		}
		#d{
			background-color: #EDDC7E;
		}
</style>


<script>

		
		function demo1()
		{
			var a = document.getElementById("abc").value;
			var b = document.getElementById("xyz").value;

			var x=parseInt(a);
			var y=parseInt(b);

			var c=x+y;

			document.getElementById("ans").innerHTML=" Addition is :"+c;
			document.getElementById("body").style.backgroundColor="skyblue";

		}
		function demo2()
		{
			var a = document.getElementById("abc").value;
			var b = document.getElementById("xyz").value;

			var x=parseInt(a);
			var y=parseInt(b);

			var c=x-y;

			document.getElementById("ans").innerHTML=" Subtraction is :"+c;
			document.getElementById("body").style.backgroundColor="orange";

		}
		function demo3()
		{
			var a = document.getElementById("abc").value;
			var b = document.getElementById("xyz").value;

			var x=parseInt(a);
			var y=parseInt(b);

			var c=x*y;

			document.getElementById("ans").innerHTML=" Multiply is :"+c;
			document.getElementById("body").style.backgroundColor="#EDDC7E";

		}
		function demo4()
		{
			var a = document.getElementById("abc").value;
			var b = document.getElementById("xyz").value;

			var x=parseInt(a);
			var y=parseInt(b);

			var c=x/y;

			document.getElementById("ans").innerHTML=" Division is :"+c;

			document.getElementById("body").style.backgroundColor="#ED7EC8";

</script>
</head>
<body id="body">

	
    Enter First No :	<input type="text"  id="abc"><br>
	<br>
	Enter Second No : <input type="text" id="xyz">
	<br>
	<br>
    <button id="a" onclick="demo1()"  ><b> ADD</b> </button>
	<button id="b" onclick="demo2()"  ><b> SUB</b> </button>
	<button id="c" onclick="demo3()"  ><b> MUL</b> </button>
	<button id="d" onclick="demo4()" ><b> DIV</b> </button>


	<h3 id="ans"></h3>

</body>
</html>