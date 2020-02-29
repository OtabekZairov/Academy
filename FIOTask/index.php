<!DOCTYPE html>
<html>
<head>
	<title>Students List</title>
</head>
<body>
	<h2 style="background-color: lightblue; text-align: center;">List of Students</h2>
	<?php

 	//List of Students

	$students=[
	['Zairov','Otabek', 'Khairulloevich'],
	['Shukurov','Aziz', 'Pulodovich'],
	['Muminov','Muhammad'],
	];

	function students($students){
		for($i=0; $i<count($students); $i++){
			foreach ($students[$i] as $key => $value) {
				if($key==0) echo "<b>".$value."</b> ";
				if($key!=0) echo mb_substr($value,0,1).". ";
			}
		}
	}

	students($students);
?>
</body>
</html>



