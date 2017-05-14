<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
if($_POST['ok'])
{
$text1=($_POST['text']);
if(preg_match('/^[A-Za-z0-9_.-]+@[A-Za-z0-9.-]+\.(ru|com|net)$/',$text1))
{
	echo "E-mail введен верно";
}
else
{ echo "E-mail введен не верно";
}
}
?>
<form action="" method="post">
<input type="text" name="text"/>
<input type="submit" name="ok"/>
</form>
<br/>
</body>
</html>