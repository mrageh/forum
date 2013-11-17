<?php
session_start();
include_once('database.php');

// Get New Thread Details
$title   = $_POST['title'];
$message = $_POST['message'];
$username = $_SESSION['username'];

// Get user id
$query = mysql_query("SELECT id FROM users WHERE username = '$username'");
$row = mysql_fetch_array($query); 
$userId = $row['id'];

// Get the current date
$dateCreated = date('Y-m-d ');

//Insert into our new thread
$insertStatement = "INSERT INTO threads(title, message, user_id, replies, date_created) VALUES('$title', '$message', $userId, '0', '$dateCreated')";
mysql_query($insertStatement);
header('Location: view.php');
?> 	