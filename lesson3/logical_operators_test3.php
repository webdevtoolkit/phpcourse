
<html>
<head><title>PHP5 & MySQL Lesson 3 - Logical Test 3</title><head>
<body>
<?php

    //Test three:  Using the ! or 'not' operator
    /**************************
	Essentially the not operator tests if a condition is false - it is then it is true.
	For example if a variable has nothing in it - it will be TRUE
	
    **************************/
	
   $a = 10;
    $b = 20;
    if( $a ){
       echo "TEST5 : a is true <br/>";
    }else{
       echo "TEST5 : a  is false<br/>";
    }
    if( $b ){
       echo "TEST6 : b is true <br/>";
    }else{
       echo "TEST6 : b  is false<br/>";
    }
    if( !$a ){
       echo "TEST7 : a is true <br/>";
    }else{
       echo "TEST7 : a  is false<br/>";
    }
    if( !$b ){
       echo "TEST8 : b is true <br/>";
    }else{
       echo "TEST8 : b  is false<br/>";
    }
    
?>
</body>
</html>





