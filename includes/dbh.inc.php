<?php

$host = "localhost";
$dbname = 'hr';
$dbusername = 'root';
$dbpassword = '0716632613';

try {
    //code...
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;", 
        $dbusername,
        $dbpassword
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //throw $th;
    die("Connection failed: " . $e->getMessage());
}