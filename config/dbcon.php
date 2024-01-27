<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "education";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    // header("Location : ../error/dberror,php");
    echo "Not Connected";
} else {
    // echo "okay conected";
}
?>
