<?php
include_once "connect.php"; // Include your database connection file

// Check if the request is to delete all records
if(isset($_POST['deleteAll'])) {
    $sql = "DELETE FROM tbl_profile";

    if ($con->query($sql) === TRUE) {
        echo "success"; // Send a success response if deletion is successful
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
} else {
    echo "Invalid request"; // Send an error response if the request is invalid
}
?>
