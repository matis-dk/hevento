<?php

$host = '127.0.0.1';
$charset = 'utf8mb4';

if (is_localhost()) {
    $db   = 'hevento';
    $user = 'root';
    $pass = 'root';
} else {
    $db   = 'fxubphvtpv';
    $user = 'fxubphvtpv';
    $pass = '32ZSTk6wvj';
}

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

?>
