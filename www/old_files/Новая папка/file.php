<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������� ��� ��������</title>
</head>
<?php
if(isset($_POST['ok'])){
	if($_FILES['photo']['size']<=3000000 and $_FILES['photo']['type']=="image/jpeg"){
	
	$fname = time (pathinfo ($_FILES ['photo']['name'],PATHINFO_FILENAME)).'.jpg';
	$path=$_SERVER['DOCUMENT_ROOT']."/upload/";
	move_uploaded_file($_FILES['photo']['tmp_name'],$path.$fname);
	 echo  "����������";
	
	}
	 else {echo "�� ����������";}
																		
	
	}


?>
	<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="photo"  />
<input type="submit" name="ok" value="�������a" />
 	</form>




</body>
</html>