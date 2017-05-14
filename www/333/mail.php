<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
if (isset($_POST['send']))
{
	$name=$_POST['fio'];
	$mobile=$_POST['phone'];
	$pochta=$_POST['email'];
	$soob=$_POST['message'];
	if (strlen($name)!=0 and strlen($mobile)!=0 and strlen($pochta)!=0 and strlen($soob)!=0 and preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,8}$/",$pochta))
	{
	$msg="fio polzovatelya <h1> $name </h1>; 
	telephone polz $mobile;
	pochta polz $pochta
	text soob $soob";
	$header="Content-type: text/html; charset='windows-1251'";
	$header.="From: $name <$pochta>";
	$header.="Subject: Отзыв";
	$header.="Content-type: text/html; charset='windows-1251'";
	mail("alla@mail.ru","soob", $msg, $header);
	echo "Vashe pismo otpravleno!";}
	
	
	else 
	{
		echo "Zapolnite polya";
		?>
        <form action="" method="post">
<input type="text" name="fio" value="<?php echo $name ?>"/>
<br/>
<input type="text" name="phone" value="<?php echo $mobile ?>"/>
<br/>
<input type="text" name="email" value="<?php echo $pochta ?>"/>
<br/>
<textarea cols="10" rows="5" name="message" >
<?php echo $soob ?>
</textarea>
<br/>
<input type="submit" name="send" value="send"/>
</form>
        <?php
	}
}
else
{
?>
<form action="" method="post">
<input type="text" name="fio" value=""/>
<br/>
<input type="text" name="phone" value=""/>
<br/>
<input type="text" name="email" value=""/>
<br/>
<textarea cols="10" rows="5" name="message" >
</textarea>
<br/>
<input type="submit" name="send" value="send"/>
</form>
<?php
}
?>

</body>
</html>