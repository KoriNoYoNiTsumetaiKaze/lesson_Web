<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("bazadannyh");
$id=$_GET['id'];
$sql="SELECT * FROM users WHERE id='$id' " ;
$res=mysql_query($sql);
$users=mysql_fetch_array ($res);
if (isset($_POST['otpravka'])	)
{$fio=$_POST['fio'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$sql2="UPDATE users SET fio='$fio', email='$email',phone='$phone' WHERE id='$id'";
mysql_query($sql2);
echo "Данные изменены <a href='select.php'>Вернуться</a>";

}
else {
?>
<form method="post" action="">
фио     <input type="text" name="fio" value="<?php echo $users['fio']?>" /> <br />
почта   <input type="text" name="email" value="<?php echo $users['email']?>"/><br />
телефон <input type="text" name="phone" value="<?php echo $users['phone']?>"/><br />
<input type="submit" name="otpravka" value="Отправить" />
</form>
<?php
}
?>

</body>
</html>