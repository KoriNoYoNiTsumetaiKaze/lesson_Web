<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Документ без названия</title>
</head>

<body>
<?php
$arr= array("ttt"=>"bye", "hi", "blue", "short");
echo $arr[0]."<br>";
print_r ($arr);
echo count($arr);
echo current($arr);
end ($arr);
echo current($arr);
reset ($arr);
echo current($arr);
next($arr);
echo current($arr);
next($arr);
echo current($arr);
prev($arr);
echo current($arr)."<br>";
echo key($arr);

echo array_rand($arr)."<br />";
$r= array_rand($arr);
echo $arr[$r]."<br />";
shuffle($arr)."<br />";
print_r($arr);
sort($arr);
print_r($arr);
unset($arr[3]);
print_r($arr);
array_unshift($arr, "world"); 
echo "<br />";
print_r($arr);
echo "<br />";
reset ($arr);
foreach ($arr as $k=>$v)
{
	echo "$k=>$v"."<br/>";
	}
?>

</body>
</html>