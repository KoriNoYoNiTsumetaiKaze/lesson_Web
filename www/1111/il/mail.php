<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
if($_POST['ok'])
{
$fio2=$_POST['fio'];
$phone2=$_POST['phone'];
$text2=$_POST['text'];
$msg="фио: $fio2
телефон: $phone2
привет: $text2";
mail("ilsur@bk.ru", "ucheba", $msg, "");
echo "письмо ушло";
}
else
{

?>
<form action="" method="post">
FIO<input type="text" name="fio"/>
<br/>
PHONE<input type="text" name="phone"/>
<br/>
TEXT<textarea name="text" cols="100" rows="20">
</textarea>
<input type="submit" name="ok" value="отправить" />
<?php
}
?>
</body>
</html>