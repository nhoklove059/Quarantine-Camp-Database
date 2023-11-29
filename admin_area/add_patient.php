<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
include("includes/db.php");

if (isset($_GET['add_patient'])) {
    $fullname = $_GET['fullname'];
    $gender = $_GET['gender'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $comorbidities_other = $_GET['comorbidities_other'];
    $symptoms_other = $_GET['symptoms_other'];
    $date = date("Y-m-d H:i:s");
    echo $fullname . $gender . $phone . $address . $comorbidities_other . $symptoms_other;

    // Kiểm tra nếu các trường thông tin không được điền đầy đủ
    if ($fullname == "" && $phone == "" && $address == "") {
        echo "Please fill in all the fields";
    } else {
        // Kiểm tra xem thông tin bệnh nhân đã tồn tại chưa
        $sql_check = "SELECT * FROM patient WHERE fullName = '" . $fullname . "' AND phone = '" . $phone . "' AND address = '" . $address . "'";
        echo "\n" . $sql_check;
        $result_check = mysqli_query($conn1, $sql_check);
        if (mysqli_num_rows($result_check) > 0) {
            // Thông báo nếu thông tin bệnh nhân đã tồn tại
            echo "<script>alert('This patient information already exists')</script>";
        } else {
            // Thêm thông tin bệnh nhân mới
            $sql = "INSERT INTO `patient` (`fullName`, `gender`, `address`, `phone`) VALUES ('$fullname','$gender','$address','$phone')";
            echo "\n" . $sql;
            if (mysqli_query($conn1, $sql)) {
                // Lấy ID của bệnh nhân vừa thêm
                $sql_id = "SELECT * FROM patient WHERE fullName = '" . $fullname . "' AND phone = '" . $phone . "' AND address = '" . $address . "'";
                echo $sql_id;
                $result_id = mysqli_query($conn1, $sql_id);
                if (mysqli_num_rows($result_id) > 0) {
                    while ($row = mysqli_fetch_assoc($result_id)) {
                        $id = $row['patientID'];
                        echo "\n" . $row['patientID'];
                        $comorbidity = $_GET['comorbidity'];

                        // Thêm thông tin về các bệnh nền của bệnh nhân
                        foreach ($comorbidity as $comorbidityValue) {
                            $sql = "INSERT INTO `comorbidities`(`patientID`, `comorbidityName`) VALUES ('" . $row['patientID'] . "','" . $comorbidityValue . "');";
                            if (mysqli_query($conn1, $sql)) {
                                // Thông báo nếu thêm thông tin bệnh nền thành công
                                echo '<script> alert("Add patient success"); window.location.href = "./table-datatable-basic.php"; </script>';
                            } else {
                                // Hiện thông báo khi thêm thông tin bệnh nền không thành công
                                echo 'Không thành công. Lỗi' . mysqli_error($conn1);
                            }
                            echo "\n" . $sql;
                        }

                        $symptom = $_GET['symptom'];
                        foreach ($symptom as $symptomValue) {
                            // Thêm thông tin triệu chứng của bệnh nhân
                            $sql = "INSERT INTO `symptom`(`patientID`, `symptomsName`, `startDate`) VALUES ('" . $row['patientID'] . "','" . $symptomValue . "','" . $date . "');";

                            if (mysqli_query($conn1, $sql)) {
                                // Thông báo nếu thêm thông tin triệu chứng thành công
                                echo 'Thêm thành công';
                            } else {
                                // Hiện thông báo khi thêm thông tin triệu chứng không thành công
                                echo 'Không thành công. Lỗi' . mysqli_error($conn1);
                            }
                            echo "\n" . $sql;
                        }

                        // Kiểm tra và thêm thông tin về các bệnh nền khác
                        if ($comorbidities_other != "") {
                            $sql = "INSERT INTO `comorbidities`(`patientID`, `comorbidityName`) VALUES ('" . $row['patientID'] . "','" . $comorbidityValue . "');";
                            if (mysqli_query($conn1, $sql)) {
                                // Thông báo nếu thêm thông tin bệnh nền thành công
                                echo 'Thêm thành công';
                            } else {
                                // Hiện thông báo khi thêm thông tin bệnh nền không thành công
                                echo 'Không thành công. Lỗi' . mysqli_error($conn1);
                            }
                            echo "\n" . $sql;
                        }

                        // Kiểm tra và thêm thông tin về các triệu chứng khác
                        if ($symptoms_other != "") {
                            $sql = "INSERT INTO `symptom`(`patientID`, `symptomsName`, `startDate`) VALUES ('" . $row['patientID'] . "','" . $symptomValue . "','" . $date . "');";
                            if (mysqli_query($conn1, $sql)) {
                                // Thông báo nếu thêm thông tin triệu chứng thành công
                                echo 'Thêm thành công';
                            } else {
                                // Hiện thông báo khi thêm thông tin triệu chứng không thành công
                                echo 'Không thành công. Lỗi' . mysqli_error($conn1);
                            }
                            echo "\n" . $sql;
                        }

                    }
                } else {
                    echo "0 results";
                }
                echo 'Thêm thành công';
                echo "<script>alert('Add patient success')</script>";
                echo "<script>window.open('table-datatable-basic.php?status=all','_self')</script>";
            } else {
                //Hiện thông báo khi không thành công
                echo 'Không thành công. Lỗi' . mysqli_error($conn1);
            }
        }
    }
}

?>