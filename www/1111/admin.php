<?php 
session_start();
if (isset($_POST['quit']))
{
session_destroy();
header("Location:admin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>
<?php
if (isset ($_SESSION['user'])) 
{
	echo "Авторизация успешна"; 
?>
	<form action="" method="post">
	<input type="submit" name="quit" value="выход" />
    </form>
<?php
}
		elseif (isset($_POST['send']))
		{
			$log=$_POST['login'];
			$pas=$_POST['pass'];
					if (strlen ($log)!=0 and strlen($pas)!=0)
					{
						mysql_connect("localhost","root", "") or die (mysql_error());
						mysql_select_db("test_site_php") or die (mysql_error());
						$sql = "SELECT * FROM users WHERE login = '$log' AND password = '$pas'";
						$result= mysql_query($sql);
							if (mysql_num_rows($result)!=0) 
								{ 
									$user = mysql_fetch_array($result);
									if ($user['login']==$log and $user['password']==$pas)
										{
											$_SESSION['user']= md5("ctvmz");
											echo "авторизация успешна";
											?>
	<form action="" method="post">
	<input type="submit" name="quit" value="выход" />
    </form>
<?php
										}
								}
					}
		
		}
		else 
			 {
			 
					 ?>

<body>
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