<?php
session_start();
if($_POST['exit'])
		  {
		session_destroy();
		  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>avtopizasciya</title>
</head>

<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("testsite_users");
if($_POST['ok'] and strlen($_POST['login'])!=0 and strlen($_POST['pass'])!=0)
{
$garen=$_POST['login'];
$xinjao=$_POST['pass'];
$sql="SELECT * FROM polsovateli WHERE login='$garen'"; 
$result=mysql_query($sql);
$katarina=mysql_fetch_array($result);
if($garen==$katarina['login'] and $xinjao==$katarina['password'])
	{
	$_SESSION['scorpion']=md5($garen);
	}
}

if(!$_SESSION['scorpion']){
?>
<br />
<br />
<form action="" method="post">
Логин<br />
<input type="text" name="login"/>
<br />
Пароль<br />
<input type="password" name="pass"/>
<br/>
<input type="submit" name="ok" value="Авторизация"/>
<?php
}
?>
<br/>
<?php
if($_SESSION['scorpion'])
{
?>
Этот текст секретный
<br />
<form action="" method="post">
<input type="submit" name="exit" value="Выйти"/>
<?php
}
?>
</body>
</html>