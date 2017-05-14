<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Строки</title>
</head>
<body>
<?php
$str	= "Летели два крокодила один зеленый другой налево. Сколько весит килограмм железа если у поезда ответнуть одну гайку?";
echo "$str<br/>";
echo substr($str,7);
echo "<br/>";
echo strpos($str,"Сколько");
echo "<br/>";
echo strpos($str,"111");
echo "<br/>";
echo strstr($str,"один");
if("string.php"==strstr($_SERVER['REQUEST_URI'],"string.php"))
{
	echo "<br/>Das ist string.php<br/>";
}
echo str_replace("о","О",$str);
echo "<br/>";
echo substr_replace($str,"и улетели",49);
echo "<br/>";
echo strtr($str,"абвгд","abvgd");
?>
</body>
</html>