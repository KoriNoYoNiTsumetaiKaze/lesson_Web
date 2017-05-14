<?php
	session_start ();
	if (isset ($_POST['exit']))
	{
		session_destroy ();
		header ("Location: login.php");	
		}		
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>

<?php
$forma='<form action="" method="post">
<input type="text" name="login1" value=""/>
<br/>
<input type="password" name="pass1" value=""/>
<br/>
<input type="submit" name="save" value="войти"/>
<br/>
</form>';
	if (isset($_SESSION['today']))
	{
		echo "Вы вошли в систему!";
		?>
        <form action="" method="post">
        <input type="submit" name="exit" value="exit" />
        <br/>
        </form>
        <?php }
	
	elseif (isset ($_POST['save']))
	{
		
		$log=strtolower(strip_tags(trim($_POST['login1'])));
		$pass=md5(strtolower(strip_tags(trim($_POST['pass1']))));
		
		if (strlen ($log)!=0 and strlen($pass)!=0)
		{
		mysql_connect ("localhost", "root", "");
		mysql_select_db ("my_data_base");
		$id1="SELECT login, password FROM novosti WHERE login='$log'";
		$result=mysql_query($id1);
		if (mysql_num_rows($result)!=0)
		{
		$perem=mysql_fetch_array($result);
		
		if ($log==$perem['login'] and $pass==$perem['password'] )
		{
		$_SESSION['today']=session_id();
		echo "Вы вошли в систему!";
		?>
        <form action="" method="post">
        <input type="submit" name="exit" value="exit" />
        <br/>
        </form>
        <?php } else {echo "Nepravilnuj parol!";
						echo  $forma;}
		
		}
		else {echo "Polzovatel ne suschestvuet";
				echo  $forma;}
	}
	else {echo "Поля не заполнены"; 
			echo  $forma;}
} else {

echo $forma;
} ?>
</body>
</html>