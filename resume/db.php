<?php
$host = "localhost";
$port = "5432";
$db   = "resume_db";
$user = "postgres";
$pass = "gwindbms";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$db;";
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}

?>
