<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Файл загрузка</title>
</head>

<body>
<?php

if (isset($_POST['sent']))
	{
		if ($_FILES['file']['size']<=300000000 and $_FILES['file']['type']=="image/jpeg")
		{
$fname = time(pathinfo($_FILES['file']['name'], PATHINFO_FILENAME )).".jpg";
$path = $_SERVER['DOCUMENT_ROOT']."/upload/";
move_uploaded_file ($_FILES['file']['tmp_name'], $path.$fname);
echo "Файл успешно загружен";
	}
	else
	{
	echo "Превышен объем файла";	
	}
		}
?>
<form  action="" method="post" enctype="multipart/form-data">
<input type = "file" name ="file"/> <br/>
<input type="submit" name="sent" value= "отправить"/>
</form>
</body>
</html>