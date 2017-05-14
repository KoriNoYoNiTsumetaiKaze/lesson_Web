<?php
	if (isset($_POST['notdel']))
	{
		header("Location:select.php");
	}
?>

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
	if (isset ($_POST['del']))
	{
		$delpic="SELECT photo FROM novosti WHERE id='$id1'";
		$var=mysql_query ($delpic);
		$delpicnew=mysql_fetch_array($var);
		unlink ($delpicnew['photo']);
		$delete="DELETE FROM novosti WHERE id='$id1'";
		mysql_query ($delete);
		echo "Udaleno! <a href='select.php'>Spisok novostej</a>";
	}
	else
	{
?>
<form action="" method="post">
<input type="submit" name="del" value="Delete">
<input type="submit" name="notdel" value="Not Delete">
</form>
<?php
	}
	?>

</body>
</html>