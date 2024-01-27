<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "vendor-user";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    echo "Not Connected";
} else {
    // echo "okay conected";
}

// Check if the form is submitted
if (isset($_POST["submit"])) {
    // Retrieve form data
    $name = $_POST['username'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    // $gender = $_POST['gender']; // Added
    // $dob = $_POST['dob']; // Added
    $phone = $_POST['phone'];
   
    $pc = $_POST['pincode'];

    // Validate if both name and email are not empty
    // if (!empty($name) && !empty($email) && !empty($gender) && !empty($dob)) {
        // Assuming you have a unique identifier for the user (e.g., user_id), you need to use that in the WHERE clause to specify which user to update.
        $user_id = 1; // Replace this with the actual user_id

        $sql = "UPDATE `user` SET 
                `Name`='$name', 
                `email`='$email',
                `phone_number`='$phone', 
                `state`='$state', 
                `city`='$city', 
                `zip-code`='$pc'
                WHERE `Email`='$email'";
            

        if ($conn->query($sql) === TRUE) {
            echo "Data updated successfully!";
            // header('Location: ./vendor.php');
            exit; // Ensure that no further code is executed after the redirect
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    // } else {
    //     echo "All fields are required!";
    // }
}

$conn->close();
?>
