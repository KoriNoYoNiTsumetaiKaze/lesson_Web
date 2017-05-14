<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>GD</title>
</head>
<body>
<?php
print_r(gd_info());
$path	= $_SERVER['DOCUMENT_ROOT']."/upload/";
echo "<br/><br/>";
$a	= getimagesize($path."Koala.jpg");
print_r($a);
echo "<br/>";
$a	= getimagesize($path."Koala.png");
print_r($a);
$dest	= imagecreatetruecolor(800,600);
$src	= imagecreatefromjpeg($path."Koala.jpg");
//imagecopy($dest,$src,0,0,100,100,800,600);
//imagecopymerge($dest,$src,0,0,100,100,800,600,50);
imagecopyresampled($dest,$src,0,0,0,0,800,600,1024,786);
imagejpeg($dest,$path."Koala800x600.jpg",50);
imagedestroy($dest);
imagedestroy($src);
?>
</body>
</html>