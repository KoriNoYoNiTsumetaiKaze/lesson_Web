<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>������</title>
</head>
<body>
<?php
$str	= "������ ��� ��������� ���� ������� ������ ������. ������� ����� ��������� ������ ���� � ������ ��������� ���� �����?";
echo "$str<br/>";
echo substr($str,7);
echo "<br/>";
echo strpos($str,"�������");
echo "<br/>";
echo strpos($str,"111");
echo "<br/>";
echo strstr($str,"����");
if("string.php"==strstr($_SERVER['REQUEST_URI'],"string.php"))
{
	echo "<br/>Das ist string.php<br/>";
}
echo str_replace("�","�",$str);
echo "<br/>";
echo substr_replace($str,"� �������",49);
echo "<br/>";
echo strtr($str,"�����","abvgd");
?>
</body>
</html>