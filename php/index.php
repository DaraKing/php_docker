<?php
$host = 'http://remotemysql.com/';
$user = 'Cr2FHtTDyO';
$password = 'pM4U7U3VaJ';
$db = 'Cr2FHtTDyO';
$port = 3306;

$conn = new mysqli($host, $user, $password, $port);
if ($conn->connect_error) {
    echo "Connection failed " . $conn->connect_error;
    die();
}

echo "Yaaay";
?>