<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php

$place = imagecreatetruecolor(800,600);
$src = imagecreatefromjpeg('koala.jpg');
imagecopyresampled($place,$src,0,0,0,0,800,600,100,75);
imagejpeg($place,'beas.jpg',80);
imagedestroy($place);
imagedestroy($src);






?>
</body>
</html>