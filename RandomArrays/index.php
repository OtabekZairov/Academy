<!DOCTYPE html>
<html>
<head>
	<title>RandomArrays</title>
</head>
<body>
	<h1 style="background-color: lightblue; text-align: center; text-shadow: 2px 2px grey; color: royalblue;">
		<?php
		//sum of all positive integers

			 $ar = range(-50, 50);
			 $sum=0;

			 foreach ($ar as $key => $value) {
			    if ($value>0) {
			      $sum+=$value;
			    }
			 }
			 echo $sum;
 		?>
 	</h1>
</body>
</html>

