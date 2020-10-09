<?php
	include('connectDay5.php');
?>

 <html>
 <body>
 	<form action="q1_md5.php" method="POST">
 		Enter your 
 		<br><br>Username: <input type="text" name="uname">
 		<br><br>Password: <input type="password" name="pass">
 		<br><br><input type="submit" name="submit" value="Save">
 	</form>
 </body>
 </html>

 <?php
 	if(isset($_POST["uname"]) && isset($_POST["pass"]))
 	{	
 		$name = $_POST["uname"];
 		$password = $_POST["pass"];
 		$encpass = md5($password);
 		$sql = "INSERT INTO users1 VALUES('','$name','$encpass')";
		$result = $conn->query($sql);
		if ($result)
			echo "<br> Details Recorded";
		else
			echo "<br> Insertion Failed";
 	}
 ?>