<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Пишите нам!</title>
</head>
<body>
<?php
if(isset($_POST['key']))
 {
	 $from	= $_POST['fio'];
	 $adr	= $_POST['email'];
	 $txt	= $_POST['text'];
	 if (strlen($from)!=0 and strlen($adr)!=0 and strlen($txt)!=0 and preg_match("/^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.(ru|com|net)$/",$adr))
	  {
		 $msg	= "От: $from
			Собщение: $txt
			Для связи: $adr";
		mail("my@ya.ru","Письмо с сайта",$msg,"");
		echo "Ваше сообщение успешно отправлено";
	  }
	  else
	   {
		   echo "ЗАПОЛНИТЕ ПОЛЯ!!!";
		   ?>
            <form method="post" action="#">
             ФИО:
             <input type="text" name="fio" value="<?php echo $from; ?>"/>
             <br/>
             <br/>
             e-mail:
             <input type="text" name="email" value="<?php echo $adr; ?>"/>
             <br/>
             <br/>
              Текст письма:
             <br/>
             <textarea name="text" cols="20" rows="10"><?php echo $txt; ?></textarea>
             <br/>
             <br/>
             <input type="submit" name="key" value="Отправить"/>
            </form>           
           <?php
	   }
 }
 else
  {
?>
<form method="post" action="#">
 ФИО:
 <input type="text" name="fio"/>
 <br/>
 <br/>
 e-mail:
 <input type="text" name="email"/>
 <br/>
 <br/>
  Текст письма:
 <br/>
 <textarea name="text" cols="20" rows="10">
 </textarea>
 <br/>
 <br/>
 <input type="submit" name="key" value="Отправить"/>
</form>
<?php
  }
?>
</body>
</html>