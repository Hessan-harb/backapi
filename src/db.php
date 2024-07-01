<?php

$host = 'bwzydl97giyehz9jt9ah-mysql.services.clever-cloud.com';
$db = 'bwzydl97giyehz9jt9ah';
$user = 'uo7s5nalzcruell0';
$pass = 'cY6QnM1Fd3RavMmE0ZoO';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
