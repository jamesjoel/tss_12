<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.css"/>
	<script type="text/javascript" src="js\jquery.js"></script>
	<script type="text/javascript" src="js\bootstrap.bundle.js"></script>
	
</head>
<body>

	<nav class="navbar bg-dark navbar-expand-sm navbar-dark sticky-top ">
          <a href="#"> <div class="navbar-brand h4"> Fashion</div></a>
		<button data-toggle="collapse" data-target="#box1" class="navbar-toggler"  >
			<span class="navbar-toggler-icon"></span></button>
			<div id="box1" class=" collapse  navbar-collapse ">
			<ul class="navbar-nav">
			<li class="nav-item"> <a href="#" class="nav-link ml-5 text-light">HOME</a></li>
			<li class="nav-item"> <a href="#" class="nav-link ml-5 text-light">About</a></li>
			<li class="nav-item"> <a href="news.php" class="nav-link ml-5 text-light">Add News</a></li>

		</ul>
         
	</nav>


<?php
include("db.php");

$que="SELECT * FROM news " ;
$result= mysqli_query($con,$que);

while ($data=mysqli_fetch_assoc($result)) { ?>
	<div class="container">
	<div class="row">
		<div class="col-md-4  my-3"><img src="news_image/<?php echo $data['image'] ?>" height="200" width="150" class="card-img-top"></div>
		<div class="col-md-8 my-3 h4"><?php echo $data['title'] ?>
		<br>

		<p class="my-3 ml-5 small">
			<?php echo $data['detail'] ?>
		</p>
    
    <button class="btn btn-dark  ml-5">Delete</button>
    </div>
	</div>
</div>




<?php	
}


?>





			


		










</body>
</html>