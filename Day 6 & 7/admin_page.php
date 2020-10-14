<?php
	session_start();
	if(isset($_SESSION['admin'])){
	echo "Admin Page : Add, Update, Delete";
	}
	else{
		header("Location: ad_login.php");
	}
?>
<html>
<head>
	<title>Dashboard</title>
</head>
<body><br><br>
	<!-- LOGOUT OPTION -->
	<button>
		<a type="button" href="add.php">Add Record</a>
	</button>
	<br><br><button>
		<a type="button" href="update.php">Update Record</a>
	</button>
	<br><br><button>
		<a type="button" href="delete.php">Remove Student Record</a>
	</button>
	<br><br><button>
		<a type="button" href="delete_marks.php">Delete Marks</a>
	</button>
</body>
</html>