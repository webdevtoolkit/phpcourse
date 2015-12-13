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
			 2.) You can transfer a larger array of data
			
			*/
			
			  
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$tel = $_POST['tel'];
			
	    if (!is_numeric($tel)) {
                   echo "$tel is not a valid telephone number.";
            }
            else
            {
              echo "Hi $firstname, thanks for registering!";

            }
			
	?>
	</p>
	</body>
</html>