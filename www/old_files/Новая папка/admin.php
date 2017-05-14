<?php
session_start();
if(isset($_POST['ok2']))
{
	session_destroy();
	header("Location:admin.php");
	}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>admin</title>
</head>

<body>
<?php
if(isset($_SESSION['user']))
{
	echo "Бог любит тебя,проходи";
	
	?>
    
    <br>
	<form action="" method="post">
	<input type="submit" name="ok2" value="Kill session" />
    </form>
    
    
	<?php
    
}
elseif(isset($_POST['ok']))
{
	$gthvfytyn=$_POST ['gthvfytyn'];
	$cegth=$_POST ['cegth'];
	if(strlen($gthvfytyn)!=0 and strlen($cegth)!=0)
	{
		mysql_connect("localhost","root","")or die (mysql_error());
		mysql_select_db("users");
		$sql = "SELECT * FROM user WHERE login='$gthvfytyn' and pass='$cegth'";
		$result = mysql_query($sql);
		
			if(mysql_num_rows($result)!=0)
			{
			
			$user=mysql_fetch_array($result);
			
				if($user['login']==$gthvfytyn and $user['pass']==$cegth)
				{
				$_SESSION['user']=md5("$ghjcnjnfr");
				echo "Бог любит тебя,проходи";
				?>
    
    <br>
	<form action="" method="post">
	<input type="submit" name="ok2" value="Kill session" />
    </form>
    
    
	<?php
			
				}
			
			}
			else {echo "Пароль не верный! <br><a href=admin.php>BACK</a>";}
		}
	
	
	}

else{

?>
	<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
	  <tr>
	    <td align="center" valign="baseline" >
 

<form action="" method="post">
	
    <br>
	Логин <input type="text" name="gthvfytyn"/>
	<br><br><br>
	Пароль<input type="password" name="cegth"/>
	<br><br>
	<input type="submit" name="ok" value="check" />
    <br>
    <a href=registr.php>Зарегайся</a>
    </form>
    
    </td>
      </tr>
  </table>
<?php
 
 }

?>
</body>
</html>