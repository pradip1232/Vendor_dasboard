<?php
include("./dbcon.php");
?>


<?php

if (isset($_GET['Id'])) {
    $deleteId = mysqli_real_escape_string($conn, $_GET['Id']);
    echo "$deleteId";


    $query = "DELETE FROM `productdb` WHERE `Product_Id` = '$deleteId'";
    $run = mysqli_query($conn, $query);

    if ($run) {
        echo "Deleted successfully";
        // header('Location: Course.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        echo "Not deleted";
    }
}


?>
