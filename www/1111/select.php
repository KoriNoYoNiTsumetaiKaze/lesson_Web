<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������� ��� ��������</title>
</head>
<a href="insert.php"> ��������� ������� </a> <br /> <br />
<?php
mysql_connect("localhost","root", "") or die (mysql_error());
mysql_select_db("test_site_php") or die (mysql_error());
$sql="SELECT* FROM php_news ORDER BY tema ASC"; // �������� �������

$result = mysql_query($sql); // �������� �������
while($news = mysql_fetch_array($result)) //  ��� ������ ����
{
echo "<strong>".$news['chislo']."</strong><br/><strong>".$news['tema']."</strong><br /><br /><img src='/images/".$news['image']."' align = 'left' width='200'/>".$news['tekst']."<br / ><br / ><br / ><br / ><br / ><br / ><br / ><br / ><a href = 'update.php?id=".$news['id']."'>��������</a> <a href = 'delete.php?id=".$news['id']."'>�������</a><br /><br /><br />"; // ����� ���� ����� �� ��.
}
?>
<body>
</body>
</html>