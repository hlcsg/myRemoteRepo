<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>BMI計算結果</p>
<hr />
<?php
$height= $_GET['height'];

$weight= $_GET['weight']; 

$BMI = number_format($weight/($height/100)**2,1);
echo "身高: $height cm <br/>";
echo "體重: $weight kg <br/>";
echo "BMI: $BMI <br/>";


?>

</body>
</html>
