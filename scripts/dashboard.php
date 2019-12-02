<?php
    
    $host = 'localhost';
    $username = 'group';
    $password = 'password';
    $dbname = 'bugs';
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "Connected to $dbname at $host successfully.";
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
?>
    <div id="layout">
			<div id="header">
			    <img src="https://img.icons8.com/windows/32/000000/bug.png">
				<h3>BugMe Issue Tracker</h3>
			</div>
			
			<div id="nav">
				<ul>
				  <li><a href="../scripts/dashboard.php">Home</a></li>
				  <li><a href="addUser.html">Add User</a></li>
				  <li><a href="../scripts/addIssue.php">New Issue</a></li>
				  <li><a href="#about">Logout</a></li>
				</ul>
			</div>
<?php
    
    $id = $_POST['id'];
    $title = $_POST['title'];
    $issueType = $_POST['issueType'];
    $status = $_POST['status'];
    $created_by = $_POST['created_by'];
    $created = $_POST['created'];
    $assigned_to = $_POST['assigned_to'];
    $updated = $_POST['updated'];
    $description = $_POST['description'];
    
    $sql = $conn->query("SELECT * FROM issues");
echo "<table><tr>";
echo "<th>Title</th>";
echo "<th>Type</th>";
echo "<th>Status</th>";
echo "<th>Assigned to</th>";
echo "<th>Date posted</th>";
echo "</tr>";

while ($row = $sql->fetch()) {
  echo "<tr>";
  echo "<td>#".$row['id']." "."<button class='problemButton' value=".$row['id'].">".$row['title']."</button></td>";
  echo "<td>".$row['type']."</td>";
  echo "<td>".$row['status']."</td>";
  echo "<td>".$row['assigned_to']."</td>";
  echo "<td>".$row['created']."</td>";
  echo "</tr>";
}
echo "</table>";
?>

