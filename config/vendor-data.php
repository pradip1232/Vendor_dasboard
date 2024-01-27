<!--<h1>heeeeeeee</h1>-->

<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "vendor-user";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    // header("Location : ../error/dberror,php");
    echo "Not Connected";
} else {
    // echo "okay conected";
}

?>

<?php


// Check if the form is submitted
if (isset($_POST["submit"])) {
    // Retrieve form data
    $name = $_POST['username'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    // $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    // $email = $_POST['cpass'];
    $pc = $_POST['pincode'];


    // Validate if both name and email are not empty
    if (!empty($name) && !empty($email)) {
       
        $sql = "INSERT INTO `user`(`Name`, `email`, `phone_number`, `password`,  `state`, `city`, `zip-code`) 
        VALUES ('$name', '$email','$phone','$pass','$state','$city','$pc')";
        // INSERT INTO `user`(`Name`, `email`, `phone_number`, `password`, `country`, `state`, `city`, `zip-code`) 
        //VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully!";
            // header('Location: ./vendor.php');
            exit; // Ensure that no further code is executed after the redirect
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "All fields are required!";
    }
}


?>