<html>
<head><title>Lesson 3 - Conditional Operators</title><head>
<body>
<?php
    $a = 10;
    $b = 20;
	
    /*Ternary operators are if/else statements in shorthand*/
    
    /* If condition is true then assign a to result otheriwise b */
    $result = ($a > $b ) ? $a : $b;
    echo "TEST1 : Value of result is $result<br/>";
    /* If condition is true then assign a to result otheriwise b */
    $result = ($a < $b ) ? $a : $b;
    echo "TEST2 : Value of result is $result<br/>";
	
    /* most basic usage of ternary operators */
    $var = 5;
    $var_is_greater_than_two = ($var > 2 ? true : false); // returns true
	
    /*TIP: when learning how to use ternary operators write them in if/else first*/	
?>
</body>
</html>