<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>string</title>
</head>

<body>
<?php
$s="����� ��� ����� ���������� ��.��� ������� ����������  <br />";
echo str_shuffle($s).'<br>';
echo strrev($s).'<br>';
echo substr($s,6,3).'<br>';
echo substr_count($s,�,0,15).'<br>';
echo strpos($s,'�',0).'<br>';
echo strrpos($s,'�').'<br>';
echo stripos($s,'�').'<br>';
echo strstr($s,'��').'<br>';
echo str_replace('�����','1500000000000000000000000000000000000000000000000000000000000000000000',$s).'<br>';
echo substr_replace($s,"�����","y",7).'<br />';
echo strtr($s,"������","abvgd'").'<br />';
echo htmlspecialchars($s).'<br />';
echo strip_tags($s,'<a><strong>').'<br />';
echo iconv ('windows-1251','utf-8',$s).'<br />';
echo pathinfo('images/koala.jpg',PATHINFO_BASENAME).'<br />';
echo ;

?>



</body>
</html>