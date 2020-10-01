<?php
	include('connect.php');
?>
	<html>
	<body>
	<form action="q1.php" method="POST">
		<label>Name of Each Student: <input type="text" name="name" required></label><br><br>
		Marks in Each Subject: <br><br>
		<label>Subject 1 : <input type="number" name="sub1" required min="0" max="100"></label><br><br>
		<label>Subject 2 : <input type="number" name="sub2" required min="0" max="100"></label><br><br>
		<label>Subject 3 : <input type="number" name="sub3" required min="0" max="100"></label><br><br>
		<label>Subject 4 : <input type="number" name="sub4" required min="0" max="100"></label><br><br>
		<label>Subject 5 : <input type="number" name="sub5" required min="0" max="100"></label><br><br>
		<input type="submit" name="total"></form>
	</body>
	</html>

<?php

	if(@$_POST["name"] && @$_POST["sub1"] && @$_POST["sub2"] && @$_POST["sub3"] && @$_POST["sub4"] && @$_POST["sub5"])
	{	
		$name = $_POST["name"];
		$sub1 = $_POST["sub1"];
		$sub2 = $_POST["sub2"];
		$sub3 = $_POST["sub3"];
		$sub4 = $_POST["sub4"];
		$sub5 = $_POST["sub5"];
		$total_obt = $sub1+$sub2+$sub3+$sub4+$sub5;
		$total = 500;
		$per = ($total_obt/5);

		echo "<br><br>Total Marks Obtained: <input type='text' value='$total_obt'>";
		echo "<br>Total Marks: <input type='text' value='500'>";
		echo "<br>Percentage: <input type='text' value='$per'> %";
		
		$sql = "INSERT INTO class1 VALUES('','$name', $sub1, $sub2, $sub3, $sub4, $sub5, $total_obt, $total, $per)";
		$result = $conn->query($sql);
		if ($result)
			echo "<br><br> Record Successfully Inserted";
		else
			echo "<br><br> Insertion Failed";
	}
?>