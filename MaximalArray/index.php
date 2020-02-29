<!DOCTYPE html>
<html>
<head>
	<title>MaxArray</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="alert alert-primary" role="alert" style="text-align: center;">
		<b><h5>Maximal Integer</h5><hr>
			<?php
				function maxFunc ($a){
					$n=count($a);
					if($n>0) {
						$max=$a[0];
						for($i=0; $i<$n; $i++)
						{
							if($max<$a[$i]) $max=$a[$i];
						}
				      echo $max;
					}
				}
				$numb=[4,6,23,123,564,12];

				maxFunc($numb);
			?>
		</b>
	</div>
</body>
</html>