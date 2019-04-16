<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			$favcolor = "dark";
			switch ($favcolor) {
				case "red":
					echo "Your favorite color is red";
					break;
				case "blue":
					echo "Your favorite color is blue";
				case "green":
					echo "Your favorite color is green";
					break;
				default:
					echo "Your favorite color is neither red ,blue , not green !";
					break;
			}

			echo <>
			$cars = array("Volvo", "BMW", "Toyota"); 
			echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


		?>
</body>
</html>