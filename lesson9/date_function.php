<?php
echo date("d/m/Y") . "<br />";
echo date("Y.m.d") . "<br />";
echo date("Y-m-d") . "<br />";
?> 

<?php
//Make time: mkTime
echo "<h2>Make time </h2>";
$tomorrow = mktime(0,0,0, date("m")+1, date("d"), date("Y"));
echo "Tomorrow is ".date("d/m/Y", $tomorrow) . "<br />";
?> 

<?php
echo "<h2>getdate example</h2>";
echo "This will output the following array:<br />";
print_r(getdate());
?> 


<?php
//making use of the array
// Array ( [seconds] => 31 [minutes] => 16 [hours] => 20 [mday] => 18 [wday] => 6 [mon] => 8 [year] => 2012 [yday] => 230 [weekday] => Saturday [month] => August [0] => 1345320991 ) 
echo "<h2>Make use of the getDate array</h2>";
echo "This will output the following array:<br />";
$my_t=getdate(date("U"));
print("$my_t[weekday], $my_t[month] $my_t[mday], $my_t[year]");
?> 