<?php

 $order = 60;
 $discount_threshold = 50;
 $discount = 20;
 $discount_total = 0;
 
 if($order >= $discount_threshold )
 {
  $discount_total += $order;
  $discount_total -= $discount;
   echo "Congratulations, you are entitled to 20 percent off your order!</br>Your new order amount is: $discount_total";
 
 }

?>