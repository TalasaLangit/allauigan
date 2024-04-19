<?php
$server = "sql207.infinityfree.com";
$username = "if0_36380719";
$password = "NyqKDT3bz1wi";
$db_name = "if0_36380719_kitty";

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$conn->autocommit(true);
?>