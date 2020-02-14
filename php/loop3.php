<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="10" align="center">
	<?php
	for($a=1; $a<=10; $a++)
	{ ?>
		<tr>
			<td>5</td>
			<td>X</td>
			<td><?php echo $a; ?></td>
			<td>=</td>
			<td><?php echo $a*5; ?></td>
		</tr>
	<?php
	}
	?>

</table>
</body>
</html>