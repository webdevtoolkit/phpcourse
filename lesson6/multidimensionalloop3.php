<html>
<head><title>Lesson 6 - Multi Dimensional arrays and 3D arrays</title><head>
<body>

<?php

//Imagine you wanted to split your aarray up into categories
//You can add another dimension to your array to accomplish this

$shop = array(array(array("potatoes", 1.25, 15),
                    array("Runner beans", 0.75, 25),
                    array("Tomatoes", 1.15, 7) 
                   ),
              array(array("potatoes", 1.55, 25),
                    array("Runner beans", 0.55, 50),
                    array("Tomatoes", 1.15, 10) 
                   ),
             array(array("potatoes", 2.25, 15),
                    array("Runner beans", 0.50, 25),
                    array("Tomatoes", 2.15, 6) 
                   )
             );
			 

//As this array has only numeric indexes, we can use nested for loops to display it:
			 
echo "<ul>";
for ( $layer = 0; $layer < 3; $layer++ )
{
    echo "<li>The layer number $layer";
    echo "<ul>";
   
    for ( $row = 0; $row < 3; $row++ )
    {
       echo "<li>The row number $row";
       echo "<ul>";
     
        for ( $col = 0; $col < 3; $col++ )
        {
            echo "<li>".$shop[$layer][$row][$col]."</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</li>";
}  
echo "</ul>";


//The list produced is quite vanilla in that it declares data by row number.  
//To make it more intuitive the next step would be to use a database and create an array based on that.  
//We will be looking at databases in lesson 13

?>

	 



</body>
</html>