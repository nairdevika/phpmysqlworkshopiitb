<html>
<body>
<form action="q6_2_special_variables_html.php" method="POST">
	<label>Name of Student: <input type="text" name="name" required></label><br><br>
	Marks in Each Subject: <br><br>
	<label>Subject 1 :<input type="number" name="sub1" required min="0" max="100"></label><br><br>
	<label>Subject 2 : <input type="number" name="sub2" required min="0" max="100"></label><br><br>
	<label>Subject 3 : <input type="number" name="sub3" required min="0" max="100"></label><br><br>
	<label>Subject 4 : <input type="number" name="sub4" required min="0" max="100"></label><br><br>
	<label>Subject 5 : <input type="number" name="sub5" required min="0" max="100"></label><br><br>
	<input type="submit" name="total"></form>
<?php
	if(@$_POST["name"] && @$_POST["sub1"] && @$_POST["sub2"] && @$_POST["sub3"] && @$_POST["sub4"] && @$_POST["sub5"]){
		$total_obt = $_POST["sub1"] + $_POST["sub2"] + $_POST["sub3"] + $_POST["sub4"] + $_POST["sub5"];
		echo "<br><br>Total Marks Obtained: " .$total_obt;
		echo "<br>Total Marks: 500";
		$per = ($total_obt/5);
		echo "<br>Percentage: " .$per. "%";
	}
?>
</body>
</html>