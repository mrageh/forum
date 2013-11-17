<?php
//echo "<h1>Register</h1>";

//Variables for our registration form
$submit = $_POST['submit'];
//Registration form data
$fullname = strip_tags($_POST['fullname']);
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
$repeatpassword = strip_tags($_POST['repeatpassword']);
$date = date("Y-m-d");


if(submit){
	//check for existance
	if($fullname&&$username&&$password&&$repeatpassword)
	{	
		
		//check password
		if($password==$repeatpassword)
		{
			//check length of username and fullname
			if(strlen($username)>25||strlen($fullname)>25)
			{
				echo "Length of username or fullname is too long!";
			}
			else
			{
				//check password length
				if(strlen($password)>25||strlen($password)<6)
				{
					echo "Password must be between 6 and 25 characters";
				}
				else
				{
					
					//Register The User!
				
					//encrypt password
					$password = md5($password);
					$repeatpassword = md5($repeatpassword);
					
					//Connect to database
					$connect = mysql_connect("localhost","root","root");
					//select database
					mysql_select_db("forum");
					//Insert into users table
					$query = mysql_query("INSERT INTO users VALUES ('','$username','$password','$fullname','$date')");
					die("You have been successfully registered! <a href='index.php'>Return to login</a>");
					
				}
			}
		}
		else
			echo "Your passwords do not match!";
	}
	else
		echo "Please fill in <strong>all</strong> fields!";
}
?>
<hmtl>
<div id=wrapper>
	<img src="logo.jpg" alt="Logo" > 
	<p>
	<form action='register.php' method='Post'>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<table>
	<tr>
		<td>Your Fullname</td>
		<td><input type='text' name='fullname' value='<?php echo $fullname; ?>'></td>
	</tr>
	<tr>
		<td>Choose a username</td>
		<td><input type='text' name='username' value='<?php echo $username; ?>'></td>
	</tr>
	<tr>
		<td>Choose a password</td>
		<td><input type='password' name='password'></td>
	</tr>
	<tr>
		<td>Repeat password</td>
		<td><input type='password' name='repeatpassword'></td>
	</tr>
	<table>
	<p>
	<input type='submit' name='submit' value='Register'>
	</form>
</div>
</html>		