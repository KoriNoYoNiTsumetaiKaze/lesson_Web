<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
$path=$_SERVER['DOCUMENT_ROOT']."/upload/";
copy($path."Hydrangeas.jpg", $path."hydra7777.jpg");
$fsize=filesize($path."hydra7777.jpg");
echo $fsize;
echo md5("mknkw9ey");

?>
</body>
</html>