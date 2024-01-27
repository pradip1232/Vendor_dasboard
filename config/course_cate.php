<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "education";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    // header("Location: ../error/dberror.php");
    echo "Not Connected";
} else {
}


if (isset($_POST["submit-cate"])) {

    $cate = $_POST["category"];
    $n = $_POST["name"];
    $cd = $_POST["P_D"];
    $s = $_POST["size"];




    if (!empty($_POST['name']) && !empty($_POST['category'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['P_D'];

    $sql = "INSERT INTO `course_category`(`Name`, `Course_cate`, `C_high`, `C_des`) VALUES ('$n', '$cate','$s', '$cd')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    } else {
    echo "All fields are required!";
    }
}

// Close the database connection
$conn->close();
