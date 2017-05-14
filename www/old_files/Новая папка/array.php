<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
	$s = array("chislo","rename","copy","unlink","round");
	echo $s[4]."<br />";
	print_r($s)."<br />";
	echo count($s)."<br />";
	echo current ($s)."<br />";
	end ($s);
	echo current ($s)."<br />";
	reset ($s);
	next ($s);
	echo current ($s)."<br />";
	prev ($s);
	echo current ($s)."<br />";
	next ($s);
	echo current ($s)."<br />";
	next ($s);
	echo current ($s)."<br />";
	echo key ($s)."<br />";
	$e = array_rand ($s);
	echo $s[$e]."<br />";
	echo current ($s)."<br />";
	foreach ($s as $k=>$v){
	echo $k,$v;	
	}
?>
</body>
</html>