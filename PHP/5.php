<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	class Car {
		function Car() {
			$this->model = "VW";
		}
	}
	//	create an object
	$herbie = new Car();

	// show object properties
	echo $herbie->model;
	echo "<br>";
	echo strlen("Hello World!");//Xuat do dai cua chuoi
	echo "<br>";
	echo str_word_count("Hel soul sister i don't want to miss thing");
	echo "<br>";
	echo strrev ("Hello world!");
	echo "<br>";
	echo strpos("Let do something interesting for me plz","me");
	echo "<br>";
	echo str_replace("world", "Dog World", "Hello world");
	echo "<br>";
	define("Green", "Welcome to Black Paradise");
	echo(Green);
	echo "<br>";
	define("cars", [
		"Alfa Romeo",
		"BMW",
		"Toyota"
	]);
	echo cars[1];
	echo "<br>";
	echo "<br>";

	define("Great", "Welcome to my world buddy");
		function myTest() {
			echo Great;
		}
	myTest();
	echo "<br>";
	$t = date("H");
		if ($t <"20") {
			echo "Have a good day !";
		}
	echo "<br>";

	$t1 = date("H");
	if ($t < "10") {
		echo "Have a good morning !";
	}	elseif ($t1 < "20") {
		echo "Have a good day!";		
	}	else {
		echo "Have a good night !";
	}








?>
</body>
</html>