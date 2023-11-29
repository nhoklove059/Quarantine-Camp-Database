<?php
$conn = mysqli_connect("localhost","root","","quarantine_camp");
$conn1 = mysqli_connect("localhost","root","","projectcsdl");
// Kiem tra ket noi
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
function executeQuery($sql){
    // 1. Tao ket noi CSDL
    $conn1 = mysqli_connect("localhost", "root", "Nhoklove059_", "projectcsdl");
    // Kiem tra ket noi
    if ($conn1->connect_error) {
        die("Connection failed: " . $conn1->connect_error);
    }
    //3. Thuc thi truy van
    if (!($result = $conn1->query($sql)))
        echo $conn1->connect_error;
    //4.Dong ket noi CSDL
    if (!($conn1->close()))
        echo $conn1->connect_error;
    return $result;
}
?>
