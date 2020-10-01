<html>
<body>
<form action="q6_1_special_variables_html.php" method="GET">
	<label>Side 1:<input type="text" name="side1"></label><br><br>
	<label>Side 2:<input type="text" name="side2"></label><br><br>
	<label>Side 3:<input type="text" name="side3"></label><br><br>
	<input type="submit" name="click">
</form>
<?php
	if(@$_GET["side1"] && @$_GET["side2"] && @$_GET["side3"]) {
		echo "The given triangle is ";
		if(($_GET["side1"] == $_GET["side2"]) && ($_GET["side1"] == $_GET["side3"]))
			echo "Equilateral";
		else if(($_GET["side1"] != $_GET["side2"]) && ($_GET["side1"] != $_GET["side3"]))
			echo "Scalene";
		else
			echo "Isoceles";
	}
?>
</body>
</html>
