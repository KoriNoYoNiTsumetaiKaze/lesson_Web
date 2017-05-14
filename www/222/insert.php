<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
  
    mysql_connect ("localhost","root","");
          mysql_select_db ("myfirstshop");
  if (isset($_POST['send'])) { 
	     $f=trim($_POST['fio']);
	        $e=$_POST['email'];
	           $p=$_POST['phone'];
			      $sql="INSERT INTO users (fio, email, phone) VALUES ('$f','$e','$p')";
          mysql_query ($sql);
  
        echo "Данные отправлены <a href='insert.php'>Добавить еще</a> <a href='select.php'>Вернуться</a>";
			    
	 
		 
	 }
	     else{
		
		 
?>


<form method="post" action="">

fio<input type="text" name="fio" value="" /><br />
email<input type="text" name="email" value="" /><br />
phone<input type="text" name="phone" value="" /><br />
<input type="submit" name="send" value="go" />

</form>

<?php
}
?>


</body>
</html>