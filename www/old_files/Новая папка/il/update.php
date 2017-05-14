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
$id=$_GET['id'];
$sql="SELECT * FROM polsovateli WHERE id='$id'"; 
$result=mysql_query($sql);
$catalog=mysql_fetch_array($result);
if($_POST['ok'])
{
if($_FILES['file']['size']!=0);
{
$path=$_SERVER['DOCUMENT_ROOT']."/upload/";
unlink("$path".$catalog['photo']);
move_uploaded_file($_FILES['file']['tmp_name'],$path.$_FILES['file']['name']);
}
$fio1=$_POST['fio'];
$gendr1=$_POST['gendr'];
$mail1=$_POST['mail'];
$login1=$_POST['login'];
$password1=$_POST['password'];
if($_FILES['file']['size']!=0)
{
$file=$_FILES['file']['name'];
}
else
{
$file=$catalog['photo'];
}
$sql1="UPDATE polsovateli SET fio='$fio1', gendr='$gendr1', mail='$mail1', login='$login1', password='$password1', photo='$file' WHERE id='$id'";
mysql_query($sql1);
echo "даные отправленны. <br/><a href='select.php'>ИзыдИ</a>";
}
else
{
?>
<form action="" method="post" enctype="multipart/form-data">
fio<br/><input type="text" name="fio" value="<?php echo $catalog['fio']?>"/><br/>
mail<br/><input type="text" name="mail" value="<?php echo $catalog['mail']?>"/><br/>
gender<br/><input type="text" name="gender" value="<?php echo $catalog['gender']?>"/><br/>
login<br/><input type="text" name="login" value="<?php echo $catalog['login']?>"/><br/>
password<br/><input type="text" name="password" value="<?php echo $catalog['password']?>"/><br/>
photo<br/><input type="file" name="file"/><br/>
<img src='/upload/<?php echo $catalog['photo'] ?>' width='130'/><br/>
<input type="submit" name="ok"/>
</form>
<?php
}
?>
</body>
</html>