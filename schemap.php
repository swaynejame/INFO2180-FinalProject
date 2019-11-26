<?php
$host = getenv('IP');
$username = 'admin';
$password = password_hash('password123');
$dbname = 'schema';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$stmt = $conn->query("INSERT INTO `users` (id, firstname, lastname, password, email, date_joined) VALUES (1, 'John', 'Doe', '$password' ,'admin@bugme.com', '2019-11-17')");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>