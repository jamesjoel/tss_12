<?php 
include("db.php");
  include("index.php");
 ?>
 <br>

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-4 my-5">
       <form action="save_news.php" method="post" enctype="multipart/form-data">
<div class="card">
	<div class="header h4 tex-dark"> Add News</div>
	<div class="body">
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" placeholder="Title" class="form-control">
		</div>
		<div class="form-group">
			<label>Detail</label>
			<input type="text" name="detail" placeholder="Detail" class="form-control">
		</div>
		<div class="form-group">
			<label>image</label>
			<input type="file" name="image" class="form-control">
		</div>
	
	</div>
	<div class="footer">
		<button class="btn btn-primary ml-5 mb-3 pr-5">Add</button>
	</div>
	


</div>
				





			</form>
			</div>
		</div>
	</div>