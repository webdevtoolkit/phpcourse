<html>
<head><title>Lesson 6 - Multi Dimensional arrays and associative arrays</title><head>
<body>



<?php

//Instead of accessing arrays by row and column number you can use associative arrays as row indexes

$shop = array( array( "Title" => "Wall Bracket", 
                      "Price" => 1.25,
                      "Number" => 15 
                    ),
               array( "Title" => "Screws", 
                      "Price" => 0.75,
                      "Number" => 25,
                    ),
               array( "Title" => "Washers", 
                      "Price" => 1.15,
                      "Number" => 7 
                    )
             );

//It is easier to access data this way as you can refer by name to the column or row you require 
//However, note that you cannot use the for loop as before but instead you must use "foreach"			 
			 
			 
echo "<h1>Manual access to each element from associative array</h1>";

for ($row = 0; $row < 3; $row++)
{
    echo $shop[$row]["Title"]." costs ".$shop[$row]["Price"]." and you get ".$shop[$row]["Number"];
    echo "<br />";
}

echo "<h1>Using foreach loop to display elements</h1>";

echo "<ol>";
for ($row = 0; $row < 3; $row++)
{
    echo "<li><b>The row number $row</b>";
    echo "<ul>";

    foreach($shop[$row] as $key => $value)
    {
        echo "<li>".$value."</li>";
    }

    echo "</ul>";
    echo "</li>";
}
echo "</ol>";

//Remember the row in this case is the individual array and the column is the variable within that array
?>

</body>
</html>