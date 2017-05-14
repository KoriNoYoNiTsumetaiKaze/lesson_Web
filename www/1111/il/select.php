<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<a href='insert.php'>добавить</a><br/><br/>
<?php
mysql_connect("localhost","root","");
mysql_select_db("testsite_uzers");
$sql="SELECT * FROM polsovateli ORDER BY fio ASC"; 
$result=mysql_query($sql);
while($catalog=mysql_fetch_array($result))
{
echo "<img src='/upload/".$catalog['photo']."' width='130'/><br/>fio:".$catalog['fio']."<br/>gendr:".$catalog['gendr']."<br/>mail:".$catalog['mail']."<br/>login:".$catalog['login']."<br/>password:".$catalog['password']."<br/><a href='update.php?id=".$catalog['id']."'>ИЗМЕНИТЬ</a> <a href='delete.php?id=".$catalog['id']."'>УДАЛИТЬ</a><br/><br/>";
}
?>
</body>
</html>