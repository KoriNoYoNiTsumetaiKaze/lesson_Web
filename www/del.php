<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Удалить новость</title>
</head>
<body>
<?php
$getid	= $_GET['id'];
include_once "G_value.php";
mysql_connect($server_db,$user_db,$password_db);
mysql_select_db($name_db);
$sql	= "SELECT * FROM news WHERE id='$getid'";
$res	= mysql_query($sql);
$news	= mysql_fetch_array($res);
if (isset($_POST['yes']))
	{
		mysql_connect($server_db,$user_db,$password_db);
		mysql_select_db($name_db);
		$sql	= "DELETE FROM news WHERE id='$getid'";
		mysql_query($sql);
		echo "<p>Покойся с миром :)</p>";
		echo "<a href='select.php'>Возврат на страницу новостей</a>";
	}
	else
		{
			echo "<strong>".$news['dates']."</strong><br/>".$news['names']."<br/><br/>".$news['texts']."<br/><hr/>";
?>
<form method="post" action="">
<input type="submit" name="yes" value="Удалить???"/><a href="select.php">Нет, спасибо</a>
</form>
<?php
		}
?>
</body>
</html>
