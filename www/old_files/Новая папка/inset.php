<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>inset</title>
</head>

<body>
<?php
if(isset($_POST['ok']))
{
	$data = ucwords($_POST['data']);
	$zagalovok = trim ($_POST['zagalovok']);
	$text = strtoupper ($_POST['text']);
		$path=$_SERVER['DOCUMENT_ROOT']."/images/";
		move_uploaded_file($_FILES['photo']['tmp_name'],$path.$_FILES['photo']['name']);// добавление  картинки
		$imgnews = $_FILES['photo']['name'];
		mysql_connect("localhost","root","")or die (mysql_error());
		mysql_select_db("test_site_php");
		$sql = "INSERT INTO php_News(chislo,tema,text,image)VALUES('$data','$zagalovok','$text','$imgnews')                   ";
		mysql_query($sql);
		echo "данные отправлены <a href = 'select.php'>вернуться</a>";
		
	}
	


?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="data"  /><br/>
	<input type="text" name="zagalovok"  /><br/>
	<textarea name="text" cols="40" rows="20">
	</textarea><br/>
    <input type="file" name="photo" /> 
	<input type="submit" name="ok" value="ok" />
</form>

</body>
</html>