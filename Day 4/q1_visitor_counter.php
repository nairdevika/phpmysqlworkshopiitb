<?php
	include('connectDay4.php');
?>
 
<?php
	$sql1 = ("SELECT * FROM counter");
	$result1 = $conn->query($sql1); 
	if(mysqli_num_rows($result1)>0){
		while($row = mysqli_fetch_array($result1))
			$previsits = $row['no_visits'];
	}

	$new_no = $previsits + 1;
	$curr_visit = $new_no + 1;

	echo "You are visitor no.: $curr_visit";

	$sql = "UPDATE counter SET no_visits = $new_no";
	$result = $conn->query($sql);
?>