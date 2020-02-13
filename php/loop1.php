<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" align="center" cellspacing="0" cellpadding="5">
	<?php
	// for($a=1; $a<=10; $a++)
	// {
	// 	echo "<tr>";
	// 	echo "<td>";
	// 	echo $a*5;
	// 	echo "</td>";
	// 	echo "</tr>";

	// }



	for($a=1; $a<=10; $a++)
	{ ?>
		<tr>
			<td><?php echo $a*7; ?></td>
			
		</tr>
	<?php
	}

	?>
</table>
</body>
</html>
