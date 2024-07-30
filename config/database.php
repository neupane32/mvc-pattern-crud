<?php
function getDatabaseConnection($localhost = "localhost", $username = "root", $password = "", $dbname = "database4") {
    $conn = new mysqli($localhost, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
$conn = getDatabaseConnection();
?>
