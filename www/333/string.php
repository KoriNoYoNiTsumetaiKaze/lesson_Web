<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������� ��� ��������</title>
</head>



<body>
<?php
	$a="���� ����� ��������, �������� �� ����!";
	echo substr ($a, 5, 5);
	echo "<br/>";
	echo strpos ($a, "���");
	echo "<br/>";
	echo strstr ($a, "���");
	echo "<br/>";
	echo str_replace ("�����", "����", $a);
	echo "<br/>";
	echo substr_replace ($a, "���", strpos ($a, "���"), 5 );
	echo "<br/>";
	echo strtr ($a, "�����", "abvgd");
	echo "<br/>";
	
	?>
</body>
</html>