<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dr</title>
</head>

<body>
<?php
	if(isset($_POST['ok']))
	{$pas=$_POST ['pas'];
	$text=$_POST ['text'];
	$email=$_POST ['email'];
	
	if(strlen($pas)!=0 and strlen($text)!=0 and strlen($email)!=0){
	$msg="password: $pas
		email: $email
		Text: $text";
		mail("adel78@mail.ru","письмо с mail.php",$msg,"");
		if($_FILES['file']['size'] <=1000000)
	{
		$path=$_SERVER['DOCUMENT_ROOT']."/upload/";
		 move_uploaded_file($_FILES['file']['tmp_name'],$path.$_FILES['file']['name']);}
		echo "Отправлено";}
	
		else {echo "Не отправлено";
        
		
		?>

	<form action="" method="post" enctype="multipart/form-data">
    Ведите пароль <td/>
	<input type="password" name="pas" />
    <br />
    Ведите email
    <input type="text" name="email" />
    <br />
    Комментарий
	<textarea name="text" rows="20" cols="40">
    </textarea>
    <br />
    прикрепить картинку
    <input type="file" name="file"  />
    <input type="submit" name="ok" value="Отправить" />
    </form>
    <?php
		}
		}
		else{
			
    ?>
    	<form action="" method="post" enctype="multipart/form-data">
		<input type="password" name="pas" />
    	<br />
    	<input type="text" name="email" />
    	<br />
		<textarea name="text" rows="20" cols="40">
    	</textarea>
   		 <br />
   		<input type="file" name="file"  />
   		 <input type="submit" name="ok" value="Отправить" />
   		 </form>
         <?php
		}
		?>
	</body>
	</html>