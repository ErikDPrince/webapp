<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$name="ProgramingKnowledge";
		echo "Hello=$name <br>";
		echo 'Hello=' .$name . '<br>';

		$google = 'Google Link';

	echo '<a href="https://www.google.com">'.$google. '</a>';	
	echo "<br>";
	echo "\"hello world\"";


	$number1 = 1009;
	$number2 = 2004;
		echo "ADD<br>";
		echo $number1+$number2;
		echo "<br>";

		echo "SUBTRACT<br>";
		echo $number1-$number2;
		echo "<br>";

		echo "Product<br>";
		echo $number1*$number2;
		echo "<br>";

		echo "Divide<br>";
		echo $number1/$number2;
		echo "<br>";

	$number3 = 10;
	$number4 = 20;	
		if ($number3==$number4) {
			echo "Two number are equal <br>";
		}
		else if ($number3>$number4)	{
			echo "Number 3 is greater than number 4";
		}
		else {
			echo "Number 3 is lower than number 4";
		}	

		echo "<br>";
		echo "<br>";
	$number5='10';
	$number6=10;
		if($number5 === $number6)	
		{
			echo "Equal";
		}
		else
		{
			echo "Not Equal";
		}



	?>
</body>
</html>