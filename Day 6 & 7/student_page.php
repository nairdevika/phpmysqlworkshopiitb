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
	<a href="index.php">HOME</a>
	<title>Dashboard</title>
</head>
<body>
	<form action="student_page.php" method="POST">
		<br><br><input type="submit" name="logout" value="Logout">
	</form>
	<br><br>
	Name of the student: <?php echo $name; ?><br><br>
	Admission No. : <?php echo $adm; ?><br><br>
	<table>
		<tr>
		<th>Subject</th>
		<th>Marks</th>
		</tr>
		<tr>
			<td>PHP</td>
			<td><?php echo $php; ?></td>
		</tr>
		<tr>
			<td>MySQL</td>
			<td><?php echo $mysql; ?></td>
		</tr>
		<tr>
			<td>HTML</td>
			<td><?php echo $html; ?></td>
		</tr>
	</table>
	<br><br>
	Total: <?php echo $total."/300"; ?><br><br>
	Percent: <?php echo $per."%"; ?><br><br>
</body>
</html>
<?php
	if($per >= 60)
		echo "Congratulations ".$name;
	elseif($per < 30)
		echo "Failed! Better Luck Next Time";
	else
		echo "Passed";

	echo "<form method='POST' action='mail.php'>
               <br><input type='submit' value='Mail to parent' />
          </form>";
?>


