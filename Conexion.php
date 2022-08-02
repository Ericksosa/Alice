<?php

$server = 'sql5.freesqldatabase.com';
$username = 'sql5498591';
$password_alice = 'jY9EzTpyYJ';
$database = 'sql5498591';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password_alice);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>
