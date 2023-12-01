<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect("localhost","root","Nhoklove059_","quarantine_camp");
$conn1 = mysqli_connect("localhost","root","Nhoklove059_","projectcsdl");

// Kiem tra ket noi
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
?>  
