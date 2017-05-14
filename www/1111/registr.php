<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
mysql_connect("localhost","root", "") or die (mysql_error());
mysql_select_db("test_site_php") or die (mysql_error());

	if (isset($_POST['send']))
		{	
		$log=$_POST['login'];
		$pas=$_POST['pass'];
				if (strlen ($log)!=0 and strlen($pas)!=0)
						{
						$sql2 = "SELECT* FROM users";
						$result= mysql_query($sql2);
						if (mysql_num_rows($result)>1) 
									{
									$sql= "INSERT INTO users(login, password) VALUES('$log','$pas')";
									mysql_query($sql);
									echo "Пользователь добавлен";
									}
									else { 
											echo "данный пользователь уже существует";
										}
						}
		}
		else
		{
					 
		
?>

<form action="" method="post">
Введите логин &nbsp; <input type="text" name="login" /> 
<br />
Введите пароль &nbsp; <input type="password" name="pass" />
<br />
<input type="submit" name="send" />
<br />
</form>
<?php
}
?>

</body>
</html>