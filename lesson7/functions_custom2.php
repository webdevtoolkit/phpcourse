<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Lesson 7 - Sort array example</title>
		<meta http-equiv="content-type"
				content="text/html; charset=utf-8"/>
	</head>
	<body>
		<p>
			<?php
			//This function is designed to take an argument - in this case a material a chair is made of
			function chairFinish($material)
			{
			echo $material . " finish.<br />";
			}

			echo "The chair is a ";
			chairFinish("Oak");
			echo "The chair is a ";
			chairFinish("Mild steel");
			echo "The chair is a ";
			chairFinish("Pine");
                        ?>
			
		</p>
	</body>
</html>