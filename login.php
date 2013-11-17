<?php
	// If logged in continue
	if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
		header("Location: view.php	");
	}

	// Holds error messages
	$errorMessage = '';
	if (isset($_POST['submit'])) {
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username && $password){
			$connect = mysql_connect("localhost","root","root") or die ("Could'nt connect!!!");
			mysql_select_db("forum") or die ("Couldnt find DB!!!");
			$query = mysql_query("SELECT * FROM users WHERE username = '$username' ");
			$numrows = mysql_num_rows($query);
			if ($numrows != 0 ){
				while ($row = mysql_fetch_assoc($query))
				{
					$dbusername = $row['username'];
					$dbpassword = $row['password'];
				}
				//check to see if match our database record
				if($username == $dbusername && md5($password) == $dbpassword)
				{
	  				 $_SESSION['username'] = $username; 
  
					// Go to the View page
					header("Location: view.php	");
					die();
				}
				else
					$errorMessage = "Incorrect password!!";
			}
			else 
				$errorMessage = "That username does not exist!!!";
			}
			else 
				$errorMessage = "Please enter a username and password";
		}
	
			
			
		
?>