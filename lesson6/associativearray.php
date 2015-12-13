<html>
<head><title>Lesson 6 - Associative arrays</title><head>
<body>
<?php
    //In this example we are assigning ages to students
    $student_ages = array("Peter"=>50, "Paul"=>30, "Mary"=>34); 

    echo "Paul is " . $student_ages['Paul'] . " years old.<br/>";

    //This is the same as the above example but shows a different way of assiging values
    $books['Swallows and Amazons'] = "Arthur Ransom";
    $books['Oliver Twist'] = "Charles Dickens";
    $books['Pride and Prejudice'] = "Jane Austen";

    echo "Pride and Prejudice is written by " . $books['Pride and Prejudice'];
 
?>

</body>
</html>