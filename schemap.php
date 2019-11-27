<?php
$host = 'localhost';
$username = 'admin';
$password = 'password123';
$dbname = 'bugs';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$stmt = $conn->query("INSERT INTO `users` (id, firstname, lastname, password, email, date_joined) VALUES (1, 'John', 'Doe', '$password' ,'admin@bugme.com', '2019-11-17')");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>