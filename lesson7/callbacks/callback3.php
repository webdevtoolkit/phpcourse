<?php

	// This function uses a callback function.  The argument is a sub routine with a variable in it
	function vatTot($sumtotal)
	{
	    /*$netTot = 50;*/
		$data = addVat();
		$sumtotal($data);
	}
	
	
	function addVat()
	{
	
	  //Here it is
	  $gross = ($data / 100) * 17;
	  return $gross;
	
	}


	// This is a sample callback function for vatTot().
	/*$data = 50;*/
	function printSumTotal($data)
	{
	   $data = 50;
	   echo 'VAT is: ', $data, "\n";
	}


	// Call doIt() and pass our sample callback function's name.
	vatTot('printSumTotal');  

?>