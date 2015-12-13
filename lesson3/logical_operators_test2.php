
<html>
<head><title>PHP5 & MySQL Lesson 3 - Logical Test 2</title><head>
<body>
<?php

    //Test two:  If one variable has something in it the condition will be TRUE - but if both have nothing then condition is FALSE
	
    $a = 42;
    $b = 0;
    
    if( $a || $b ){
       echo "TEST3 : Either a or b is true<br/>";
    }else{
       echo "TEST3 : Both a and b are false<br/>";
    }
    if( $a or $b ){
       echo "TEST4 : Either a or b is true<br/>";
    }else{
       echo "TEST4 : Both a and b are false<br/>";
    }
    
?>
</body>
</html>





