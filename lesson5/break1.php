<html>
<head><title>Lesson 5 - Break statement</title><head>
<body>
<?php

$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach($arr as $val) {
    if ($val == 'stop') {
        break;    
    }
    echo "$val<br />\n";
}
?>
</body>
</html>