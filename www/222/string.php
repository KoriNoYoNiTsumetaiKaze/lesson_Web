<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>

<?php

$f="выбирайте свободное программное обеспеченик";

echo substr ($f,4,8);

echo $f['12'];

echo strpos ($f,"прог",10);

echo substr_count ($f,"ое",4);

echo strstr ($f,"ира");

echo str_replace ("айт","ice",$f);

echo substr_replace ($f,"0123",5,8);

echo strtr ($f,"вик","vik");

echo strtolower ($f);

echo ucwords ($f);

echo strtoupper ($f);

?>


</body>
</html>