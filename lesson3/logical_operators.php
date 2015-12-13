
<html>
<head><title>PHP5 & MySQL Lesson 3 - Logical Operators</title><head>
<body>
<?php

    //Test one:  If both have something in them the condition will be TRUE - else FALSE
	
    $a = 40;
    $b = 1;
    
    if( $a && $b ){
       echo "TEST1 : Both a and b are true<br/>";
    }else{
       echo "TEST1 : Either a or b is false<br/>";
    }
	
	//Here we are using the 'and' operator
	
	if( $a and $b ){
       echo "TEST2 : Both a and b are true<br/>";
    }else{
       echo "TEST2 : Either a or b is false<br/>";
    }
    
?>
</body>
</html>





