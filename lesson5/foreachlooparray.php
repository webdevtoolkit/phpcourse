<html>
<head><title>Lesson 6 - Foreach loop</title><head>
<body>
<?php
//Create indexed array
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;

//Call PHP's inbuilt count array function 
$result = count($a);
$i = 0;

//Construct for loop
//NOTE: < operator as all arrays start with zero which in array terms counts as one
foreach($a as $row)
{

 if($row == 3)
 {
  echo $row;
 }
 else
 {
  echo "This is not three!";
 
 }
 

}


?>

</body>
</html>