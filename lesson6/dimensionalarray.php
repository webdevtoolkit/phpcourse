<html>
<head><title>Lesson 6 - Multi-dimensional arrays</title><head>
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
  
  
  echo "Shakespeare's " . $shakespearePlays['Tragedies'][1] .
" is a tragedy"; 


?>

</body>
</html>