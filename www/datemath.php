<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>���� � ����������</title>
</head>
<body>
<?php
echo date("D/d/M/Y");
echo "<br/>";
echo time();
echo "<br/>";
echo "� ���� �����, � ��� ��� ��������� ����� ";
echo md5("� ���� �����, � ��� ��� ��������� �����");
echo "<br/>";
echo md5("� ���� �����, � ��� ��� ��������� �����");
echo "<br/>";
echo md5(md5("� ���� �����, � ��� ��� ��������� �����"));
echo "<br/>��������� �����<br/>";
echo rand(1,100);
echo "<br/>1.45<br/>";
echo round(1.45);
echo "<br/>";
echo ceil(1.45);
echo "<br/>";
echo floor(1.45);
?>
</body>
</html>