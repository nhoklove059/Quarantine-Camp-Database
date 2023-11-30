<?php
session_start();
include("includes/db.php");
include("includes/header.php");

?>

<body>

    <!-- Main wrapper start -->
    <div id="main-wrapper">

        <!-- Nav header start -->
        <?php
        include("includes/navhead.php");
        ?>

        <!-- Header start -->
        <?php
        include("includes/main.php");
        ?>

        <!-- Sidebar start -->
        <?php
        include("includes/sidebar.php");
        ?>

        <!-- Content body start -->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
                    <div class="mr-auto">
                        <h2 class="text-black font-w600">Patient</h2>
                        <p class="mb-0">Patients List</p>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal"
                            data-target="#addOrderModal">+New Patient</a>
                    </div>
                </div>
                <!-- Add Order -->
                <div class="modal fade" id="addOrderModal">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Patient</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <form action="add_patient.php" method="get">
                                    <div class="form-group">
                                        <label class="text-black font-w500" name="name">Patient Name</label>
                                        <input type="text" class="form-control" name="fullname"
                                            placeholder="Full name"><br>
                                        <br>
                                        <label class="text-black font-w500" name="gender">Gender</label>
                                        <select class="form-control" type="text" name="gender">
                                            <option selected>Choose Gender ...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select><br>
                                        <label class="text-black font-w500" name="doctor">Doctor</label>
                                        <select class="form-control" type="text" name="doctor">
                                            <option value="" selected>None</option>
                                            <option value="D1">Doctor 1</option>
                                            <option value="D2">Doctor 2</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-black font-w500" require>Comorbidities</label><br>
                                        To select multiple, hold down the Ctrl key and select
                                        <select class="text-black form-control" name="comorbidities[]" size="5"
                                            multiple="multiple">
                                            <option value="Older Age">Older Age</option>
                                            <option value="Lung problems, including asthma">Lung problems, including
                                                asthma</option>
                                            <option value="Heart disease">Heart disease</option>
                                            <option value=" Brain and nervous system conditions"> Brain and nervous
                                                system conditions</option>
                                            <option value="Diabetes and obesity">Diabetes and obesity</option>
                                            <option value="Cancer and certain blood disorders">Cancer and certain blood
                                                disorders</option>
                                            <option value="Weakened immune system"> Weakened immune system</option>
                                            <option value="Chronic kidney or liver disease">Chronic kidney or liver
                                                disease</option>
                                            <option value="Mental health conditionst">Mental health conditionst</option>
                                            <option value="Down syndrome">Down syndrome</option>
                                        </select><br>
                                        <!-- <input type="text" name="comorbidities_other" class="form-control"
                                            placeholder="Comorbidities other"> -->
                                    </div>

                                    <div class="form-group">
                                        <label class="text-black font-w500">Symptoms</label><br>
                                        To select multiple, hold down the Ctrl key and select
                                        <select class="text-black form-control" name="symptom[]" size="5" multiple="multiple">
                                            <option value="Cough">Cough</option>
                                            <option value="Headache">Headache</option>
                                            <option value="Fatigue">Fatigue</option>
                                            <option value="Shortness of breath or difficulty breathing"> Shortness of
                                                breath or difficulty breathing</option>
                                            <option value="Muscle or body aches">Muscle or body aches</option>
                                            <option value="Sore throat">Sore throat</option>
                                            <option value="Congestion or runny nose"> Congestion or runny nose</option>
                                            <option value="Nausea or vomiting">CNausea or vomiting</option>
                                            <option value="Diarrhea">Diarrhea</option>
                                        </select><br>
                                        <!-- <input type="text" class="form-control" name="symptoms_other"
                                            placeholder="Symptoms other"> -->
                                    </div>

                                    <div class="form-group">
                                        <label class="text-black font-w500" name="room">Room</label>
                                        <select class="text-black form-control" type="text" name="room">
                                            <option value="" selected>None</option>
                                            <?php $i = 1;
                                            while ($i <= 10) {
                                                if ($i == 2 || $i == 5 || $i == 8) {
                                                    echo "<option value=R" . $i . ">R" . $i . " Emergency</option>";
                                                }else if($i == 3 || $i == 6 || $i == 9){
                                                    echo "<option value=R" . $i . ">R" . $i . " Recuperation</option>";
                                                }else{
                                                    echo "<option value=R" . $i . ">R" . $i . " Normal</option>";

                                                }
                                                $i = $i + 1;
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-black font-w500">Contact (Phone Number)</label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-black font-w500">Address</label>
                                        <input type="text" class="form-control" name="address">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="add_patient">CREATE</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive card-table">
                                    <table id="example3"
                                        class="display min-w850 display dataTablesCard white-border table-responsive-xl">
                                        <thead>
                                            <tr>
                                                <!--<th></th>-->
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Doctor Assigned</th>
                                                <th>Contact</th>
                                                <th>Comorbidities</th>
                                                <th>Symptoms</th>
                                                <th>Room</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['status'])) {
                                                switch ($_GET['status']) {
                                                    case 'all':
                                                        $sql = "SELECT * FROM patient WHERE isDeleted = 0 OR isDeleted is NULL";
                                                        break;

                                                    case 'being_treatment':
                                                        $sql = "SELECT * FROM patient 
                                                                        INNER JOIN treatment on patient.patientID = treatment.patientID
                                                                        WHERE date_end = ''";
                                                        break;

                                                    case 'recovered':
                                                        $sql = "SELECT * FROM patient 
                                                                        INNER JOIN treatment on patient.patientID = treatment.patientID
                                                                        WHERE endDate != ''";
                                                        break;

                                                    default:
                                                        # code...
                                                        break;
                                                }
                                            }
                                            $result = mysqli_query($conn1, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row["patientID"] . "</td>";
                                                    echo "<td><a href='patient-details.php?patientID=" . $row["patientID"] . "'>" . $row["fullName"] . "</a></td>";
                                                    echo "<td>" . $row["gender"] . "</td>";

                                                    // Doctor Assigned
                                                    if (isset($row["patientID"])) {
                                                        $sql_doctor = "SELECT p.peopleName FROM people p
                                                                        JOIN treatment t ON t.DoctorID = p.peopleID  
                                                                        JOIN patient ON patient.patientID = t.patientID
                                                                        WHERE p.role = 'Doctor' and patient.patientID =" . $row["patientID"];
                                                        $result_doctor = mysqli_query($conn1, $sql_doctor);

                                                        if (mysqli_num_rows($result_doctor) > 0) {
                                                            $row_doctor = mysqli_fetch_assoc($result_doctor);
                                                            echo "<td>" . $row_doctor['peopleName'] . "</td>";
                                                        } else {
                                                            echo "<td>No Doctor Assigned</td>";
                                                        }
                                                    } else {
                                                        echo "<td></td>";
                                                    }

                                                    // Phone
                                                    echo "<td>" . $row['phone'] . "</td>";

                                                    // comorbidity
                                                    echo "<td><a href='javascript:void(0);'><strong>";
                                                    $sql_patient_comorbidity = "SELECT * FROM `comorbidities` WHERE patientID =" . $row["patientID"];
                                                    $result_patient_comorbidity = mysqli_query($conn1, $sql_patient_comorbidity);

                                                    if (mysqli_num_rows($result_patient_comorbidity) > 0) {
                                                        while ($row_patient_comorbidity = mysqli_fetch_assoc($result_patient_comorbidity)) {
                                                            echo $row_patient_comorbidity["comorbidityName"] . "<br>";
                                                        }
                                                    } else {
                                                        echo "Unrecord";
                                                    }
                                                    echo "</strong></a></td>";

                                                    // sympyom
                                                    echo "<td><a href='javascript:void(0);'><strong>";
                                                    $sql_patient_symptom = "SELECT * FROM `symptom` WHERE patientID =" . $row["patientID"];
                                                    $result_patient_symptom = mysqli_query($conn1, $sql_patient_symptom);

                                                    if (mysqli_num_rows($result_patient_symptom) > 0) {
                                                        while ($row_patient_symptom = mysqli_fetch_assoc($result_patient_symptom)) {
                                                            echo $row_patient_symptom["symptomsName"] . "<br>";
                                                        }
                                                    } else {
                                                        echo "Unrecord";
                                                    }
                                                    echo "</strong></a></td>";
                                                    ?>

                                                    <!-- Room -->
                                                    <td>
                                                        <?php echo $row["roomID"]; ?>
                                                    </td>

                                                    <!-- Action -->
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="http://localhost/ProjectCSDL/admin_area/patient-details.php?patientID=<?php echo $row["patientID"]; ?>"
                                                                class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                    class="fa fa-pencil"></i></a>


                                                            <a href="patient_delete.php?<?php echo "patientID=" . $row['patientID'] ?>"
                                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                                    class="fa fa-trash"></i></a>

                                                            <div class="dropdown ml-auto text-right">
                                                                <div class="btn-link" data-toggle="dropdown">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z"
                                                                            stroke="#2E2E2E" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z"
                                                                            stroke="#2E2E2E" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z"
                                                                            stroke="#2E2E2E" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="http://localhost/ProjectCSDL/admin_area/patient-details.php?patientID=<?php echo $row["patientID"]; ?>">View Detail</a>
                                                                    <a class="dropdown-item"
                                                                        href="test-covid.php?peopleID=<?php echo $row["patientID"]; ?>">Show
                                                                        all tests</a>
                                                                    <a class="dropdown-item"
                                                                        href="report.php?patientID=<?php echo $row["patientID"]; ?>&prescription=">Prescription</a>
                                                                    <a class="dropdown-item"
                                                                        href="patient-details.php?peopleID=<?php echo $row["patientID"]; ?>&discharge_from_hospital=">Discharge
                                                                        from hospital</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <?php
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <!-- Footer start -->
        <?php include("includes/footer.php"); ?>

    </div>
    <!-- Scripts -->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
</body>

</html>