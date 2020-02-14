<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>

<div class="container mt-4">
	<div class="row">
		<?php
		for($a=1; $a<=5; $a++)
		{
		?>
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">
					<h4>Message <?php echo $a; ?></h4>
				</div>
				<div class="card-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt</p>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-sm btn-info">More <?php echo $a; ?></a>
				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>
</body>
</html>