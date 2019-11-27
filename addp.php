<?php
$host = 'localhost';
$username = 'admin';
$password = 'Password123!';
$dbname = 'bugs';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

if (isset($_POST['firstname'])) {
    $fname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lname = $_POST['lastname'];
}
if (isset($_POST['email'])) {
    $eMail = $_POST['email'];
}
if (isset($_POST['password'])) {
    $passcode = password_hash($_POST['password'],PASSWORD_DEFAULT);
}
$current_date = date("Y/m/d");

//$stmt = $conn->query("INSERT INTO `users` (id, firstname, lastname, password, email, date_joined) VALUES (2, '$fname', '$lname', '$passcode' ,'$eMail', '$current_date')");

//$stmt = $conn->query("SELECT * FROM users");
//$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
?>