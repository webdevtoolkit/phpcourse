<?php

	// This function uses a callback function.  The argument is a sub routine with a variable in it
	$netTot = 50;
	
	
	function vatTot($price, $sumtotal)
	{
	    
		$vat = addVat($price);
		$sumtotal($vat);
	}

	function addVat($netTot)
	{
	
	  //Here it is
	  $gross = ($netTot / 100) * 17;
	  return $gross;
	
	}


	// This is a sample callback function for doIt().
	/*$data = 50;*/
	function printSumTotal($data)
	{
		echo 'VAT is: ', $data, "\n";
	}


	// Call doIt() and pass our sample callback function's name.
	vatTot($netTot, 'printSumTotal');  

?>