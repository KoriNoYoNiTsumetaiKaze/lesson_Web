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

if (isset($_POST['otpravka']))
{$fio=trim($_POST['fio']);
$email=$_POST['email'];
$phone=$_POST['phone'];
$sql="INSERT INTO users(fio, email,phone) VALUES('$fio','$email','$phone')";
mysql_query($sql);
echo("Данные добавлены <a href='insert.php'> Добавить еще </a><br />
 <a href='select.php'>
 Вернуться </a>  " );


}
else {
	
	


?>

<form method="post" action="">
фио     <input type="text" name="fio"  /> <br />
почта   <input type="text" name="email" /><br />
телефон <input type="text" name="phone" /><br />
<input type="submit" name="otpravka" value="Отправить" />
</form>
<?php
}
?>
</body>
</html>