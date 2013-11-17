<?php include_once('config.php'); ?>
<?php include_once('database.php'); ?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id=wrapper>
			<a href="view.php">View All </a>
			<img src="logo.jpg" alt="Logo" > 
			<h1>Thread</h1>	
			
			<table>
				</tr>	
					<?php 
						// Fetch the selected thread
						$threadId = $_GET['id'];
						$query = mysql_query("SELECT * FROM threads t INNER JOIN users u ON u.id = t.user_id WHERE t.id = $threadId");
						$row = mysql_fetch_array($query);
					?>
					<tr>
						<td><strong>Title</strong></td><td><?php echo $row['title']; ?></td>
					</tr>
					<tr>
						<td><strong>Author</strong></td><td><?php echo $row['username']; ?></td>
					</tr>
					<tr>
						<td><strong>Date Created</strong></td><td><?php echo $row['date_created']; ?></td>
					</tr>
					<tr>
						<td><strong>Message</strong></td><td><?php echo $row['message']; ?></td>
					</tr>
			</table>
			
			<h2> Thread Posts </h2>
								<?php 
					//execute the SQL query and return records
					$query = mysql_query("SELECT * FROM replies r INNER JOIN users u ON u.id = r.user_id WHERE r.thread_id = $threadId ORDER BY date_created DESC");
					
					//fetch the data from the database
					while ($row = mysql_fetch_array($query)) { ?>
					<div class="post">
						<p class="datecreated"><?php echo date('d/m/Y', strtotime($row['date_created'])); ?></p>
						<p><strong><?php echo $row['username']; ?></strong></p> 
					    <p><i><?php echo $row['message']; ?></i></p>
						</div>
					<?php } ?>
					
					<h2>Reply</h2>
			<form action="newpost.php?id=<?php echo $threadId; ?>" method="POST">
				Message:<br><textarea cols="60" rows="5" name="message">Your comments go here!! </textarea> <br>
			<input type="submit" value="Post Reply">
			</form>
		</div>
	</body>
</html>
