<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������� ��� ��������</title>
</head>

<body>
<?php
$string = "��� � ������ ���� � ���. ��� ������  <br/> ��� �� ���� ������ � �����. ������� ����� � ��������";
echo str_shuffle($string)."<br />"; 
echo strrev ($string)."<br />";
echo substr ($string, 6, 6)."<br />";
echo substr_count($string, '�' , 2)."<br/>";
echo strpos ($string, 10);
echo strstr($string, '���' )."<br/>";
echo str_replace ('���', 1000000000000, $string)."<br />";
echo substr_replace  ($string, "����", 6, 6 )."<br/>";
echo strtr($string, "�����", "abvgd")."<br /";
echo htmlspecialchars ($string)."<br />";
echo strip_tags ($string, "<a><strong><br>")."<br />";
echo iconv("windows-1251", "UTF-8", $string)."<br />";
echo pathinfo("/images/Lighthouse.jpeg", PATHINFO_BASENAME);


?>
</body>
</html>