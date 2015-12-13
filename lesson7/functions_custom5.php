<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lesson 7 - Arguments and functions</title>
		<meta http-equiv="content-type"
				content="text/html; charset=utf-8"/>
	</head>
	<body>
		<p>
			<?php
			    //Use include once rather than "include" - this is a tidier way if the code within the include file will be used more than once throughout the page request
			    include_once "functions.inc.php";
				
				//The function is bieng called directly in the string that is being outputted to the user
				echo "Price of chair is: &pound100 + &pound16 delivery,</br>Total: &pound" . totalPrice(100,16) . "</br>";
				
				//For more complex functions you can do this:
				$total = totalPrice(100,16);
				echo "Price of chair is: &pound100 + &pound16 delivery,</br>Total: &pound" . $total . "</br>";
				

?>



			
		</p>
	</body>
</html>