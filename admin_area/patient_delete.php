<?php
include("includes/db.php");

$getPatientID = $_GET["patientID"];

// Delete from the 'treatment' table
$sql_delete_treatment = "DELETE FROM `treatment` WHERE patientID = '$getPatientID'";
$result_treatment = mysqli_query($conn, $sql_delete_treatment);

// Delete from the 'patient' table
$sql_delete_patient = "DELETE FROM `patient` WHERE patientID = '$getPatientID'";
$result_patient = mysqli_query($conn, $sql_delete_patient);

if ($result_treatment && $result_patient) {
    // Redirect after successful deletion
    header('Location: table-datatable-basic.php?status=all');
} else {
    // Handle error, you might want to show an error message or log the error
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
