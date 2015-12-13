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
                            //This function is designed to take two arguments - you can use as many arguments as you want in a function 
                            //If you are using more than say half a dozen consider writing a separate function since you might be cramming too 
                            //much into one script
                            function chairDimensions($height,$width)
                            {
                             echo "Width " . $height . ", Height " . $width . "<br />";
                            }

                            echo "Chair dimensions:  ";
                            chairDimensions("900mm","500mm");
                            echo "Chair dimensions:  ";
                            chairDimensions("800mm","600mm");
                            echo "Chair dimensions:  ";
                            chairDimensions("1200mm","450mm");
                        ?>

		</p>
	</body>
</html>