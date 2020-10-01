<?php
	include('connect.php');
?>
<?php
	$name = 'Rohan';
	$nsub5 = 99;
	$pretot = 0;
	$presub5 = 0;
	$sql1 = ("SELECT * FROM class1 WHERE name = '$name'");
	$result1 = $conn->query($sql1); 
	if(mysqli_num_rows($result1)>0){
		while($row = mysqli_fetch_array($result1)){
			$presub5 = $row['sub5'];
			$pretot = $row['total_obtained'];
		}
	}
		
	$total_obt = ($pretot - $presub5) + $nsub5;
	$per = $total_obt/5 ;
	$sql = "UPDATE class1 SET total_obtained = $total_obt, percent = $per, sub5 = $nsub5 WHERE name = '$name'";
	$result = $conn->query($sql);
	if($result)
		echo "<br> Record Successfully Updated";
	else
		echo "<br> Updation Failed";

?>
