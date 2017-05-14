<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>

<?php
 
     mysql_connect ("localhost","root","");
          mysql_select_db ("myfirstshop");
     $id=$_GET['id'];
         $sql="SELECT * FROM users WHERE id='$id'";
             $res=mysql_query ($sql);
			     $users=mysql_fetch_array ($res);
		if (isset($_POST['send'])){
			 $f=$_POST['fio'];
	            $e=$_POST['email'];
	               $p=$_POST['phone'];
		$sql2="UPDATE users SET fio='$f', email='$e', phone='$p' WHERE id='$id'"; 
     mysql_query ($sql2);
			
			echo "Data change <a href='select.php'>Назад</a>";
		   
		}
		
		   else{

?>

<form method="post" action="">

fio<input type="text" name="fio" value="<?php echo $users['fio'] ?>" /><br />
email<input type="text" name="email" value="<?php echo $users ['email'] ?>" /><br />
phone<input type="text" name="phone" value="<?php echo $users ['phone']?>" /><br />
<input type="submit" name="send" value="go" />

</form>

<?php
  
  }

?>


</body>
</html>