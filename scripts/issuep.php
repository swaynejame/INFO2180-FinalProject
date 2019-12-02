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

$title = $_POST['title'];
$descrip = $_POST['description'];
$type = $_POST['type'];
$priority = $_POST['priority'];
$assigned = $_POST['email'];
$created_date = date("Y/m/d");
?>
<?php
function checkData($val){
  $val = trim($val);
  $val = stripslashes($val);
  $val = htmlspecialchars($val);
  return $val;
}
?>

<?php
if (empty($_POST["title"])){
        echo "Title is required";
    } 
    else {
        $title = checkData($_POST["title"]);
        // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
            echo "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["description"])){
        echo "Description is required";
    } 
    else {
        $descrip = checkData($_POST["description"]);
        // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$descrip)) {
           echo "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["assigned"])){
        echo "assigment is required";
    }
    else{
        $assigned = checkData($_POST["assigned"]);
        // check if e-mail address syntax is valid or not
        if ($assigned == ""){
            echo "Invalid assignment";
        }
    }
    
    if (empty($_POST["type"])){
        echo "type is required";
    }
    else{
        $type = checkData($_POST["assigned"]);
        // check if e-mail address syntax is valid or not
        if ($type == ""){
            echo "Invalid type";
        }
    }
    
    if (empty($_POST["priority"])){
        echo "priority is required";
    }
    else{
        $priority = checkData($_POST["priority"]);
        // check if e-mail address syntax is valid or not
        if ($priority == ""){
            echo "Invalid assignment";
        }
    }
$sql = "INSERT INTO issues (title, description, issueType, priority, assigned_to,created) 
            VALUES('$title', '$descrip', '$type', '$priority', '$assigned','$created_date')";
    $conn->exec($sql);
    
    $stmt = $conn->query("SELECT * FROM issues");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>