<?php
session_start();
include_once('database.php');

// Get New Post Details
$message = $_POST['message'];
$username = $_SESSION['username'];

// Get the thread id
$threadId = $_GET['id'];

// Get user id
$query = mysql_query("SELECT id FROM users WHERE username = '$username'");
$row = mysql_fetch_array($query); 
$userId = $row['id'];

// Set Date Created
$dateCreated = date('Y-m-d');

//Insert into our thread
$insertStatement = "INSERT INTO replies(thread_id, message, user_id, date_created) VALUES( '$threadId','$message', $userId, '$dateCreated')";
mysql_query($insertStatement);
header("Location:viewpost.php?id=$threadId");
?> 