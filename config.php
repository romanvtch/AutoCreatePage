<?php
$servername = "vu508614.mysql.tools";
$username = "vu508614_db";
$password = "aM5zdEqP";
$dbname = "vu508614_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Помилка підключення до бази даних: " . $conn->connect_error);
}
?>