<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><!-- 
	Stundents
	Name Age Weight
	Mark 15	46
	John 13	65
	Tom	14	56 -->
		<?php
		$students = array(array('Name'=>'Mark',
								'Age'=>15,
								'weight'=>46),
						  array('Name'=>'John',
						  		'Age'=>13,
						  		'weight'=>65),
						  array('Name'=>'Tom',
						  		'Age'=>14,
						  		'weight'=>56));

	echo $students[0]['Name'].' ';echo $students[0]['Age'].' ';echo $students[0]['weight'].'<br> ';
	echo $students[2]['Name'].' ';echo $students[2]['Age'].' ';echo $students[2]['weight'].' <br>';
	echo $students[1]['Name'].' ';echo $students[1]['Age'].' ';echo $students[1]['weight'].'<br> ';

		
	
		?>
</body>
</html>