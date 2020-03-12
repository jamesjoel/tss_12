<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function demo()
		{
			var a = document.getElementById("first_num").value;
			var b = document.getElementById("second_num").value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c = x+y;

			document.getElementById("ans").innerHTML="Your Ans is = "+c;
		}
	</script>
</head>
<body>
First : <input type="text" id="first_num"/>
<br />
<br />
Second : <input type="text" id="second_num"/>
<br />
<br />
<button onclick="demo()">+</button>
<button onclick="demo()">-</button>
<button onclick="demo()">x</button>
<button onclick="demo()">/</button>

<h2 id="ans"></h2>
</body>
</html>