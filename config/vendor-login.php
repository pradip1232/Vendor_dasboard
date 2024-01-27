<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "vendor-user";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (isset($_POST["login"])) {
    $u = $_POST['email'];
    $pass = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = '$u' AND password = '$pass'");
    // $stmt->bind_param("ss", $u, $pass);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $userdata = $result->fetch_assoc();

        $name = $userdata['Name'];
        $e = $u;
        $p = $userdata['phone_number'];
        $s = $userdata['state'];
// echo " $e uuuuuuuuuuuuuuuuuuuuuuuuuuuu $u";
        // Use password_verify for password validation if you hashed passwords
        // if (password_verify($password, $userdata['hashed_password'])) {
        //     $_SESSION['auth'] = true;
        //     // Other code...
        // } else {
        //     // Invalid password
        // }



        $_SESSION['auth'] = true;
        $_SESSION['user-auth'] = [
            'name' => $name,
            'email' => $e,
            'phone' => $p,
            'state' => $s,
        ];
        $_SESSION["Msgs"] = "Nice";
        echo "okayyyyyyyyyyyyy";
        header('Location: ../dashbaord.php');
        exit;
    } else {
        // Invalid credentials
        $_SESSION["Msgs"] = "WRONG ID OR PASSWORD";
        echo "Invalid username or password.";
        // header('Location: ../dashboard.php');
    }

    $stmt->close();
    $conn->close();
}
?>
