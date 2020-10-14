<?php
	session_start();
	if(isset($_SESSION['admin'])){
	echo "Admin Page : Delete";
	}
	else{
		header("Location: ad_login.php");
	}
?>
<html>
<head>
	<title>Delete</title>
</head>
<body>
	<br><br>
	<a href="min_page.php">Admin Page</a>
	<form action="delete_marks.php" method="POST">
		<br><br><label for="adm">Student Admission No.</label><input type="text" name="adm">
		<br><br><input type="submit" name="submit" value="Delete">
		<br><br><input type="submit" name="logout" value="Logout">
	</form>
</body>
</html>


<?php

	if(isset($_POST["submit"]) && isset($_POST["adm"])) {
 		require("connectDay6.php");
 		$admn = $_POST["adm"];
 		$sql = "DELETE FROM marks WHERE ad_no = '$admn'";
		$result = $conn->query($sql);
		if($result)
			echo "<br> Record Successfully Deleted";
		else
			echo "<br> Deletion Failed";
 	}
 	if (isset($_POST['logout'])) {
	    unset($_SESSION['admin']);
	    session_destroy();
	    header('Location: ad_login.php');
	}
?>