<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������� ��� ��������</title>
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
echo("������ ��������� <a href='insert.php'> �������� ��� </a><br />
 <a href='select.php'>
 ��������� </a>  " );


}
else {
	
	


?>

<form method="post" action="">
���     <input type="text" name="fio"  /> <br />
�����   <input type="text" name="email" /><br />
������� <input type="text" name="phone" /><br />
<input type="submit" name="otpravka" value="���������" />
</form>
<?php
}
?>
</body>
</html>