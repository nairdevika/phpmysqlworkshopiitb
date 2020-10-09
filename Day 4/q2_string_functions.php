<html>
<body>
 	<form action="q2_string_functions.php" method="POST">
 		Enter a string: <input type="text" name="string">
 		<input type="submit" name="submit" value="Perform String Functions">
 	</form>
</body>
</html>

<?php
 	if(isset($_POST["string"]))
 	{
 		$str = $_POST["string"];
 		$no_char = strlen($str);
 		$str_arr = explode(" ",$str);
 		$rev_str = strrev($str);
 		$lower_str = strtolower($str);
 		$upper_str = strtoupper($str);
 		$substrg = 'String is replaced';
 		$substring = substr_replace($str, $substrg, 8);

 		echo "<br>Original String : " .$str;
 		echo "<br>Number of Characters in the string = " .$no_char;
 		echo "<br>String converted to an array = ";
 		print_r($str_arr);
 		echo "<br>String Reversed = " .$rev_str;
 		echo "<br>String in all lowercase = " .$lower_str;
 		echo "<br>String in all uppercase = " .$upper_str;
 		echo "<br>Replacement by substring : " .$substring;
		
   	}
?>