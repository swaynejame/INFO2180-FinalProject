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
    
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$eMail = $_POST['email'];
$passcode = password_hash($_POST['password'],PASSWORD_DEFAULT);
$current_date = date("Y/m/d");
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
if (empty($_POST["firstname"])){
        echo "firstname is required";
    } 
    else {
        $first = checkData($_POST["firstname"]);
        // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$first)) {
            echo "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["lastname"])){
        echo "lastname is required";
    } 
    else {
        $last = checkData($_POST["lastname"]);
        // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
           echo "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["password"])){
        echo "Password is required";
    }
    else{
        $passcode = checkData($_POST["password"]);
        // check if e-mail address syntax is valid or not
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$passcode)){
            echo "Invalid password format";
        }
    }
    
    if (empty($_POST["email"])){
        echo "email is required";
    }
    else{
        $eMail = checkData($_POST["email"]);
        // check if e-mail address syntax is valid or not
        if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$eMail)){
            echo "Invalid email format";
        }
    }

$sql = "INSERT INTO users (firstname, lastname, password, email, date_joined) 
            VALUES('$fname', '$lname', '$passcode', '$eMail', '$current_date')";
    $conn->exec($sql);
    
    $stmt = $conn->query("SELECT * FROM users");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>