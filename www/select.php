<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Выбор из бд</title>
</head>
<body>
<a href="insert.php">Добавить новость</a><br />
<br />
<?php
include_once "G_value.php";
mysql_connect($server_db,$user_db,$password_db);
mysql_select_db($name_db);
$sql	= "SELECT * FROM news WHERE hot=1 ORDER BY dates ASC";
$res	= mysql_query($sql);
while($news=mysql_fetch_array($res))
{
	echo "<strong>".$news['dates']."</strong><br/>".$news['names']."<br/><br/>".$news['texts']."<br/>";
	if (strlen($news['photo'])!=0)
		{
			echo "<img src='/upload/".$news['photo']."' width='100px' title='".$news['photo']."' alt='".$news['photo']."'/><br/>";
		}
	echo "<a href='update.php?id=".$news['id']."'>Редактировать</a> <a href='del.php?id=".$news['id']."'>Удалить</a><br/><hr/>";
}
?>
</body>
</html>
