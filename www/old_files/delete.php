<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("bazadannyh");
$id=$_GET['id'];
if (isset($_POST['udalenie'])	)
{$sql="DELETE FROM users WHERE id='$id'";
mysql_query($sql);
echo "Данные удалены <a href='select.php'> Вернуться на страницу ввода данных </a>";
}
else{
?>
<form method="post" action="">
<input type="submit" name="udalenie" value="Удалить данные" />
</form>

<form method="post" action="select.php">
<input type="submit" name="otkaz" value="Отмена" />
</form>
<?php
}
?>
</body>
</html>