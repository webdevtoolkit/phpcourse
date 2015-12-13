<html>
<head><title>Lesson 6 - Multi-dimensional arrays</title><head>
<body>
<?php
//Create indexed array
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;

//Call PHP's inbuilt count array function 
$result = count($a);
$i = 0;

//Construct while loop
//NOTE: < operator as all arrays start with zero which in array terms counts as one
while($i < $result)
{
 echo $a[$i];
 $i++;

}

?>

</body>
</html>