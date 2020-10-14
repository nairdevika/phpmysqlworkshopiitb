<?php
	session_start();
	if(isset($_SESSION['adno'])){
		$adm = $_SESSION["adno"];
		require("connectDay6.php");
		$sql = ("SELECT sname FROM student WHERE ad_no = '$adm'");
		$result = $conn->query($sql); 
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_array($result)){
				$name = $row['sname'];
			}
		}
		$sql1 = ("SELECT * FROM marks WHERE ad_no = '$adm'");
		$result1 = $conn->query($sql1); 
		if(mysqli_num_rows($result1)>0){
			while($row = mysqli_fetch_array($result1)){
				$php = $row['php'];
				$mysql = $row['mysql'];
				$html = $row['html'];
				$total = $row['total'];
				$per = $row['percent'];
			}
		}

		if (isset($_POST['logout'])) {
	    unset($_SESSION['adno']);
	    session_destroy();
	    header('Location: st_login.php');
		}
	}
	else {
		echo "Please login to continue";
		header('Location: st_login.php');
	}

?>

<html>
<head>
	<title>Mail</title>
</head>
<body>
	<form action="mail.php" method="POST">
	<br>Parent's Email Id: <input type="email" name="email">
	<br><br>
	<input type="submit" name="send" value="Send Mail"><br><br>
	<input type="submit" name="back" value="Back">
	</form>
</body>
</html>

<?php
	
	if(isset($_POST["send"])) {
		$mail = $_POST["email"];
		$subject = "Marksheet of" .$name;
		$header = "From: phpcourse@gmail.com";
		$message = "Marksheet <br> Student's Name: " .$name. "<br> PHP = " .$php. "/100 <br> MySQL = ".$mysql. "/100 <br> HTML = ".$html.  "/100 <br> total= ".$total. "/300 <br> Percentage = ".$per. " %";
		$message = html_entity_decode($message);
		mail($mail, $subject, $message, $header);
	}

	if(isset($_POST["back"])) {
		header('Location: student_page.php');
	}
?>