<?php 
	session_start();
	include_once('login.php'); 
?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<div id=wrapper>
	<body>
		<img src="logo.jpg" alt="Logo" > 
		<p>Sign In</p>
		<?php if ($errorMessage != ''): ?>
				<div style="color:red;"><?php echo $errorMessage; ?></div>
		<?php endif; ?>
		
		<form action='index.php' method='post'>
		<table>
			<tr>
				<td>Username:</td>
				<td><input type='text'name='username'></td>
			</tr>
		
			<tr>	
				<td>Password:</td> 
				<td><input type='password' name='password'>
				</td>
			</tr>
		</table>
		<p>
		<input type='submit' name='submit' value='Log In'> <br>
		<a href="register.php">Not a member yet, just register</a>
			
	</body>
	</div>
</html>
