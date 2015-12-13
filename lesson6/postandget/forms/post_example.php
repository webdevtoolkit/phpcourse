<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Form Example</title>
		<meta http-equiv="content-type"
				content="text/html; charset=utf-8"/>
	</head>
	<body>
		<p>
			<?php
			/*Instead of using get we are using the POST method.  This has several advantages over GET:
			 1.) It is more secure
			 2.) You can transer a larger array of data
			
			*/
			
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			echo 'Welcome to our web site, ' .
					htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
					htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
			?>
		</p>
	</body>
</html>