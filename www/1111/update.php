<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
$id = $_GET['id'];
mysql_connect("localhost","root", "") or die (mysql_error());
mysql_select_db("test_site_php") or die (mysql_error());
$sql="SELECT* FROM php_news WHERE id='$id'"; // создание запроса
$result = mysql_query($sql); // отпровка запроса
$news = mysql_fetch_array($result);
if (isset($_POST['ok']))
{
$data = $_POST['data'];
	$zag = $_POST['zag'];
	$text = $_POST['tekst'];	
$sql2 =  "UPDATE php_news SET chislo='$data',tema='$zag',tekst='$text' WHERE id='$id'";
mysql_query($sql2); // отпрвка запроса на обновление
echo "Новости обновлены<a href = 'select.php'>Веркуться </a>";
	}
	else {
		
?>

<form action="" method="post">

	<input type="text" name="data" value="<?php echo $news['chislo']  ?>"/>
	<br />
    <input type="text" name="zag" value="<?php echo $news['tema']?>"/>
	<br />
  <textarea cols="30" rows="5" name="tekst"> <?php echo $news['tekst'] ?></textarea>
<br />
		
	<input type="submit" name="ok" value="send" />	<!--send to server-->
	<br />
	</form>
<?php } ?>    
</body>
</html>