<?php
	echo "Welcome to Admin login";
	echo "<br><br> Please login to continue";
?>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<br><br>
	<a href="index.php">HOME</a>
	<form action="ad_login.php" method="POST">
		<br><br><label for="email">Email:</label>
		<input type="email" name="email" required>
		<br><br><label for="pass">Password:</label>
		<input type="password" name="pass" required>
		<br><br><input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

<?php
	session_start();
	if(isset($_POST["submit"])){
	 	require("connectDay6.php");
	 	$mail = $_POST["email"];
	 	$pass = $_POST["pass"];

	 	$sql1 = ("SELECT pass FROM admin WHERE mail = '$mail'");
		$result1 = $conn->query($sql1); 
		if(mysqli_num_rows($result1)>0){
			while($row = mysqli_fetch_array($result1)){
				$pass1 = $row['pass'];
			}
			if(md5($pass) == $pass1){
				$_SESSION['admin'] = $mail;
			    echo "Login successful";
			    header("Location: admin_page.php");
			}
			else{
				echo "Invalid Password";
				session_destroy();
			}
		}
		else{
			echo "<br> Invalid email given";
			session_destroy();
		}
	}
?>