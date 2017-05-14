<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
	mysql_connect("localhost","root", "") or die (mysql_error());
	mysql_select_db("test_site_php") or die (mysql_error());
	
$id= $_GET['id'];
if (isset($_POST['ok']))
{
$sql = "DELETE FROM php_news WHERE id='$id'";
mysql_query($sql);
echo "Данные удалены <a href ='select.php'>Вернуться</a>";
}
else 
{	


?>
<form action="" method="post">
<input type="submit" name="ok" value="удалить" /> <br />
</form>
<form action="select.php">
<input type="submit" value="неудалять" />
</form>
<?php }?> 
</body>
</html>