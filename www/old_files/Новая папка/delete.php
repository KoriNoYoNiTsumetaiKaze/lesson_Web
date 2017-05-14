<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>delete</title>
</head>

<body>
<?php
mysql_connect("localhost","root","")or die (mysql_error());
mysql_select_db("test_site_php");
$id = $_GET['id'];
if(isset($_POST['delete']))
{
$sql="DELETE FROM php_news WHERE id=$id";
mysql_query($sql);
echo "Information deleted <a href=select.php>BACK</a>";
}
else{
?>
<form action="" method="post">
<input type="submit" name="delete" value="DELETE" />

</form>
<form action="select.php" method="">
<input type="submit" name="notdelete" value="NO" />

</form>

<?php
}
?>

</body>
</html>