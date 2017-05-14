<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
	mysql_connect ("localhost","root", "");
	mysql_select_db ("my_data_base");
	$id1=$_GET['id'];
	$sql="SELECT * FROM novosti WHERE id='$id1'";
	$result=mysql_query ($sql);
	$perem=mysql_fetch_array($result);
	if (isset($_POST['save']))
	{
		$novo=$_POST['news1'];
		$dat=$_POST['date1'];
		$auth=$_POST['author1'];
		$update="UPDATE novosti SET news='$novo', date='$dat', author='$auth' WHERE id='$id1' ";
		mysql_query ($update);
		echo "Obnovleno! <a href='select.php'>Nazad!</a>";
	}
	else
	{
?>
<form action="" method="post">
<input type="text" name="news1" value="<?php echo $perem['news'] ?>"/>
<br/>
<input type="text" name="date1" value="<?php echo $perem['date'] ?>"/>
<br/>
<input type="text" name="author1" value="<?php echo $perem['author'] ?>"/>
<br/>
<input type="submit" name="save" value="sohranit"/>
<br/>
</form>
<?php } ?>
</body>
</html>