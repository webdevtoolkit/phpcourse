<?php
if (!isset($_POST['firstname']))
{
	//includes are useful for factoring out code and compartmentalising components
	include 'form.html.php';
}
else
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	
	if ($firstname == 'Toby' and $lastname == 'Harris')
	{
		$output = 'Welcome to FutureTrend,' . $firstname .'!';
	}
	else
	{
		$output = 'Welcome to FutureTrend, ' .
				htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
				htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
	}

	include 'welcome.html.php';
}
?>
