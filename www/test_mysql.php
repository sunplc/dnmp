<?php

$dsn = 'mysql:host=mysql;port=3306';
$user = 'root';
$password = 'root_1233';

try {
    $dbh = new PDO($dsn, $user, $password);
    print_r($dbh);
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
}
