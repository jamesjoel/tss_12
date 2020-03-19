<?php 
include("db.php");
 ?>
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
		<a href="#"   class="navbar-brand">Fashion.com</a>
		<button data-toggle="collapse" data-target="#box" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
		<div id="box" class=" collapse  navbar-collapse ">
			<ul class="navbar-nav">
			<li class="nav-item"> <a href="index.php" class="nav-link ml-5 text-light">HOME</a></li>
			<li class="nav-item"> <a href="signup.php" class="nav-link ml-5 text-light">SIGNUP</a></li>
			<li class="nav-item"> <a href="login.php" class="nav-link ml-5 text-light">LOGIN</a></li>
				<?php
			if(isset($_SESSION['is_user_logged_in']))
			{ ?>

		  <li class="nav-item"><a href="logout.php" class="nav-link ml-3 text-light"> Logout </a></li>

		
		<li class="nav-item ml-0">
                <a class="nav-link text-light" href="profile.php">My Profile</a>
            </li>
            <?php
			}
			?>
			
			 </ul>
		  </div>
		  </nav>
