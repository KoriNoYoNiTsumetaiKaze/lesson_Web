<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������� ��� ��������</title>
</head>

<body>
<?php $a="����� ��������� �����";

echo substr($a,5,11);
echo $a['8'];
echo strpos ($a,"��",2);
echo substr_count($a,"�",1);
echo strstr($a,"���");
echo ucwords($a);
echo str_replace("�����","������",$a);
echo substr_replace($a,"��� ����� �������� ������",0,24);
echo strtr($a,"��","ts");
echo strtoupper($a);
?>
</body>
</html>