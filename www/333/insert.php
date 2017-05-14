<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
mysql_connect ("localhost","root", "");
mysql_select_db ("my_data_base");
if (isset($_POST['save']))
				 {
					 $novo=iconv("utf-8","windows-1251", ucfirst(htmlspecialchars($_POST['news1'])));
					 $dat=strip_tags($_POST['date1'], "<br><a>");
					 $auth=trim($_POST['author1']);
					 $log=$_POST['login1'];
					 $pass=md5($_POST['password1']);
					 $path=$_SERVER['DOCUMENT_ROOT']."/";
					 move_uploaded_file($_FILES['photo1']['tmp_name'], $path.$_FILES['photo1']['name']);
					 $photoname=$_FILES['photo1']['name'];
					 $sql="INSERT INTO novosti (news, date, author, photo, login, password) VALUES ('$novo', '$dat', '$auth', '$photoname', '$log', '$pass' )";
					 mysql_query ($sql);
					 echo "Otpravleno! <a href='select.php'>Obratno</a>";
				 }
	else
	{
		
		
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="text" name="news1" value=""/>
<br/>
<input type="text" name="date1" value=""/>
<br/>
<input type="text" name="author1" value=""/>
<br/>
<input type="text" name="login1" value=""/>
<br/>
<input type="password" name="password1" value=""/>
<br/>
<input type="file" name="photo1" />
<br/>
<input type="submit" name="save" value="sohranit"/>
<br/>
</form>
<?php
	}
	?>
</body>
</html>