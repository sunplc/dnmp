<?php

$dsn = 'mysql:host=db;port=3306';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    print_r($dbh);
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
}
