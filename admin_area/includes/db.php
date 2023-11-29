<?php
$conn = mysqli_connect("localhost","root","","quarantine_camp");
$conn1 = mysqli_connect("localhost","root","","projectcsdl");
// Kiem tra ket noi
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
?>
