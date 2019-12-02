<?php
$link=mysqli_connect("localhost","group","password");
mysqli_select_db($link,"bugs");
?>

<!DOCTYPE html>
<html>
	<head>
		<script src="issuej.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../styles/style1.css"></link>
        <meta charset="utf-8">
		<title>Add Issue</title>
	</head>
	
	<body>
		<div id="layout">
			<div id="header">
			    <img src="https://img.icons8.com/windows/32/000000/bug.png">
				<h3>BugMe Issue Tracker</h3>
			</div>
			<div id="nav">
				<ul>
				  <li><a href="#home">Home</a></li>
				  <li><a href="../addUser.html">Add User</a></li>
				  <li><a href="../scripts/addIssue.php">New Issue</a></li>
				  <li><a href="#about">Logout</a></li>
				</ul>
			</div>
			
			<div id="main">
				<h1>Create Issue</h1>
				<form action="../scripts/issuep.php" method="POST" >
				    <strong><h5>Title</h5></strong>
				    <input type="text" name="title" id="title" required/><br>
				    <p id="p1"></p>
				    <strong><h5>Description</h5></strong>
				   	<textarea name="message" name="description" id="des"rows="10" cols="30"></textarea><br>
				    <p id="p2"></p>
				    <strong><h5>Assigned To</h5></strong>
				    <select name="assigned" id="assign">
				    	<option disabled selected value> -- select an option -- </option>
				    	<?php 
					          $res=mysqli_query ($link,"select * from users");
					          while ($row=mysqli_fetch_array($res))
					          {
					     ?>
					        <option> <?php echo $row["lastname"]; ?> </option>
					       <?php
					       }
					       ?>
				  	</select><br>
				    <p id="p3"></p>
				    <strong><h5>Type</h5></strong>
				    <select name="type" id="ty">
						<option disabled selected value> -- select an option -- </option>
					    <option value="bug">Bug</option>
					    <option value="proposal">Proposal</option>
					    <option value="task">Task</option>
				  	</select><br>
				    <p id="p4"></p>
				    <strong><h5>Priority</h5></strong>
				    <select name="priority" id="pri">
						<option option disabled selected value> -- select an option -- </option>
					    <option value="minor">Minor</option>
					    <option value="major">Major</option>
					    <option value="critical">Critical</option>
				  	</select><br>
				    <p id="p5"></p>
				    <br>
				    <input type="submit" value="Submit" id="submitButton"/>
				</form>
			</div>
		</div>
	</body>
</html>