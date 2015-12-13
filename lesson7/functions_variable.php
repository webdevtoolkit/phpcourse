<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lesson 7 - Variable function calls</title>
		<meta http-equiv="content-type"
				content="text/html; charset=utf-8"/>
	</head>
	<body>
		
<?php
		function foo() {
			echo "In foo()<br />\n";
		}

		function bar($arg = '')
		{
			echo "In bar(); argument was '$arg'.<br />\n";
		}

		// This is a wrapper function around echo
		function echoit($string)
		{
			echo $string;
		}

		$func = 'foo';
		$func();        // This calls foo()

		$func = 'bar';
		$func('test');  // This calls bar()

		$func = 'echoit';
		$func('test');  // This calls echoit()
		?>

	</body>
</html>