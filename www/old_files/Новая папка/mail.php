<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>mail</title>
</head>

<body>
<?php

if(isset($_POST['ok']))
{$fio=$_POST ['fio'];
$text=$_POST ['text'];
$email=$_POST ['email'];
if(strlen($fio)!=0 and strlen($text)!=0 and strlen($email)!=0 and preg_match("/^[�-�]+$/",$email))
{
$msg="���: $fio
�����: $email
�����: $text";
mail("anton35@mail.ru","������ � mail.php",$msg,"");
echo "����������!<br> <a href=mail.php>BACK</a>";}
else {echo "�� ����������!��������� ��� ����";
?>

<form action="" method="post">
<input type="text" name="fio" />
<br>
<input type="text" name="email" />
<br>
<textarea name="text" cols="40" rows="20">
</textarea>
<br>
<input type="submit" name="ok" value="�������� ������"/>
</form>
<?php
}
}
else {


?>

<form action="" method="post">
<input type="text" name="fio" />
<br>
<input type="text" name="email" />
<br>
<textarea name="text" cols="40" rows="20">
</textarea>
<br>
<input type="submit" name="ok" value="�������� ������"/>
</form>
<?php
}
?>
</body>
</html>