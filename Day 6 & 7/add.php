<?php
	session_start();
	if(isset($_SESSION['admin'])){
	echo "Admin Page : Add";
	}
	else{
		header("Location: ad_login.php");
	}
?>
<html>
<head>
	<title>Add</title>
</head>
<body>
	<br><br>
	<a href="admin_page.php">Admin Page</a>
	<form action="add.php" method="POST">
		<br><br><label for="adm">Student Admission No.</label><input type="text" name="adm">
		<br><br>Marks:
		<br><br><label for="s1">PHP</label><input type="number" name="s1" >
		<br><br><label for="s2">MySQL</label><input type="number" name="s2" >
		<br><br><label for="s3">HTML</label><input type="number" name="s3" >
		<br><br><input type="submit" name="submit" value="Add Record">
		<br><br><input type="submit" name="logout" value="Logout">
	</form>
</body>
</html>

<?php
	if(isset($_POST["submit"]) && isset($_POST["adm"]) && isset($_POST["s1"]) && isset($_POST["s2"]) && isset($_POST["s3"])) {
 		require("connectDay6.php");
 		$admn = $_POST["adm"];
 		$s1 = $_POST["s1"];
 		$s2 = $_POST["s2"];
 		$s3 = $_POST["s3"];
 		$total = $s1 + $s2 + $s3;
 		$per = $total/3;
 		$sql = "INSERT INTO marks VALUES('$admn',$s1,$s2,$s3,$total,$per)";
		$result = $conn->query($sql);
		if ($result)
			echo "<br> Details Recorded";
		else
			echo "<br> Insertion Failed";
	
 	}
 	if (isset($_POST['logout'])) {
	    unset($_SESSION['admin']);
	    session_destroy();
	    header('Location: ad_login.php');
	}
?>