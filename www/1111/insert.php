<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>
<body>
<?php
if (isset($_POST['ok']))
	{ 
	$data = trim ($_POST['data']);
	$zag = trim ($_POST['zag']);
	$text = trim ($_POST['tekst']);
	$path = $_SERVER['DOCUMENT_ROOT']."/images/";
move_uploaded_file ($_FILES['image']['tmp_name'], $path.$_FILES['image']['name']);
$imgnews= $_FILES['image']['name'];
mysql_connect("localhost","root", "") or die (mysql_error());
mysql_select_db("test_site_php") or die (mysql_error());
$sql= "INSERT INTO php_news(chislo, tema, tekst, image) VALUES('$data','$zag','$text', '$imgnews')";
mysql_query($sql);
echo "Данные добавлены <a href = 'select.php'>Веркуться </a>";
	}		 
?>
<form action="" method="post" enctype="multipart/form-data">

	<input type="text" name="data"/>
	<br />
    <input type="text" name="zag"/>
	<br />
    <textarea cols="30" rows="5" name="tekst">
		</textarea>
        <br />
     <input type="file" name="image"/>  
        <br />
		
	<input type="submit" name="ok" value="send" />	<!--send to server-->
	<br />
	</form>
</body>
</html>