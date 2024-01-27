






<?php
session_start();

include("dbcon.php");

if (isset($_POST["submit-cate"])) {
    $vdoFile = $_FILES["videoFile"];

    // Check if the file was successfully uploaded
    if ($vdoFile["error"] == UPLOAD_ERR_OK) {
        // Retrieve the temporary filename
        $tempFilename = $vdoFile["tmp_name"];

        // Set the correct path to your project
        $projectPath = "/home1/squibwc7/public_html/gyanimind.in";

        // Specify the desired permissions (octal representation)
        $permissions = 0755;

        // Construct the upload directory
        $uploadDirectory = $projectPath . "/vendor/admin/video";

        // Set the correct permissions for the directory
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, $permissions, true);
        }

        // Construct the target file path
        $targetFile = $uploadDirectory . '/' . basename($vdoFile["name"]);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($tempFilename, $targetFile)) {
            // File is valid, and was successfully uploaded
            echo "File is valid, and was successfully uploaded.<br>";
            echo "File path: " . $targetFile . "<br>";

            // Store the file path in the session
            $_SESSION['uploadedFilePath'] = $targetFile;

            // Rest of your code...
        } else {
            // Output additional error information
            echo "Error moving the uploaded file.<br>";
            echo "Error code: " . $vdoFile["error"] . "<br>";
            echo "Target File: " . $targetFile . "<br>";
        }
    } else {
        // Output error if the file upload failed
        echo "Error uploading the file. Error code: " . $vdoFile["error"] . "<br>";
    }
}
?>
