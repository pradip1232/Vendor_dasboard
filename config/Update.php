<?php
include("./dbcon.php");
?>


<?php

if (isset($_POST["cat_submit"])) {
    $p_id = $_POST["P_ID"];
    $name = $_POST["name"];
    $pd = $_POST["P_D"];
    $price = $_POST["price"];
    echo "$name";








    try {
        // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `productdb` SET `Product_Id`='$p_id',`Name`='$name',`P_D`='$pd',`price`='$price' WHERE Product_Id = '$p_id'";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();
        $rowCount = $stmt->affected_rows;
        // echo a message to say the UPDATE succeeded
        echo  $rowCount  . " records UPDATED successfully";
        echo "$sql";
        echo "okayyyyyyyyyyyyyyyyyyyyyyyyyyyy";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;






    // $sql = "INSERT INTO `productdb`(`Product_Id`, `Name`, `P_D`, `price`) VALUES ('$p_id', '$name', '$pd', '$price')";
    // $sql = "UPDATE `productdb` SET `Product_Id`='$p_id',`Name`='$name',`P_D`='$pd',`price`='$price' WHERE Product_Id = '$p_id'";
    // $sql_run = mysqli_query($conn, $sql);
    // echo "$sql_run";
    // if ($sql_run === TRUE) {
    //     echo "New record Updated successfully";
    //     echo "$sql";
    //     // header('Location: Course.php');
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
} else {
    echo "Blank data";
}



?>
