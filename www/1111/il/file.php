<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
if($_POST['ok'])
{
$path=$_SERVER['DOCUMENT_ROOT']."/upload/";
if($_FILES['file']['type']=="image/jpg")
{
move_uploaded_file($_FILES['file']['tmp_name'],$path.$_FILES['file']['name']);
echo "file uploaded";
}
else {
echo "xa-xa-xa";
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILES_SIZE" value="5000000"/>
<input type="file" name="file"/>
<br/>
<input type="submit" name="ok" value="отправить файл"/>
<br/>

</form>
</body>
</html>