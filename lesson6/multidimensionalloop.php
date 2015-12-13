<html>
<head><title>Lesson 6 - Foreach loop</title><head>
<body>



<?php
//Accessing data in multi-dimensional arrays

//Create array

$shop = array( array("rose", 1.25 , 15),
               array("daisy", 0.75 , 25),
               array("orchid", 1.15 , 7) 
             ); 


//Shop array now contains three arrays	

//With one dimensioanl arrays you need the array name and index 
//In two dimensional arrays you need row and column
//Bit like a table > Table name > table row > Table column

//You can access data manually - like so

echo "<h1>Manual access to each element</h1>";

echo $shop[0][0]." costs ".$shop[0][1]." and you get ".$shop[0][2]."<br />";
echo $shop[1][0]." costs ".$shop[1][1]." and you get ".$shop[1][2]."<br />";
echo $shop[2][0]." costs ".$shop[2][1]." and you get ".$shop[2][2]."<br />";

//Remember arrays start with zero

echo "<h1>Using loops to display array elements</h1>";

echo "<ol>";
for ($row = 0; $row < 3; $row++)
{
    echo "<li><b>The row number $row</b>";
    echo "<ul>";

    for ($col = 0; $col < 3; $col++)
    {
        echo "<li>".$shop[$row][$col]."</li>";
    }

    echo "</ul>";
    echo "</li>";
}
echo "</ol>";	



	 

?>

</body>
</html>