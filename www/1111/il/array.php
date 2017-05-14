<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>array</title>
</head>

<body>
<?php
$a=array("city"=>"kirov", "kazan", "bishkek", "karakol", "moskva", "london", "paris");
echo $a[0];
print_r($a);
echo count($a);
echo current($a);
end($a);
echo current ($a);
echo key($a);
prev($a);
echo current($a);
next($a);
echo current($a);
reset($a);
echo current($a);
array_pop($a);
print_r($a);
array_shift($a);
print_r($a);
array_push($a, "china");
print_r($a);
array_unshift($a, "york");
print_r($a);
unset($a[0]);
print_r($a);
sort($a);
print_r($a);
rsort($a);
print_r($a);
arsort($a);
print_r($a);
ksort($a);
print_r($a);
krsort($a);
print_r($a);
shuffle($a);
print_r($a);
echo array_rand($a);
$b="ahri";
echo $b['0']; 
echo array_search("china", $a);
for($i=0;$i<4;$i++){
echo $a[$i];
}
foreach($a as $key=>$value){
echo "</br>$key $value";
}
?>
</br>
<?="files";?>
</body>
</body>
</body>
</html>