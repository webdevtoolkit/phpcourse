<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lesson 7: HTML Special Char Example</title>
		<meta http-equiv="content-type"
				content="text/html; charset=utf-8"/>
	</head>
	<body>
		<p>
			<?php
			$name = $_GET['name'];
			
			//Without the function 
			echo 'Welcome to our training session,' . $name . '!</br>';
			
			//With the function
			echo 'Welcome to our training session, ' .
					htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '!';
					
					/*htmlspecialchars($name, ENT_QUOTES, 'UTF-8') has three parameters: 
					  1.) is the variable taken from the get statement 
					  2.) is a built-in method in PHP to convert single or double quotes and other special characters into normal text objects
					  3.) The library required for character encoding
					
					*/
			?>
		</p>
	</body>
</html>