<html>
<head><title>Lesson 5 - Continue</title><head>
<body>
<?php

    $x=1;  
    echo 'List of odd numbers between 1 to 10 <br />';  
    while ($x<=10)  
    {  
     if (($x % 2)==0)  
     {  
      $x++;  
      continue;  
     }  
     else  
     {  
      echo $x.'<br />';  
      $x++;  
     }  
    }  
?>

</body>
</html>