<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
$a=$_POST['fio'];
echo $a;
if(isset($_POST['ok']))
{
$fio=$_POST['fio'];
$phone=$_POST['phone'];	
$text=$_POST['text'];
if(strlen($fio)!=0 and strlen($phone)!=0 and strlen($text)!=0){

$msg="ФИО: $fio 
телефон: $phone 
текст сообщения: $text";
mail("gfarik@mail.ru","письмо с сайта", $msg, "");
echo "письмо успешно отправлено";}
}

?>
 <form action="" method="post">
   <input name="fio" type="text"/>
   <br/><br/>
   <input name="phone" type="text"/>
    <br/><br/>
   <textarea cols="30" rows="15" name="text"></textarea> 
    <br/><br/>
   <input type="submit" name="ok"/>
  </form>
 
</body>
</html>