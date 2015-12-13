<?php

$shop = array( array("tent", 60.00),
               array("knife", 7.99),
               array("boots", 20.00) 
             ); 
 


echo "<h1>Using loops to display array elements</h1>";

echo "<ol>";
for ($row = 0; $row < 3; $row++)
{
    echo "<li><b>The row number $row</b>";
    echo "<ul>";
	
	
    
	
    for ($col = 0; $col < 2; $col++)
    {
	  
	  if($shop[$row][$col] > 8.00)
	  {
	    $shop[$row][$col] += 10.00;
        
		
	  }
	
	echo "<li>".$shop[$row][$col]."</li>";
	  
	  
    
	}

    echo "</ul>";
    echo "</li>";
}
echo "</ol>";

?>