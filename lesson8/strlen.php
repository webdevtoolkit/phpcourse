<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lesson 8 - strlen function</title>
		<meta http-equiv="content-type"
				content="text/html; charset=utf-8"/>
	</head>
	<body>
		

		
<?php
//Spaces or whitespace characters are included as part of the count
$test_string = "Toby Harris";




if(!strlen($test_string))
{
 echo "Name required.";

}
else
 echo strlen($test_string);

?>
		

	</body>
</html>