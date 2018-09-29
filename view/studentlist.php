<html>
<head></head>

<body>

<table>
	<tr><td>Title</td><td>Author</td><td>Description</td></tr>
	<?php 

		foreach ($students as $title => $student)
		{
			echo '<tr><td><a href="index.php?student='.$student->name.'">'.$student->name.'</a></td><td>'.$student->email.'</td><td>'.$student->phone.'</td></tr>';
		}

	?>
</table>

</body>
</html>