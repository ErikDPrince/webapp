<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*$txt = "Hello world!";
		$x = 5; 
		$y = 10.5;
		echo $txt ;
		echo "<br>";
		echo $x;
		echo "<br>";
		echo $y;
		echo "<br>";*/
		$x =5;
		$y =10;
		
		/************************************************/
		echo "<br>";
		function myTest1()	{
			$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		myTest1();
		echo $y;		

	?>
</body>
</html>