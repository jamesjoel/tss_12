<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#a").click(function(){
				$("div").hide(3000);
			});
			$("#b").click(function(){
				$("div").slideDown(3000);
			});
			$("#c").click(function(){
				$("div").slideUp(3000);
			});
			$("#d").click(function(){
				$("div").fadeIn(4000);
			});
			$("#e").click(function(){
				$("div").fadeOut(4000);
			});
			$("#f").click(function(){
				$("div").show(4000);
			});




		});
	</script>

<style type="text/css">
	div{
		height: 300px;
		width: 400px;
		background-color: red;
	}
</style>

</head>
<body><button id="a">hide</button>
	<button id="b">slidedown</button>
	<button id="c">slideup</button>
	<button id="d">fadein</button>
	<button id="e">fadeout</button>
	<button id="f">show</button>
	<div></div>
	


</body>
</html>