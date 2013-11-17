<?php 
//This will redirect to the index page
	session_start();
	if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		header("Location: index.php");
	}
?>
<a href="logout.php">Logout</a>