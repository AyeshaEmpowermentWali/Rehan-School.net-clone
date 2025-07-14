<?php
$host = 'localhost';
$dbname = 'dbra0g0gbasp5r';
$username = 'ugrj543f7lree';
$password = 'cgmq43woifko';

try {
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die("Database connection error: " . $e->getMessage());
}
?>
