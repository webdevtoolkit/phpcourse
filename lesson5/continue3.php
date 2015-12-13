 <?php  
	
	/*Continue statement is used in loops to skip the current iteration and move to the next iteration.*/
	/*This example gives scores for a game but not for stage 4*/
	
    $stages = array(50, 110, 130, 71, 203);
    $count = count($stages);

	for ($i=0; $i<$count; $i++) {

		if ($i == 3) {
			continue;
		}

		echo 'Stage '.($i+1).' Score: '.$stages[$i].'<br />';

	}
?>