<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-
transitional.dtd">
<html>
<head>
	<title>movie example</title>
	<style>
	label,a 
	{
		font-family : Arial, Helvetica, sans-serif;
		font-size : 12px; 
	}

	</style>	
</head>
<body>
<table>
	<tr><th>SL.NO.</th><th>Movie</th><th>Name</th><th>Gender</th></tr>
	<?php foreach($query as $row): ?>
<tr>   
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->movie; ?></td>
    <td><?php echo $row->name; ?></td>
    <td><?php echo $row->gender; ?></td>
</tr>
<?php endforeach; ?>
	</table>
		
</body>
</html>