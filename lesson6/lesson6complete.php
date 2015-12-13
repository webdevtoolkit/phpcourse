<html>
<head><title>Lesson 6 - Foreach loop</title><head>
<body>
<?php

$shakespearePlays = array
  (
  "Comedies"=>array
  (
  "Twelfth Night",
  "Two Gentlemen of Verona",
  "Comedy of Errors"
  ),
  "Histories"=>array
  (
  "Henry V"
  ),
  "Tragedies"=>array
  (
  "Hamlet",
  "Macbeth",
  "Romeo and Juliet"
  )
  ); 

//Construct while loop
//NOTE: < operator as all arrays start with zero which in array terms counts as one
$i=0;
for($i=0; $i<=6; $i++)
{
 //$play = $row[0];
 echo "result" . $shakespearePlays[$i];
}


?>

</body>
</html>