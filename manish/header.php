<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css\style1.css"/>
	<link rel="stylesheet" type="text/css" href="css\font-awesome.css">
	<script type="text/javascript" src="\js\jquery.js"></script>
	<script type="text/javascript" src="\js\bootstrap.bundle.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
</head>
<body>
	
		<nav class=" navbar bg-danger  navbar-expand-sm navbar-dark sticky-top ">
			<a href="#" class="navbar-brand ml-5"><h5 class="text-dark"><span>Shoping Loading Page </span></h5></a>
			<button data-toggle="collapse" data-target="#menu" class="navbar-toggler">
			<span class="navbar-toggler-icon"></span></button>
		<div id="menu" class="collapse navbar-collapse ">
		<ul class="navbar-nav ml-5 col-4 col-md-9 ">
			<li class="nav-item"><a href="index.php" class="nav-link text-light"> <i class="fa fa-home" aria-hidden="true"></i> HOME</a></li>
			<li class="nav-item"><a href="#" class="nav-link ml-3 text-light "> About  </a></li>
			<li class="nav-item"><a href="#" class="nav-link ml-3 text-light"> Contact </a></li>
			<li class="nav-item">
		         <a class="nav-link text-light" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
		    </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="signup.php"><i class="fa fa-user" aria-hidden="true"></i> Signup</a>
            </li>
            <?php
			if(isset($_SESSION['is_user_logged_in']))
			{ ?>

		  <li class="nav-item"><a href="logout.php" class="nav-link ml-3 text-light"> logout </a></li>

		
		<li class="nav-item ml-0">
                <a class="nav-link text-light" href="my_acc">MyAccount</a>
            </li>
            <?php
			}
			?>
		</ul>
			</nav>

		</div>
		<div class="container  slider1 ">
			<div class="col-md-12  pt-5"><h1 class=" logo">High Fashion
			</h1>
			 <div class="off-card">
                        <h2 class="ml-5">Sale <span>50%</span> <small>off</small></h2>
                    </div>
                    <h4 class="mt-0 ml-5 pl-5 pt-0"> MAN & WOMAN</h4>

		<a href="shopknow.php">
			<button class="btn btn-danger ml-5  mt-5 hhvv"> SHOP KNOW</button></a>


		</div>
		<div >
                           
            </div></div>
