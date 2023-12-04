<?php

session_start();

include("includes/db.php");
include("includes/header.php");

if (isset($_GET['patientID'])) {
	$patient_id = $_GET['patientID'];
}
?>


<body>
	<div id="page" class="page">

		<!--*******************
		Preloader start
	********************-->
		<!-- <div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div> -->
		<!--*******************
		Preloader end
	********************-->


		<!--**********************************
		Main wrapper start
	***********************************-->
		<div id="main-wrapper">

			<!--**********************************
			Nav header start
		***********************************-->
			<?php

			// include("includes/navhead.php");
			
			?>
			<!--**********************************
			Nav header end
		***********************************-->

			<!--**********************************
			Chat box start
		***********************************-->

			<!--**********************************
			Chat box End
		***********************************-->




			<!--**********************************
			Header start
		***********************************-->
			<?php

			// include("includes/main.php");
			
			?>
			<!--**********************************
			Header end ti-comment-alt
		***********************************-->

			<!--**********************************
			Sidebar start
		***********************************-->
			<?php

			// include("includes/sidebar.php");
			
			?>
			<!--**********************************
			Sidebar end
		***********************************-->

			<!--**********************************
			Content body start
		***********************************-->
			<!-- <div class="content-body"> -->
			<div class="container-fluid">
				<!-- <div class="page-titles">
					<h4>Invoice</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
					</ol>
				</div> -->
				<div class="row">
					<div class="col-lg-12">

						<div class="card">
							<div class="card-header">
								<strong>SQL Quarantine Camp</strong>
								<strong>
									<?php
									// Lấy ngày hiện tại dưới định dạng 'Y-m-d H:i:s'
									$currentDate = date('d-m-Y');
									echo "$currentDate";
									?>
								</strong>
								<img class="width:10px;" src="./images/SGU.png" alt="">
							</div>

							<div class="card-body">
								<div class="row">
									<div class="col-xl-3 col-sm-6 mb-4">
										<h6>From:</h6>
										<div> <strong>SGU Quarantine Camp</strong> </div>
										<div>273 An D. Vương</div>
										<div>Phường 3, Quận 5, TP.HCM</div>
										<div>Email: SGU@mail.com</div>
										<div>Phone: +48 444 666 3333</div>
									</div>
									<!-- <div class="col-xl-3 col-sm-6 mb-4">
										<h6>To:</h6>
										<div> <strong>Luc Le</strong> </div>
										<div>8 Duong Quang Dong</div>
										<div>Phuong 5, Quan 8, TP.HCM</div>
										<div>Email: thomas@mail.com</div>
										<div>Phone: +78 123 456 7891</div>
									</div> -->
									<!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
										<div class="row align-items-center">
											<div class="col-sm-9">
												<div class="brand-logo mb-3">
													<img class="logo-abbr" src="./images/lucle.jpg" alt="">
													
												</div>
												<span>Case ID: ABCD123<strong class="d-block">Age: 40</strong>
													<strong>Gender: Male</strong></span><br>
												
											</div>
											
										</div>
									</div> -->
									<br><br><br><br>
									<div class="table-responsive">
										<table id="example3" class="table table-striped table-responsive-md">
											<h4 class="card-title">Patient Details</h4>
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
												</tr>
											</thead>
											<tbody>
												<?php
												$sql = "SELECT * FROM patient WHERE patientID = " . $patient_id;
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
                                                                                JOIN patient pp ON pp.peopleID = p.peopleID
                                                                                WHERE pp.peopleID LIKE 'D%' and pp.patientID =" . $row["patientID"];
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
															<?php
															if ($row["roomID"] == "NULL") {
																echo "No room Assigned";
															} else {
																echo $row["roomID"];
															} ?>
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

									<br><br><br><br>
									<div class="table-responsive">
										<table id="example4" class="table table-striped table-responsive-md">
											<h4 class="card-title">Testing Results</h4>
											<thead>
												<tr>
													<th>Test ID</th>
													<th>Patient</th>
													<th>Test Date</th>
													<th>Status</th>
													<th>PCR Test</th>
													<th>Quick Test</th>
													<th>SP02</th>
													<th>Respiratory rate</th>
												</tr>
											</thead>
											<?php
											$sql_test = "SELECT * FROM testing_information t
															INNER JOIN patient p ON p.patientID = t.patientID
															WHERE t.patientID = " . $patient_id;
											$result_test = mysqli_query($conn1, $sql_test);
											if (mysqli_num_rows($result_test) > 0) {
												while ($row_test = mysqli_fetch_assoc($result_test)) {
													?>
													<tbody>
														<tr>
															<td>
																<?php echo $row_test['patientID'] ?>
															</td>
															<td>
																<?php echo $row_test['fullName']; ?>
															</td>
															<td>
																<?php echo $row_test['testTime'] ?>
															</td>
															<?php

															if ($row_test['SPO2_percentage'] < 96 && $row_test['Respiratory_rate'] > 20) {
																?>
																<td><span class="badge light badge-danger">Warning</span></td>
																<?php
															} else if ($row_test['PCR_test_value'] > 30 || $row_test['quick_test_value'] > 30) {
																?>
																	<td><span class="badge light badge-success">Discharge</span></td>
																<?php
															} else {
																?>
																	<td><span class="badge light badge-warning">Wait for test</span></td>
																<?php
															}
															?>

															<td><span class="text-dark">
																	<?php echo $row_test['PCR_test_result'] == 1 ? "Positive" : "Negative"; ?>
																</span></td>
															<td><span class="text-dark">
																	<?php echo $row_test['quick_test_result'] == 1 ? "Positive" : "Negative"; ?>
																</span></td>
															<td><span class="text-dark">
																	<?php echo $row_test['SPO2_percentage']; ?>%
																</span></td>
															<td><span class="text-dark">
																	<?php echo $row_test['Respiratory_rate']; ?> bpm
																</span></td>
														</tr>
													</tbody>
												<?php }
											} ?>
										</table>
									</div>

									<br><br><br><br>
									<div class="table-responsive">
										<table class="table table-striped table-responsive-md">
											<h4 class="card-title">Treatment</h4>
											<thead>
												<tr>
													<th>Doctor</th>
													<th>Patient</th>
													<th>Result</th>
													<th>Date Start</th>
													<th>Date End</th>
												</tr>
											</thead>
											<?php
											$sql_treatment = "SELECT * FROM treatment t
															INNER JOIN patient p ON p.patientID = t.patientID
															INNER JOIN people pe ON pe.peopleID = t.DoctorID
															WHERE t.patientID = " . $patient_id;
											$result_treatment = mysqli_query($conn1, $sql_treatment);
											if (mysqli_num_rows($result_treatment) > 0) {
												while ($row_treatment = mysqli_fetch_assoc($result_treatment)) {
													?>
													<tbody>
														<tr>
															<td><span class="text-nowrap">
																	<?php echo $row_treatment["peopleName"]; ?>
																</span></td>
															<td><span class="text-nowrap">
																	<?php echo $row_treatment["fullName"]; ?>
																</span></td>
															<?php
															if ((strpos($row_treatment["result"], "Recovered") !== false)) {
																echo '<td><span class="badge light badge-success">Recovered</span></td>';
															} else {
																echo '<td><span class="badge light badge-warning">In Treatment</span></td>';
															}
															?>
															<td>
																<?php echo $row_treatment["startDate"]; ?>
															</td>
															<td>
																<?php echo $row_treatment["endDate"]; ?>
															</td>
														</tr>
													</tbody>
													<?php
												}
											}
											?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--**********************************
			Content body end
		***********************************-->


			<!--**********************************
			Footer start
		***********************************-->
			<!--**********************************
			Footer end
		***********************************-->

			<!--**********************************
		   Support ticket button start
		***********************************-->

			<!--**********************************
		   Support ticket button end
		***********************************-->


		</div>
		<!--**********************************
		Main wrapper end
	***********************************-->

		<!--**********************************
		Scripts
	***********************************-->
		<script>
			window.onload = function () {
				window.print();
				window.onafterprint = function () {
					window.location.href = 'patient-details.php?patientID=' + <?php echo $patient_id; ?>;
				};
			};
		</script>
		<!-- Required vendors -->
		<script src="./vendor/global/global.min.js"></script>
		<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		<script src="./js/custom.min.js"></script>
		<script src="./js/deznav-init.js"></script>


		<script src="./vendor/highlightjs/highlight.pack.min.js"></script>
		<!-- Circle progress -->



</body>

</html>