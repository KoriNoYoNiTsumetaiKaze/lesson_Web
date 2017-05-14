<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php $a="Здесь находится текст";

echo substr($a,5,11);
echo $a['8'];
echo strpos ($a,"на",2);
echo substr_count($a,"т",1);
echo strstr($a,"есь");
echo ucwords($a);
echo str_replace("текст","музыка",$a);
echo substr_replace($a,"нет здесь никакого текста",0,24);
echo strtr($a,"тс","ts");
echo strtoupper($a);
?>
</body>
</html>