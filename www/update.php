<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>�������� �������</title>
</head>
<body>
<?php
$getid	= $_GET['id'];
include_once "G_value.php";
mysql_connect($server_db,$user_db,$password_db);
mysql_select_db($name_db);
//$getid	= intval($getid);
if (preg_match("/^[\d]+$/",$getid))
{
	$sql	= "SELECT * FROM news WHERE id='$getid'";
	$res	= mysql_query($sql);
	$news	= mysql_fetch_array($res);
}
else
{
	echo "�� ���������� id";
}
if(isset($_POST['ok']))
	{
		$datas	= trim(htmlspecialchars($_POST['datas']));
		$title	= strtoupper(trim(htmlspecialchars($_POST['title'])));
		$txt	= trim(htmlspecialchars($_POST['txt']));
		$hot	= $_POST['hot'];
		if (strlen($datas)!=0 and strlen($title)!=0 and strlen($txt)!=0)
			{
				$sql	= "UPDATE news SET `dates`='$datas', `names`='$title', `texts`='$txt', `hot`='$hot' WHERE id='$getid';";
				mysql_query($sql);
				echo "������� ������� ��������� <a href='select.php'>������� �� �������� ��������</a>";
			}
			else
				{
					echo "��������� ����!!!";
					?>
					<form method="post" action="">
					������� ����:<input type="text" name="datas" value="<? echo $news['dates'] ?>"/><br />
					������� ���������:<input type="text" name="title" value="<? echo $news['names'] ?>"/><br />
					������� �����:<br />
					<textarea cols="10" rows="10" name="txt"><? echo $news['texts'] ?></textarea><br />
					<?php
					if ($news['hot']==0)
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
					<input type="submit" name="ok" value="��������� �������"/>
					</form>
					<?php
				}
	}
	else
		{
?>
<form method="post" action="">
������� ����:<input type="text" name="datas" value="<? echo $news['dates'] ?>"/><br />
������� ���������:<input type="text" name="title" value="<? echo $news['names'] ?>"/><br />
������� �����:<br />
<textarea cols="10" rows="10" name="txt"><? echo $news['texts'] ?></textarea><br />
<?php
if ($news['hot']==0)
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
<input type="submit" name="ok" value="��������� �������"/>
</form>
<?php
		}
?>
</body>
</html>
