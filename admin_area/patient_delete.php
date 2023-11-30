<?php
include("includes/db.php");

$getPatientID = $_GET["patientID"];

// Delete from the 'treatment' table
$sql_delete_treatment = "DELETE FROM `treatment` WHERE patientID = '$getPatientID'";
$result_treatment = mysqli_query($conn1, $sql_delete_treatment);

// Delete from the 'comorbidities' table
$sql_delete_treatment = "DELETE FROM `comorbidities` WHERE patientID = '$getPatientID'";
$result_comorbidities = mysqli_query($conn1, $sql_delete_treatment);

// Delete from the 'symptom' table
$sql_delete_treatment = "DELETE FROM `symptom` WHERE patientID = '$getPatientID'";
$result_symptom = mysqli_query($conn1, $sql_delete_treatment);

// Delete from the 'patient' table
$sql_delete_patient = "DELETE FROM `patient` WHERE patientID = '$getPatientID'";
$result_patient = mysqli_query($conn1, $sql_delete_patient);

if ($result_treatment && $result_patient && $result_symptom && $result_comorbidities) {
    // Redirect after successful deletion
    header('Location: table-datatable-basic.php?status=all');
} else {
    // Handle error, you might want to show an error message or log the error
    echo "Error: " . mysqli_error($conn1);
}

// Close the database connection
mysqli_close($conn1);
?>
