<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������</title>
</head>
<body>
<?php
$datas	= "";
$title	= "";
$txt	= "";
$hot	= 1;
if(isset($_POST['ok']))
	{
		$datas	= trim(htmlspecialchars($_POST['datas']));
		$title	= strtoupper(trim(htmlspecialchars($_POST['title'])));
		//$title	= iconv("cp1251","utf-8",$title);
		$txt	= trim(htmlspecialchars($_POST['txt']));
		$hot	= $_POST['hot'];
		if (strlen($datas)!=0 and strlen($title)!=0 and strlen($txt)!=0)
			{
				$path	= $_SERVER['DOCUMENT_ROOT']."/upload/";
				move_uploaded_file($_FILES['infile']['tmp_name'],$path.$_FILES['infile']['name']) or die("������ ��� ��������");
				echo "<p>���� ���������</p>";
				$photo	= $_FILES['infile']['name'];
				include_once "G_value.php";
				mysql_connect($server_db,$user_db,$password_db);
				mysql_select_db($name_db);
				$sql	= "INSERT INTO news(`dates`, `names`, `texts`, `hot`, `photo`) VALUES('$datas','$title','$txt','$hot','$photo');";
				mysql_query($sql);
				echo "������� ������� ��������� <a href='select.php'>������� �� �������� ��������</a>";
				echo "<p>��� �������� ��� ����:<p/>";
				$datas	= "";
				$title	= "";
				$txt	= "";
				$hot	= 1;
			}
			else
				{
					echo "��������� ����!!!";
				}
	}
?>
<form method="post" action="" enctype="multipart/form-data">
	������� ����:<input type="text" name="datas" value="<?php echo $datas; ?>"/><br />
	������� ���������:<input type="text" name="title" value="<?php echo $title; ?>"/><br />
	������� �����:<br />
	<textarea cols="10" rows="10" name="txt">	<?php echo $txt; ?>
	</textarea><br />
	<?php
		if ($hot==0)
			{
				?>
				<input type="radio" name="hot" value="1"/>������� �������<br />
				<input type="radio" name="hot" value="0" checked="checked"/>������� �������<br />
				<?php
					}
						else
							{
							?>
								<input type="radio" name="hot" value="1" checked="checked"/>������� �������<br />
								<input type="radio" name="hot" value="0"/>������� �������<br />
							<?php
							}
							?>
    <input type="file" name="infile"/>
    <br/>
	<input type="submit" name="ok" value="��������� �������"/>
</form>
</body>
</html>