<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>string</title>
</head>

<body>
<?php
$s="Слова для теста переменной Эс.Это пробная переменнаь  <br />";
echo str_shuffle($s).'<br>';
echo strrev($s).'<br>';
echo substr($s,6,3).'<br>';
echo substr_count($s,а,0,15).'<br>';
echo strpos($s,'а',0).'<br>';
echo strrpos($s,'а').'<br>';
echo stripos($s,'а').'<br>';
echo strstr($s,'Эс').'<br>';
echo str_replace('теста','1500000000000000000000000000000000000000000000000000000000000000000000',$s).'<br>';
echo substr_replace($s,"текст","y",7).'<br />';
echo strtr($s,"абвгдь","abvgd'").'<br />';
echo htmlspecialchars($s).'<br />';
echo strip_tags($s,'<a><strong>').'<br />';
echo iconv ('windows-1251','utf-8',$s).'<br />';
echo pathinfo('images/koala.jpg',PATHINFO_BASENAME).'<br />';
echo ;

?>



</body>
</html>