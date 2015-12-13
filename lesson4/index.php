<!DOCTYPE HTML>
<html>

<head>
<title>Exercise 6 Complete </title>
<meta charset="utf-8"/>

</head>
<body>
<?php

$product = 20.00;
$product_pp = 0;
if($product == 20.00)
{

 $product_pp = $product;
 $product_pp += 10.00;
 
 echo "Product without P&P:" . $product . "<br> Product with 10 pounds P&P:" . $product_pp . "<br>";
 

}

?>

</body>
</html>