<html>
<head><title>Lesson 3 - Conditional Operators</title><head>
<body>
<?php
    $instructorsName = "Toby";
    $studentName = "Sarah";
    
    if($instructorsName == "George")
    {
      echo "Hi $instructorsName - you are teaching PHP and MySQL today!";

    }
    elseif($instructorsName == "Toby")
    {
      echo "Welcome to the PHP5 and MySQL course $studentName!";

    }
    else
    {
      echo "Are you sure there are any students on this course?";

    }
?>
</body>
</html>