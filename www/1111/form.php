<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Форма отправки письма</title>
</head>

<body>

<?php
 if(isset($_POST['ok']))
{
$fio=$_POST['fio'];
$pochta=$_POST['mail'];
$text=$_POST['text'];
$fail1=$_POST['first'];
$fail2=$_POST['second'];
$fail3=$_POST['third'];
 
 if($_FILES ['$fail1']['size']<=1000 or $_FILES ['$fail2']['size']<=1000 or $_FILES ['$fail3']['size']<=1000)
{
 if(strlen($fio)!=0 and strlen($pochta)!=0 and strlen($text)!=0)
{
$msg="ФИО: $fio
Имейл: $email
Текст: $text
Файл1: $fail1
Файл2: $fail2
Файл3: $fail3";
mail("anton35@mail.ru","письмо с mail.php",$msg,"");
echo "ОТПРАВЛЕНО <br><a href=form.php>Вернуться</a>";

}

else{echo "НЕ ОТПРАВЛЕНО-Не все поля заполнены"

?>

<table width="100%" height="100%" align="center" >
<td align="center" height="100%" width="100%">
<form action="" method="post">
<table width="100%" border="0">
  
  <tr>
    <td width="14%" align="left"><strong>Введите своё имя</strong></td>
    <td width="24%" align="left"><input type="text" name="fio" /></td>
    <td width="62%" rowspan="7" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><strong>Введите адрес своей почты </strong></td>
    <td align="left"><input type="text" name="mail" /></td>
    </tr>
  <tr>
    <td align="left"><strong>Введите сообщение </strong></td>
    <td align="left"><textarea cols="40" rows="10" name="text">
          </textarea></td>
    </tr>
  
  <tr>
    <td align="left"><strong>Отправим файл </strong></td>
    <td align="left"><input type="file" name="first" value="выберите файл для отправки"/></td>
    </tr>
  <tr>
    <td align="left"><strong>Отправим файл </strong></td>
    <td align="left"><input type="file" name="second" value="выберите файл для отправки"/></td>
    </tr>
  <tr>
    <td align="left"><strong>Отправим файл </strong></td>
    <td align="left"><input type="file" name="third" value="выберите файл для отправки"/></td>
    </tr>
  <tr>
    <td width="14%" align="left"><strong>Отправить)</strong></td>
    <td width="24%" align="left"><input type="submit" name="ok" /></td>
    </tr>
</table>
<br />
<br />
</form>
</td>
</table>
<?php
}

}
else{echo "big fail <br>";}
}

else{
?>
<table width="100%" height="100%" align="center" >
<td align="center" height="100%" width="100%">
<form action="" method="post">
<table width="100%" border="0">
  
  <tr>
    <td width="14%" align="left"><strong>Введите своё имя</strong></td>
    <td width="24%" align="left"><input type="text" name="fio" /></td>
    <td width="62%" rowspan="7" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><strong>Введите адрес своей почты </strong></td>
    <td align="left"><input type="text" name="mail" /></td>
    </tr>
  <tr>
    <td align="left"><strong>Введите сообщение </strong></td>
    <td align="left"><textarea cols="40" rows="10" name="text">
          </textarea></td>
    </tr>
  
  <tr>
    <td align="left"><strong>Отправим файл </strong></td>
    <td align="left"><input type="file" name="first" value="выберите файл для отправки"/></td>
    </tr>
  <tr>
    <td align="left"><strong>Отправим файл </strong></td>
    <td align="left"><input type="file" name="second" value="выберите файл для отправки"/></td>
    </tr>
  <tr>
    <td align="left"><strong>Отправим файл </strong></td>
    <td align="left"><input type="file" name="third" value="выберите файл для отправки"/></td>
    </tr>
  <tr>
    <td width="14%" align="left"><strong>Отправить)</strong></td>
    <td width="24%" align="left"><input type="submit" name="ok" /></td>
    </tr>
</table>
<br />
<br />
</form>
</td>
</table>
<?php
}
?>
</body>
</html>
