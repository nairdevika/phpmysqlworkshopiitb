<?php

	$var = 'e';
	switch(strtoupper($var)) {

		case 'A':
		case 'E':
		case 'I':
		case 'O':
		case 'U': 
		echo "$var is a vowel";
		break;

		default:
		echo "$var is a consonant";
	}

?>