<!DOCTYPE html>
<html>
<head>
	<title> Calcule </title>
</head>
<body>

	<h3> Mon calcultrice </h3>

	<?php 
	include_once("Calcule.php");
	$var = new Calcule(16,2);
	
		echo "Addition : ".$var->addition().". <br>";
		echo "Multiplication : ".$var->multiplication().". <br>";
		echo "Division : ".$var->division().". <br>";
	?>

</body>
</html>