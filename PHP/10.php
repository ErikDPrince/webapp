<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$counter=1;
		do
		while($counter<=10)
		{
			echo 'Hello world ' .$counter. '<br>';
			$counter++;
		}

		$names=array('Mark','John','Tom','Partrick','July');
		foreach ($names as $name )
		{
			echo $name .'<br>';
		}
	?>
</body>
</html>