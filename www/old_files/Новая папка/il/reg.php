<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>ereg</title>
</head>

<body>
<?php
if($_POST['ok'])
{
$text2=$_POST['text'];
if(preg_match("/^[A-Za-z0-9_.-]+@[A-Za-z0-9.-]+\.(ru|com|net)$/",$text2))
{
echo "Добро пожаловать)))))))";
}
else 
{
echo "Попал ты чел";
}
}
else
{
?>
<form action="" method="post">
<input type="text" name="text"/>
<br/>
<input type="submit" name="ok" value="нажми на кнопку"/>
<br/>
</form>
<?php
}
?>
</body>
</html>