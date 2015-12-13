<?php

	// This function uses a callback function.  The argument is a sub routine with a variable in it
	function vatTot($sampleNum, $sumtotal)
	{
	    /*$netTot = 50;*/
		$vatAmt = addVat($sampleNum);
		$sumtotal($vatAmt);
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


	// Call vatTot() and pass our sample callback function's name.
	$net = 40;
	vatTot($net, 'printSumTotal');  

?>