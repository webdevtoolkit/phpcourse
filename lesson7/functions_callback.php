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
		// This function uses a callback function.
function doIt($callback)
{
    $data = "CPR Helpdesk";
    $callback($data);
}


// This is a sample callback function for doIt().
function myCallback($data)
{
    echo 'App is: ', $data, "\n";
}


// Call doIt() and pass our sample callback function's name.
doIt('myCallback');  
		?>

	</body>
</html>