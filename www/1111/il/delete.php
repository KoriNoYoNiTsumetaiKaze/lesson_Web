<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("testsite_uzers");
$id=$_GET['id'];
if($_POST['ok'])
{
$sql="DELETE FROM polsovateli WHERE id='$id'";
mysql_query($sql);
echo "даные удалены. <a href='select.php'>назад</a>";
}else
{
?>

<form action="" method="post">
<input type="submit" name="ok" value="delete"/>
</form><br/>
<a href='select.php'>не удалять</a>
<?php
}
?>
</body>
</html>