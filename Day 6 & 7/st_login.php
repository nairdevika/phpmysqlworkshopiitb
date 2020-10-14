<?php
	echo "Welcome to student login";
?>
<html>
<head>
	<title>Student Login</title>
</head>
<body>
	<br><br>
	<a href="index.php">HOME</a>
	<form action="st_login.php" method="POST">
		<br><br><label for="email">Email:</label>
		<input type="email" name="email" required>
		<br><br><label for="pass">Password:</label>
		<input type="password" name="pass" required>
		<br><br><input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

<?php
 if(isset($_POST["submit"])){
 	session_start();
 	require("connectDay6.php");
 	$mail = $_POST["email"];
 	$pass = $_POST["pass"];

 	$sql1 = ("SELECT ad_no,pass FROM student WHERE email = '$mail'");
	$result1 = $conn->query($sql1); 
	if(mysqli_num_rows($result1)>0){
		while($row = mysqli_fetch_array($result1)){
			$adm = $row['ad_no'];
			$pass1 = $row['pass'];
		}
		if(md5($pass) == $pass1){
		    echo "Login successful";
		    $_SESSION["adno"] = $adm;
		    header("Location: student_page.php");
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