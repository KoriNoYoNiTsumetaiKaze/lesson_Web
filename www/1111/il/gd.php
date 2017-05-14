<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
print_r (gd_info());
print_r (getimagesize('Jellyfish.jpg'));
$dest=imagecreatetruecolor(800,500);
$scr=imagecreatefromjpeg('Jellyfish.jpg');
imagecopyresampled($dest,$scr,0,0,0,0,500,300,1024,768);//imagecopymerge($dest,$scr,0,0,0,0,1024,768,40);//imagecopy($dest,$scr,0,0,0,0,1024,768);//
imagejpeg($dest,'fish.jpg',100);
imagedestroy($dest);
imagedestroy($scr);
?>
</body>
</html>