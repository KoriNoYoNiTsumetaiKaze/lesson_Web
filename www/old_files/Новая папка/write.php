<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>write</title>
</head>

<body
<?php
$f = fopen("text.html","a");
fwrite($f,"text <br> forn <br>");
fclose($f);


?>
</body>
</html>