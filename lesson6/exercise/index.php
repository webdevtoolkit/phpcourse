<?php
 
$campEquipment['Tent'] = "60.00";
$campEquipment['knife'] = "6.99";
$campEquipment['Camping stove'] = "18.00";
$campEquipment['Walking boots'] = "34.95";
$campEquipment['Sleeping bag'] = "9.00";
$campEquipment['Camping Chairs'] = "20.00";

foreach($campEquipment AS $row)
{
 
 if($row == 20.00)
 {
   $row += 10.00;
   echo "P&P added to:" . $row . "<br>";
 
 }

}

?>