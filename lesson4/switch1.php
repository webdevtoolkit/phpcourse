<html>
<head><title>Lesson 3 - Conditional Operators</title><head>
<body>
<?php
    $weekday = "Tuesday";
    
    
    switch($weekday)
    {
	
	  case 'Sunday' : echo "Day off!";
	  break;
	  case 'Monday' : echo "Admin day";
	  break;
	  case 'Tuesday' : echo "Evening course";
	  break;
	  case 'Wednesday' : echo "Interactive Media year one";
	  break;
	  case 'Thursday' : echo "Interactive Media year two";
	  break;
	  case 'Friday' : echo "PHP Course HND Computer Science";
	  break;
	  case 'Saturday' : echo "Morning workshop";
	  break;
	  default : echo "The day you have put in is not valid!<br>";
         exit();
	
    }
	
    //echo "<br>This code is executed if none of the conditions of the switch statement have been met";
?>
</body>
</html>