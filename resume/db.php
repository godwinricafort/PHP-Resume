<?php
$host = "localhost";
$db   = "resume_db";     // your pgAdmin database
$user = "postgres";      // PostgreSQL username
$pass = "your_password"; // PostgreSQL password
$port = "5432";          // default PostgreSQL port

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connected to PostgreSQL!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
