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
			$shakespearePlays = array("Hamlet", "Much Ado About Nothing", "Macbeth", "Comedy of Errors", "Loves Labors Lost", "Alls Well That Ends Well");
			
			//This will by default sort in ascending order
sort($shakespearePlays);

//rsort

//Good resource for sorting arrays: http://www.php.net/manual/en/function.sort.php
foreach ($shakespearePlays as $key => $val) {
    echo "shakespeare plays [" . $key . "] = " . $val . "</br>";
}

//Lets try counting the array
 //$shakespeareSonnets = array();
 $result = count($shakespearePlays);
 

 if(!$result)
 {
  echo "There are no sonnets registered at the moment!";
 
 }
 else
 {
   echo "There are $result records listed.</br>";
 
 }


			?>
		</p>
	</body>
</html>