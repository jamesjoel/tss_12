<?php
$que = "SELECT * FROM category";
$result = mysqli_query($con, $que);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.bundle.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body>
<div class="container-fluid bg-secondary-1">
	<div class="container">
		<div class="row">
			<div class="col-md-3 text-dark col-12 col-sm-12 d-flex justify-content-center">
				<p class="m-0 py-2">Welcome To Destination Of Shopping..</p>
			</div>
			<div class="col-md-9 col-12 col-sm-12   justify-content-md-end justify-content-center d-flex">
				<div class="row">
					
					<ul class="nav social">
									<?php
									if(isset($_SESSION['is_user_logged_in']))
									{ ?>
									<li class="nav-item">
										<a href="#" class="nav-link" style="background-color: #343A40; color: #FFF !important">
											<?php echo $_SESSION['name']; ?>
										</a>
										
									</li>

									<?php
									}
									?>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			</div>
		</div>
		
						
					
				</div>
			</div>
		</div>
	</div>
</div>


<nav class="navbar bg-light navbar-expand-sm text-dark sticky-top">
	<a class="navbar-brand text-dark" href="#"><b>BRAND STUDIO.com</b></a>
	<button class="navbar-toggler bg-light" data-toggle="collapse" data-target="#menu">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</button>


	<div id="menu" class="collapse navbar-collapse">
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="px-md-4 mx-md-4 px-0 mx-0 nav-link font-weight-bold" href="#"><i class="fa fa-bars" aria-hidden="true"></i> Categories</a>
				<div class="dropdown-menu">
					<div class="dropdown-header">Main Categories</div>
					<div class="dropdown-divider"></div>
					<?php
					while($data=mysqli_fetch_assoc($result))
					{ ?>
						<a href="#" class="dropdown-item"><?php echo $data['category name'] ?></a>
					<?php
					}
					?>

					
				</div>


			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Help</a>
			</li>
			
		</ul>
		
		<ul class="navbar-nav ml-auto">
			
			<?php
			if(isset($_SESSION['is_user_logged_in']))
			{ ?>

			<li class="nav-item">
		         <a class="nav-link" href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
		    </li>
            <li class="nav-item">
                <a class="nav-link" href="my_account.php"><i class="fa fa-user" aria-hidden="true"></i> My Account</a>
            </li>


			<?php
			}
			else
			{ ?>

			<li class="nav-item">
		         <a class="nav-link" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
		    </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php"><i class="fa fa-user" aria-hidden="true"></i> Signup</a>
            </li>


			<?php
			}
			?>
        </ul>
		    



	</div>
</nav>


<div class="container-fluid">
	<div class="container>
		
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="form-group">
					<div class="input-group">
						<input type="text" placeholder="Search" class="form-control" />
						<div class="input-group-append">
							<button class="btn btn-dark">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row px-2">
			<img src="images\fashion.jpg">
			
			<p class="text-dark text-justify"><h3><i> Life isn’t about finding yourself. Life is about creating yourself.</i></h3></p>
		</div>
</div>
</div>
	</div>
</div>
			</div>
		</div>
	</div>
	</div>
				
<div class="saperator"></div>