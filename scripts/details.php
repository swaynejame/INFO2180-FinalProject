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
$id = $_POST["id"];

$sql = $conn->query("SELECT * FROM issues WHERE id = ".$id);
$row = $sql->fetch();

echo "<div id='heading'>".$row['title']."<br>#
      ".$row['id']."
      </div>
      <div id='issue'>
      ".$row['description']."
      </div>
      <div id='sidebar'>
      Assigned to ".$row['assigned_to'].
      "<br>Assigned by ".$row['created_by']."
      </div>

      <div id='markIssue'>
      <button id='closed' value='".$row['id']."'>Mark as closed</button>
      <button id='progress' value='".$row['id']."'>Mark in progress</button>
      </div>";

?>