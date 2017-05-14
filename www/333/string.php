<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>



<body>
<?php
	$a="Идет бычок качается, вздыхает на ходу!";
	echo substr ($a, 5, 5);
	echo "<br/>";
	echo strpos ($a, "взд");
	echo "<br/>";
	echo strstr ($a, "взд");
	echo "<br/>";
	echo str_replace ("бычок", "заяц", $a);
	echo "<br/>";
	echo substr_replace ($a, "рыд", strpos ($a, "взд"), 5 );
	echo "<br/>";
	echo strtr ($a, "абвгд", "abvgd");
	echo "<br/>";
	
	?>
</body>
</html>