<?php
$host = getenv('IP');
$username = 'admin';
$password = password_hash('password123');
$dbname = 'schema';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$stmt = $conn->query("INSERT INTO `users` (id, firstname, lastname, password, email, date_joined) VALUES (1, 'John', 'Doe', '$password' ,'admin@bugme.com', '2019-11-17')");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
$host = getenv('IP');
$username = 'admin';
$password = password_hash('password123');
$dbname = 'schema';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = password_hash($_POST['password']);
$current_date = date("Y/m/d");

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$stmt = $conn->query("INSERT INTO `users` (id, firstname, lastname, password, email, date_joined) VALUES (2, '$firstname', '$lastname', '$password' ,'$email', '$current_date')");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>