<?php
if(isset($_POST['profileID'])){
    include_once 'connect.php';
    $profileID = $_POST['profileID'];

    $query1 = "SELECT * FROM tbl_profile 
    WHERE profileID=$profileID";
    $result1 = mysqli_query($con, $query1);

    if($row1 = mysqli_fetch_array($result1)) {
        echo json_encode($row1); // Corrected variable name
    } else {
        echo json_encode(array()); // Return an empty JSON object if no profile found
    }

    $con->close();
}
?>
