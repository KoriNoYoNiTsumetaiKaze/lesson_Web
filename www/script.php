<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������� ��� ��������</title>
</head>
<body>
<?php
$a=10;
$b="�����";
$c="����� 10";
$d="$b ����� $a";
echo "a=$a b=$b c='$c' d=\"$d\"";
if (isset($_POST['send']))
 {
	 $a=$_POST['intxt'];
	 echo "<br/>�� �����: $a";
 }
?>
<form method="post" action="">
<input type="text" name="intxt" value="Ok"/>
<input type="submit" name="send" value="���������"/>
</form>
</body>
</html>