<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
print_r (gd_info());
print_r (getimagesize("1.jpg")); 
//echo exif_imagetype("1.jpg");
$place = imagecreatetruecolor(640,768);
$src= imagecreatefromjpeg("1.jpg");
//imagecopy($place,$src,0,0,0,0,640,768);
imagecopyresampled($place,$src,0,0,0,0,640,768,1024,768);
imagejpeg($place,time().".jpg", 100);




?>
</body>
</html>