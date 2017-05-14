<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>mail</title>
</head>

<body>

<?php
if (isset($_POST['ok']))
			{
			$fio=$_POST['fio'];
			$phone=$_POST['phone'];
			$Email=$_POST['Email'];
			$textarea=$_POST['textarea'];
if (strlen ($fio)!=0 and strlen($phone)!=0 and strlen($Email)!=0 and strlen ($textarea)!=0 && preg_match ("/^[a-zA-Z0-9._-
																									]+@[a-zA-Z0-9._-]\.(ru|com|net)$/",$Email))
{
	

			$text="<strong>Вам пишет:</strong> $fio<br />

			<strong>телефон:</strong> $phone<br />

			<strong>сообщение:</strong> $textarea<br />";
			$header="Content-type:text/html; charset:'windows-1251'";
			$header.="From:'$fio'<$Email>";
			$header.="Subject:text of this maillll";
			$header.="Content-type:text/html; charset:'windows-1251'";
			mail("alsergf@mail.ru", "от $fio", $text,$header);
			echo"письмо отправлено";						
			}
			else {
				echo "Заполните все поля";
				?>
                <form action="" method="post">
	<input type="text" name="fio"/>
	<br />

	<input type="text" name="phone"/>
	<br />
    <input type="text" name="Email"/>
	<br />
	<textarea cols="30" rows="5" name="textarea">
		</textarea>
	<br />
	<input type="submit" name="ok" value="send" />	<!--send to server-->
	<br />
	</form>
                <?php
				
				}
				}

else{

?>

	<form action="" method="post">
	<input type="text" name="fio"/>
	<br />

	<input type="text" name="phone"/>
	<br />
    <input type="text" name="Email"/>
	<br />
	<textarea cols="30" rows="5" name="textarea">
		</textarea>
	<br />
	<input type="submit" name="ok" value="send" />	<!--send to server-->
	<br />
	</form>
<?php
	
}
?>
</body>
</html>
