<?php
try {
    $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=test_db';
    $username = 'root';
    $password = 'root';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    $pdo = new PDO($dsn, $username, $password, $options);
    echo 'Connected to MySQL successfully!';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
