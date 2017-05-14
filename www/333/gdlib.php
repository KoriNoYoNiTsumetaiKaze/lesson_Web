<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>

<?php
	print_r(gd_info());
	echo "<br/>";
	print_r(getimagesize("Jellyfish.jpg"));
	echo "<br/>";
	$a=imagecreatetruecolor (500, 300);
	$b=imagecreatefromjpeg ("Jellyfish.jpg"); 
	// imagecopy ($a, $b, 0, 0, 565, 100, 900, 600);
	// imagecopymerge ($a, $b, 0, 0, 565, 100, 900, 600, 50);
	imagecopyresampled ($a, $b, 0, 0, 0, 0, 500, 300, 1024,768);
	imagejpeg ($a, "iz.jpg", 55);
	imagedestroy ($a);
	imagedestroy ($b);
	
?>
</body>
</html>