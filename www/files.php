<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Отправить форму</title>
</head>
<body>
<?php
 if(isset($_POST['send']))
   {
	 $path	= $_SERVER['DOCUMENT_ROOT']."/upload/";
	 move_uploaded_file($_FILES['infile']['tmp_name'],$path.$_FILES['infile']['name']) or die("Ошибка при отправке");
	 echo "Файл отправлен";
   }
?>
<form method="post" action="" enctype="multipart/form-data">
 <input type="file" name="infile"/>
 <br/>
 <br/>
 <input type="submit" name="send" value="Отправить"/>
</form>
</body>
</html>