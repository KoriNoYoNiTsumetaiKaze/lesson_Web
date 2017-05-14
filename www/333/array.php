<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
	$a=array(1, 2, "privet", 5, 6, "key"=>"slovo", 78);
	echo $a['key'];
	echo "<br/>";
	print_r ($a);
	echo "<br/>";
	echo count($a);
	echo "<br/>";
	echo key ($a);
	echo "<br/>";
	array_push ($a, "yes");
	print_r ($a);
	echo "<br/>";
	unset ($a[3]);
	print_r ($a);
	echo "<br/>";
	for ($i=0; $i<count($a); $i++)
	{
		if (strlen($a[$i])!=0)
		{
		echo $a[$i];
		echo "<br/>";}
	}
	foreach ($a as $index=>$value)
	{
		echo "$index @ $value";	
		echo "<br/>";
	}
	
	
?>
</body>
</html>