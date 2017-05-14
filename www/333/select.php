<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<a href="insert.php">Dobavit</a>
<br/>
<br/>
<?php
mysql_connect ("localhost","root", "");
mysql_select_db ("my_data_base");
$sql="SELECT * FROM novosti ORDER BY date ASC";
$result=mysql_query ($sql);
while ($news=mysql_fetch_array($result))
{
	echo "novost ".$news['news']."<br/> data ".$news['date']."<br/> avtor ".$news['author']."<br/><img src='".$news['photo']."' width='200'><br/><a href='update.php?id=".$news['id']."'>Obnovit'!</a> <a href='delete.php?id=".$news['id']."'>Udalit'!</a><br/><br/>";
}
?>
</body>
</html>