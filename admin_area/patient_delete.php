<?php
include("includes/db.php");

$getPatientID = $_GET["patientID"];
$sql = "UPDATE `patient` SET `isDeleted` = '1' WHERE `patientID` = '$getPatientID'";

// Use mysqli_query for query execution
$result = mysqli_query($conn1, $sql);

if ($result) {
    // Redirect after successful deletion
    header('Location: table-datatable-basic.php?status=all');
} else {
    // Handle error, you might want to show an error message or log the error
    echo "Error: " . mysqli_error($conn1);
}

// Close the database connection
mysqli_close($conn1);
?>
