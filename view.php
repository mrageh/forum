<?php include_once('config.php'); ?>
<?php include_once('database.php'); ?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id=wrapper>
			<?php 
				ini_set('display_errors', '1');
			 ?>
			 <img src="logo.jpg" alt="Logo" > 
			<h1>Thread</h1>	
			<table>
				<tr>
					<th>Title</th>
					<th>Author</th>
					<th>Date Created</th>
				</tr>	
					<?php 
					//execute the SQL query and return records
					$query = mysql_query("SELECT t.*, u.username FROM threads t INNER JOIN users u ON u.id = t.user_id");
					
					//fetch tha data from the database
					while ($row = mysql_fetch_array($query)) { ?>
						<tr>
							<td><?php echo $row['title']; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo date('d/m/Y', strtotime($row['date_created'])); ?></td>
					
							<td><a href="viewpost.php?id=<?php echo $row['id'];?>">View</a></td>
						</tr>
					<?php } ?>
			</table>
			<h2>Create A New Thread</h2>
			<form action="newthread.php" method="POST">
				Thread Title:<input type="text" name="title"><br>
				Message:<br><textarea cols="60" rows="5" name="message"> </textarea> <br>
			<input type="submit" value="Post Thread">
			</form>
		</div>
	</body>
</html>
