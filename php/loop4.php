<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" align="center" cellspacing="0" cellpadding="5">
	<?php
	$x=1;
	for($a=1; $a<=10; $a++)
	{ ?>
		<tr>
			<?php
			for($b=1; $b<=9; $b++)
			{ ?>
				<td><?php echo ($x+$b)*$a; ?></td>
			<?php
			}
			?>
		</tr>
	<?php
	}
	?>
	
</table>
</body>
</html>