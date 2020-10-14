<?php
	echo "Welcome to student register";
?>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<br><br>
	<a href="index.php">HOME</a>
	<br><br><a href="st_login.php">Login</a>
	<form action="st_register.php" method="POST">
		<br><br><label for="adm">Admission No.</label><input type="text" name="adm" required>
		<br><br><label for="name">Name</label><input type="text" name="name" required>
		<br><br><label for="email">Email</label><input type="email" name="email" required>
		<br><br><label for="phone">Phone No.</label><input type="text" name="phone" required>
		<br><br><label for="pass">Password</label><input type="password" name="pass" required>
		<br><br><input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

<?php
	if(isset($_POST["submit"])){
 	require("connectDay6.php");
 	$admn = $_POST["adm"];
 	$name = $_POST["name"];
 	$mail = $_POST["email"];
 	$phone= $_POST["phone"];
 	$pass = $_POST["pass"];
 	$encpass = md5($pass);
 	$sql = "INSERT INTO student VALUES('$admn','$name','$mail',$phone,'$encpass')";
		$result = $conn->query($sql);
		if ($result)
			echo "<br> Details Recorded";
		else
			echo "<br> Insertion Failed";
	}
?>

