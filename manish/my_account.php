<?php

include("admin/db.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");




?>
<div class="container col-md-6 offset-3">
	<h3>Welcome</h3>
</div>
