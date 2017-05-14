<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php

$f=fopen("proba.html","a");
fwrite($f,"<h1>What is it????\r\n</h1>");
echo "данный в файл записаны";
fclose($f);

?>
</body>
</html>