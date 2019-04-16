<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
		/*$students = array(array('Name'=>'Mark',
								'Age'=>15,
								'weight'=>46),
						  array('Name'=>'John',
						  		'Age'=>13,
						  		'weight'=>65),
						  array('Name'=>'Tom',
						  		'Age'=>14,
						  		'weight'=>56));

	
		foreach ($students as $student => $innerArray) 
		{
			echo '<b>'.$student.'</b><br>';
			foreach ($innerArray as $item ) 
			{
				echo $item.'<br>';
			}
		}*/
		echo "<br>";
		echo "<br>";
		$people = array(array('Code'=>1,
							  'Name'=>'Ethen',
							  'Phone'=>'093435423',
							  'Age'=>24),
						array('Code'=>2,
							  'Name'=>'Cater',
							  'Phone'=>'03415385',
							   'Age'=>54),
						array('Code'=>3,
							  'Name'=>'Jimmy',
							   'Phone'=>'098372224',
								'Age'=>43),
						array('Code'=>4,
								'Name'=>'Trump',
								'Phone'=>'0999988433',
								'Age'=>33));
		foreach ($people as $peo => $innerArray) 
		{
			/*concat . . dung lam gi*/	
			echo "<br>";
			echo '<b>'.$peo.'<b><br>';
			foreach ($innerArray as $item ) 
			{
				echo $item.'<br>';
			}
		}

		?>
</body>
</html>