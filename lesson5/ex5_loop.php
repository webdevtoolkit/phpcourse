<html>
<head><title>Lesson 5 - Foreach loop</title><head>
<body>
<?php


$test_array=array(20, 30, 40);
foreach ($test_array as $row)
  {
   if($row < 40)
   {
    echo $row . "<br />";
   }
  }

?>

</body>
</html>