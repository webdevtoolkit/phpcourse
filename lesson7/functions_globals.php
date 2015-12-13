<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lesson 7 - callback functions</title>
		<meta http-equiv="content-type"
				content="text/html; charset=utf-8"/>
	</head>
	<body>
		

		
<?php
// This example uses a callback function.
$cost = 5;
$shipping = 10;
//Watch the total cost figure
$total_cost = 10;

function addShipping()
{
	global $total_cost, $cost, $shipping;
	$total_cost = $cost + $shipping;
}

addShipping();
echo $total_cost . "</br>";

//Using the $GLOBALS keyword


function addShipping2()
{
$GLOBALS['total_cost'] = $GLOBALS['cost'] + $GLOBALS['shipping'];
}

addShipping2();
echo $total_cost . "</br>";




?>
		

	</body>
</html>