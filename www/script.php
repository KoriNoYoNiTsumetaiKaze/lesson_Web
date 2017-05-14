<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>
<body>
<?php
$a=10;
$b="текст";
$c="текст 10";
$d="$b текст $a";
echo "a=$a b=$b c='$c' d=\"$d\"";
if (isset($_POST['send']))
 {
	 $a=$_POST['intxt'];
	 echo "<br/>Вы ввели: $a";
 }
?>
<form method="post" action="">
<input type="text" name="intxt" value="Ok"/>
<input type="submit" name="send" value="Отправить"/>
</form>
</body>
</html>