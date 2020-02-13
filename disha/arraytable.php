<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="4" align="center" cellspacing="1" cellpadding="15">

<tr>
    <th>s.no</th>
    <th>name</th>
    <th>fees</th>
    <th>city</th>
</tr>

<?php
     $stu1= array ("s.no" => "1","name" => "rohit","fees" => "5000","city" => "indore");
     $stu2= array ("s.no" => "2","name" => "jaya","fees" => "7000","city" => "ujjain");
     $stu3= array ("s.no" => "3","name" => "gaurav","fees" => "5800","city" => "bhopal");
		$data=array($stu1,$stu2,$stu3);
        foreach ($data as $aa): ?>
        	<tr>
        	    <td><?php echo $aa['s.no'] ?></td>
         	    <td><?php echo $aa['name'] ?></td>
         	    <td><?php echo $aa['fees'] ?></td>
         	    <td><?php echo $aa['city'] ?></td>
         	</tr>
<?php endforeach; ?>     	
 
</table>
</body>
</html>