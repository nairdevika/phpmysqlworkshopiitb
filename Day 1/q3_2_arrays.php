<?php
	$matA = array (
		array (10,20),
		array (30,40)
	);
	$matB = array (
		array (1,2),
		array (3,4)
	);
	$matC = array ();
	for($i=0 ; $i<2 ; $i++) {
		for($j=0 ; $j<2 ; $j++) {
			$matC[$i][$j] = $matA[$i][$j] + $matB[$i][$j];
			echo $matC[$i][$j]. " ";
		}
		echo "<br>";
	}
?> 
