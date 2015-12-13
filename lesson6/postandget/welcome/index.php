<?php
if (!isset($_REQUEST['firstname']))
{
	//includes are useful for factoring out code and compartmentalising components
	include 'form.html.php';
}
else
{
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	
	if ($firstname == 'Toby' and $lastname == 'Harris')
	{
		$output = 'Welcome,' . $firstname .'!';
	}
	else
	{
		$output = 'Welcome to our web site, ' .
				htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
				htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
	}

	include 'welcome.html.php';
}
?>
