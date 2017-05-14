<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
echo min(567,78,676)."<br>";
echo max(234, 45, 56 ,78)."<br>";
echo round(1.2)."<br>";
echo floor(1.2)."<br>";
echo ceil(1.2)."<br>";
echo rand(0, 25)."<br>";
$image = rand(1,3);
echo "<img src ='/upload/$image.jpg'>";
?>




</body>
</html>