<?php

include("admin/db.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");




?>
<div class="container">
	<h3>Welcome</h3>
</div>
<?php
include("footer.php");
?>