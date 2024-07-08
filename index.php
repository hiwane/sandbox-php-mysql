<?php
try {
	    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test_db', 'root', 'root');
		    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    echo 'Connected to MySQL successfully!';
} catch (PDOException $e) {
	    echo 'Connection failed: ' . $e->getMessage();
}
