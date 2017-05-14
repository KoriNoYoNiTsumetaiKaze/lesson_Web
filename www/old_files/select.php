<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>
<a href="insert.php"> Добавить данные </a><br />
<br />
<?php
mysql_connect("localhost","root","");
mysql_select_db("bazadannyh");
$sql="SELECT * FROM users " ;
$res=mysql_query($sql);
while($users=mysql_fetch_array ($res)) 
{
	echo "фио: ".$users['fio']."<br />почта: ".$users['email']."<br />номер телефона: ".$users['phone']."<br /> <a href='update.php?id=".$users['id']."'> Изменить</a> <a href='delete.php?id=".$users['id']."'>Удалить</a> <br /><br />";
}

?>
</body>
</html>