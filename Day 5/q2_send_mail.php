 <html>
 <body>
 	<form action="q2_send_mail.php" method="POST">
 		<h2>Feedback</h2><br>
 		Name: <input type="text" name="name" required><br><br>
 		Email Id: <input type="email" name="email" required><br><br>
 		Your Comments & suggestions: <textarea name="cmt" required></textarea><br><br>
 		<input type="submit" name="submit" value="Send Feedback">
 	</form>
 </body>
 </html>

 <?php
 	if(isset($_POST["cmt"]) && isset($_POST["email"]) && isset($_POST["name"])){

 		$name = $_POST["name"];
 		$email = $_POST["email"];
 		$comt = $_POST["cmt"];
 		
 		$header = "From: feedback@gmail.com";
 		$subject = "Feedback Filled";
 		$message = "Hello $name \n\n Thank You for filling out feedback";

 		mail($email, $subject, $message, $header);

 		$to = "administrator@gmail.com";
 		$sub = "Feedback filled by $name";
 		$body = "Dear admin \n\n Feedback form filled and the details are as follows \n\n Name: $name \n Email: $email \n Comment received: $comt";

 		mail($to, $sub, $body, $header);

 		echo "Feedback Recorded";
 	}
 	
 ?>