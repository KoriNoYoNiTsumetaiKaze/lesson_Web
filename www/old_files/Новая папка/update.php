<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>update</title>
</head>

<body>
<?php
$id = $_GET['id'];



		mysql_connect("localhost","root","")or die (mysql_error());
		mysql_select_db("test_site_php");
		$sql = "SELECT * FROM php_News WHERE id = '$id'";
		$result = mysql_query($sql);
		$news = mysql_fetch_array($result);
		if(isset($_POST['ok']))
		{
	$data = $_POST['data'];
	$zagalovok = $_POST['zagalovok'];
	$text = $_POST['text'];
			
			$sql2="UPDATE php_news SET chislo='$data',tema='$zagalovok',text='$text' WHERE id='$id' LIMIT 1";
			mysql_query($sql2);
			echo "Новость обновлена <a href=select.php>BACK</a>";
			}
		else{
		

?>
<form action="" method="post">
    <input type="text" name="data" value="<?php echo $news['chislo'] ?>"  /><br/>
	<input type="text" name="zagalovok" value="<?php echo $news ['tema']?>"  /><br/>
	<textarea name="text" cols="40" rows="20"><?php echo $news ['text'] ?>
	</textarea><br/>
	<input type="submit" name="ok" value="ok" />
</form>
<?php
		}
?>
</body>
</html>