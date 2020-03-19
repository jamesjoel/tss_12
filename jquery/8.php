<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$("button").click(function(){
				var a = $("input").val();
				$("p").html(a);
			})


		});



	</script>
</head>
<body>
<button>OK</button>
<br />
<input type="text" />
<p></p>
</body>
</html>