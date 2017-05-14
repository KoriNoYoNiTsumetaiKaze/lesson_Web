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
   $id=$_GET ['id'];
	 if (isset ($_POST['delete'])) {
		 $sql="DELETE FROM users WHERE id='$id'";
   mysql_query ($sql);
  
        echo "Data delete <a href='select.php'>Вернуться </a>";
		 
		  }
		 
		   else{
				 
?>

 <form action="" method="post" >
  <input type="submit" name="delete" value="удалить" />
 </form><br /><br />

 
 <form action="select.php" method="post" >
  <input type="submit" name="back" value="вернуться" />
 </form><br /><br />


<?php
}
?>



</body>
</html>