<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>
<a href="insert.php"> вернуться обратно </a> <br /> <br />
<?php
mysql_connect("localhost","root", "") or die (mysql_error());
mysql_select_db("test_site_php") or die (mysql_error());
$sql="SELECT* FROM php_news ORDER BY tema ASC"; // создание запроса

$result = mysql_query($sql); // отпровка запроса
while($news = mysql_fetch_array($result)) //  для вывода инфы
{
echo "<strong>".$news['chislo']."</strong><br/><strong>".$news['tema']."</strong><br /><br /><img src='/images/".$news['image']."' align = 'left' width='200'/>".$news['tekst']."<br / ><br / ><br / ><br / ><br / ><br / ><br / ><br / ><a href = 'update.php?id=".$news['id']."'>Обновить</a> <a href = 'delete.php?id=".$news['id']."'>Удалить</a><br /><br /><br />"; // вывод всех строк из бд.
}
?>
<body>
</body>
</html>