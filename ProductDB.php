<?php
include("./config/dbcon.php");
?>


<?php

if (isset($_POST["submit"])) {
    $p_id = $_POST["p_id"];
    $name = $_POST["name"];
    $pd = $_POST["P_D"];
    $price = $_POST["price"];

    $sql = "INSERT INTO `productdb`(`Product_Id`, `Name`, `P_D`, `price`) VALUES ('$p_id', '$name', '$pd', '$price')";

    if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
        header('Location: Course.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Blank data";
}


?>