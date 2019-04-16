<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<?php
			if (isset($_GET["stu_name"]) && $_GET["stu_age"] && $_GET["stu_weight"]) 
		{	
				$name=$_GET("stu_name");
				$age=$_GET("stu_age");
				$weight=$_GET("stu_weight");
			
			if (!empty($name) && !empty($age) && !empty($weight))
			{	
					echo 'Name:'.$_GET["stu_name"].'<br>';		
					echo 'Age:'.$_GET["stu_age"].'<br>';
					echo 'Weight:'.$_GET["stu_weight"].'<br>';
						# code...
			}
			else
			{
					echo "Please enter all fields";
			}
		}
			?>
</body>
</html>