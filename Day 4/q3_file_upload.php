 <html>
 <body>
 	<form action = "q3_file_upload.php" method = POST enctype="multipart/form-data">
 		Upload a File
 		<br><br>Choose a file to upload: <input type="file" name="file_upload">
 		<br><input type="submit" name="submit" value="Uplaod File">
 	</form>
 </body>
 </html>
 <?php
	if(isset($_FILES["file_upload"]))
    {
    	echo "Details of file :  <br>";
	 	$name = $_FILES["file_upload"]["name"];
	 	$size = $_FILES["file_upload"]["size"];
	 	$type = $_FILES["file_upload"]["type"];
	 	$error = $_FILES["file_upload"]["error"];

	 	echo "<br> Name of file: ".$name;
	 	echo "<br> Size of file: ".$size;
	 	echo "<br> Type of file: ".$type;

	 	if($error > 0){
	 		die("File could not be uploaded");
	 	}
 	}
 ?>