<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>registr</title>
</head>

<body>
<?php
mysql_connect("localhost","root","")or die (mysql_error());
mysql_select_db("users");

if(isset($_POST['ok']))
{	$gthvfytyn=$_POST ['gthvfytyn'];
	$cegth=$_POST ['cegth'];
	
	if(strlen($gthvfytyn)!=0 and strlen($cegth)!=0)
	{
		$sql2="SELECT* FROM user login='$gthvfytyn'";
		$result=mysql_query($sq2);
			if(mysql_num_rows($result)==0)
			
			{
		
		
	$sql="INSERT INTO user(login,pass) VALUES('$gthvfytyn','$cegth')";
	mysql_query($sql);
	echo "Пользователь добавлен <br><a href=admin.php>BACK</a>";
			}else {
			echo "Пользователь такой уже есть";	
			}
	}
	
}
else {
?>



<form action="" method="post">
	
    <br>
	Логин <input type="text" name="gthvfytyn"/>
	<br><br><br>
	Пароль<input type="password" name="cegth"/>
	<br><br>
	<input type="submit" name="ok" value="REGISTR" />
    
    </form>
    <br>
    <a href=admin.php>BACK</a>
    <?php
}
?>
</body>
</html>