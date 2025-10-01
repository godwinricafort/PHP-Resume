<?php
require 'db.php';

$username = "godwin";
$plainPassword = "mypassword";

// Hash the password securely
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'username' => $username,
    'password' => $hashedPassword
]);

echo "User created successfully with secure password hash!";