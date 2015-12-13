<?php
    $var1 = 'PHP'; // Assigns a value of 'PHP' to $var1
    $var2 = 5; // Assigns a value of 5 to $var2
    $var3 = $var2 + 1; // Assigns a value of 6 to $var3
    $var2 = $var1; // Assigns a value of 'PHP' to $var2

    echo "<ul>";
    echo "<li>$var1</li>"; // Outputs 'PHP'
    echo "<li>$var2</li>"; // Outputs 'PHP'
    echo "<li>$var3</li>"; // Outputs '6'
    echo '<li>' . $var1 . ' is ace!</li>'; // Outputs 'PHP is ace'
    echo "<li>$var1 is ace!</li>"; // Outputs 'PHP is ace!'
    echo '<li>$var1 is ace!</li>'; // Outputs '$var1 is ace!'
    echo "</ul>"
?>