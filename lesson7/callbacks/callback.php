<?php

	// This function uses a callback function.  The argument is a sub routine
	function doIt($callback)
	{
		$data = acquireData();
		$callback($data);
	}
	
	
	function acquireData()
	{
	
	  //Here it is
	  return "Toby Harris";
	
	}


	// This is a sample callback function for doIt().
	function myCallback($data)
	{
		echo 'Data is: ', $data, "\n";
	}


	// Call doIt() and pass our sample callback function's name.
	doIt('myCallback');  

?>