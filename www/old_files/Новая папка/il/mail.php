<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>�������� ��� ��������</title>
</head>

<body>
<?php
if($_POST['ok'])
{
$fio2=$_POST['fio'];
$phone2=$_POST['phone'];
$text2=$_POST['text'];
$email2=$_POST['email'];
$msg="���: $fio2
<strong>�������</strong>: $phone2
������: $text2";
$header="Content-type:text/html;charset:'utf-8'";
$header.="From:'���'<email>";
$header.="Subject:��������� ������";
$header.="Content-type:text/html;charset:'utf-8'";
mail("ilsur@bk.ru", "ucheba", $msg, $header);
echo "������ ����";
}
else
{

?>
<form action="" method="post">
FIO<input type="text" name="fio"/>
<br/>
Email<input type="text" name="email"/>
<br/>
PHONE<input type="text" name="phone"/>
<br/>
TEXT<textarea name="text" cols="100" rows="20">
</textarea>
<input type="submit" name="ok" value="���������" />
<?php
}
?>
</body>
</html>