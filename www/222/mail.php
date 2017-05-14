<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Untitled Document</title>
</head>

<body>
<?php
if (isset($_POST['otzyv']))
{$fio=$_POST['fio'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$otzyv=$_POST['otzyv'];
$msg="фио: $fio
      эл. почта: $email
	  номер телефона: $phone_number
	  отзыв: $otzyv ";
if (strlen ($fio)!=0 and strlen ($email)!=0 and strlen ($phone_number)!=0 and strlen ($otzyv)!=0){	  
mail("ffff@mail.ru","otzyv s sajta",$msg,"");
echo "отзыв отправлен";
}else{
	echo "не все поля заполнены"; ?>
<form action="" method="post">
<input type="text" name="fio" value="<?php echo $fio ?>" />
<br/>
<input type="text" name="email" value="<?php echo $email ?>" />
<br/>
<input type="text" name="phone_number" value="<?php echo $phone_number ?>" />
<br/>
<textarea cols="5" rous="7" name="otzyv"><?php echo $otzyv ?></textarea>
<input type="submit" name="otpravka" />
</form>
    <?php
	}
	} 
else
{

?>

<form action="" method="post">
<input type="text" name="fio" />
<br/>
<input type="text" name="email" />
<br/>
<input type="text" name="phone_number" />
<br/>
<textarea cols="5" rous="7" name="otzyv">

</textarea>
<input type="submit" name="otpravka" />
</form>
<?php 
}
?>
</body>
</html>
