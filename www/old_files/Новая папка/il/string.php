<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>string</title>
</head>

<body>
<?php
$s="Жили были дед да баба! </br> И была у них курачка ряба.";
strlen($s);
echo $s;
if(!strlen($s)>100)
{
}
echo"</br>";
echo str_shuffle($s);
echo"</br>";
echo strrev($s);
echo"</br>";
echo substr($s, 0, 4);
echo"</br>";
echo substr_count($s, "а", 7);
echo"</br>";
echo strpos($s, "а", 7);
echo"</br>";
echo strstr($s, "дед");
echo"</br>";
echo stristr($s, "дед");
echo"</br>";
echo strrchr($s, "них");
echo"</br>";
echo str_replace("бы", "БыбИ", $s);
echo"</br>";
echo substr_replace($s,"ДЕД И БАБА",10,11);
echo"</br>";
echo strtr($s, "абвгдежз", "abvgdejz");
echo"</br>";
echo strtolower($s);
echo"</br>";
echo strtoupper($s);
echo"</br>";
echo ucfirst($s);
echo"</br>";
echo ucwords($s);
echo"</br>";
echo htmlspecialchars($s);
echo"</br>";
echo strip_tags($s);
echo"</br>";
echo strip_tags($s,"<br>");
echo"</br>";
echo iconv("cp1251","utf-8", $s);

?>
</body>
</html>