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

$sql = "INSERT INTO users (firstname, lastname, password, email, date_joined) 
            VALUES('$fname', '$lname', '$passcode', '$eMail', '$current_date')";
    $conn->exec($sql);
    
    $stmt = $conn->query("SELECT * FROM users");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>