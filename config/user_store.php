<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Admin_Edu";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    // header("Location : ../error/dberror,php");
    echo "Not Connected";
} else {
    echo "okay conected";
}
?>


<?php

if (isset($_POST["submit"])) {
    // $p_id = $_POST["p_id"];
    $name = $_POST["name"];
    $pd = $_POST["id"];
    // $price = $_POST["price"];

    // $sql = "INSERT INTO `User` ( `Name`, `re`, `price`) VALUES ('$p_id', '$name', '$pd', '$price')";
    $sql = "INSERT INTO `user`(`referral_code`, `Name`) VALUES ('$pd','$name')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // header('Location: Course.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Blank data";
}


?>