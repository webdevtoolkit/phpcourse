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
// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0] . "</br>"; // piece1
echo $pieces[1] . "</br>"; // piece2

// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
//list Assign variables as if they were an array
//List does reuire you to have the same amount of variables as exploded elements
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $uid . "</br>"; // foo
echo $pass; // *

?>


		

	</body>
</html>