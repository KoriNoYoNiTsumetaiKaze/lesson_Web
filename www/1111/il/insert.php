<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("testsite_uzers");
if($_POST['ok'])
{
$fio1=trim($_POST['fio']);
$gendr1=trim($_POST['gendr']);
$mail1=trim($_POST['mail']);
$login1=trim($_POST['login']);
$password1=trim($_POST['password']);
$file1=$_FILES['file']['name'];
$sql="INSERT INTO polsovateli(fio, gendr, mail, login, password, photo) VALUES('$fio1','$gendr1', '$mail1',  '$login1', '$password1', '$file1')";
mysql_query($sql);
$path=$_SERVER['DOCUMENT_ROOT']."/upload/";
move_uploaded_file($_FILES['file']['tmp_name'],$path.$_FILES['file']['name']);
echo "даные отправленны. <a href='select.php'>ИзыдИ</a>";
}
?>
<form action="" method="post" enctype="multipart/form-data">
fio<br/><input type="text" name="fio"/><br/>
gendr<br/><input type="text" name="gendr"/><br/>
mail<br/><input type="text" name="mail"/><br/>
login<br/><input type="text" name="login"/><br/>
password<br/><input type="text" name="password"/><br/>
photo<br/><input type="file" name="file"/><br/>
<input type="submit" name="ok"/>
</form>
</body>
</html>