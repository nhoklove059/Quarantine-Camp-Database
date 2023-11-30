-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projectcsdl
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comorbidities`
--

DROP TABLE IF EXISTS `comorbidities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comorbidities` (
  `patientID` int NOT NULL,
  `comorbidityName` varchar(45) DEFAULT NULL,
  KEY `fk_patient_comorbidities_patient_idx` (`patientID`),
  CONSTRAINT `fk_patient_comorbidities_patient` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comorbidities`
--

LOCK TABLES `comorbidities` WRITE;
/*!40000 ALTER TABLE `comorbidities` DISABLE KEYS */;
INSERT INTO `comorbidities` VALUES (2,'Diabetes');
INSERT INTO `comorbidities` VALUES (3,'Chronic Lung Disease');
INSERT INTO `comorbidities` VALUES (4,'Heart Condition');
INSERT INTO `comorbidities` VALUES (5,'Immunocompromised State');
INSERT INTO `comorbidities` VALUES (7,'Diabetes');
INSERT INTO `comorbidities` VALUES (8,'Chronic Lung Disease');
INSERT INTO `comorbidities` VALUES (9,'Heart Condition');
INSERT INTO `comorbidities` VALUES (10,'Immunocompromised State');
INSERT INTO `comorbidities` VALUES (6,'Chronic Lung Disease');
INSERT INTO `comorbidities` VALUES (2,'Asthma');
INSERT INTO `comorbidities` VALUES (3,'Heart Condition');
INSERT INTO `comorbidities` VALUES (4,'Chronic Lung Disease');
INSERT INTO `comorbidities` VALUES (5,'Diabetes');
INSERT INTO `comorbidities` VALUES (6,'Asthma');
INSERT INTO `comorbidities` VALUES (7,'Heart Condition');
INSERT INTO `comorbidities` VALUES (8,'Chronic Lung Disease');
INSERT INTO `comorbidities` VALUES (9,'Diabetes');
INSERT INTO `comorbidities` VALUES (10,'Asthma');
INSERT INTO `comorbidities` VALUES (11,'Heart Condition');
INSERT INTO `comorbidities` VALUES (12,'Immunocompromised State');
INSERT INTO `comorbidities` VALUES (1,'Diabetes');
INSERT INTO `comorbidities` VALUES (37,'Lung problems, including asthma');
INSERT INTO `comorbidities` VALUES (38,'Lung problems, including asthma');
INSERT INTO `comorbidities` VALUES (39,'Heart disease');
INSERT INTO `comorbidities` VALUES (40,'Diabetes and obesity');
/*!40000 ALTER TABLE `comorbidities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medication`
--

DROP TABLE IF EXISTS `medication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medication` (
  `medicationID` varchar(45) NOT NULL,
  `medicationDetail` varchar(45) DEFAULT NULL,
  `effects` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `expiration Date` date DEFAULT NULL,
  PRIMARY KEY (`medicationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medication`
--

LOCK TABLES `medication` WRITE;
/*!40000 ALTER TABLE `medication` DISABLE KEYS */;
INSERT INTO `medication` VALUES ('Med1','Paracetamol','Pain relief','10.50','2023-12-01');
INSERT INTO `medication` VALUES ('Med10','Atorvastatin','Cholesterol medication','13.75','2024-01-05');
INSERT INTO `medication` VALUES ('Med2','Aspirin','Fever reducer','8.75','2024-01-15');
INSERT INTO `medication` VALUES ('Med3','Ciprofloxacin','Antibiotic','15.20','2023-11-20');
INSERT INTO `medication` VALUES ('Med4','Ibuprofen','Anti-inflammatory','12.30','2023-12-10');
INSERT INTO `medication` VALUES ('Med5','Omeprazole','Heartburn relief','9.90','2023-12-05');
INSERT INTO `medication` VALUES ('Med6','Amoxicillin','Antibiotic','18.40','2023-11-25');
INSERT INTO `medication` VALUES ('Med7','Loratadine','Antihistamine','7.60','2024-02-01');
INSERT INTO `medication` VALUES ('Med8','Hydrochlorothiazide','Diuretic','14.80','2023-11-15');
INSERT INTO `medication` VALUES ('Med9','Metformin','Diabetes medication','11.25','2024-03-01');
/*!40000 ALTER TABLE `medication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient` (
  `patientID` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `admissionDate` datetime DEFAULT NULL,
  `dischargeDate` datetime DEFAULT NULL,
  `roomID` varchar(10) DEFAULT NULL,
  `peopleID` varchar(10) DEFAULT NULL,
  `isDeleted` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  PRIMARY KEY (`patientID`),
  KEY `roomID_idx` (`roomID`),
  KEY `fk_patient_people1_idx` (`peopleID`),
  CONSTRAINT `fk_patient_people1` FOREIGN KEY (`peopleID`) REFERENCES `people` (`peopleID`),
  CONSTRAINT `roomID` FOREIGN KEY (`roomID`) REFERENCES `room` (`roomID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (1,'John Doe','555-1234','Male','123 Main St','2023-09-01 00:00:00',NULL,'R1','D1','0');
INSERT INTO `patient` VALUES (2,'Jane Smith','555-5678','Female','456 Elm St','2023-09-02 00:00:00','2023-09-10 00:00:00','R2','D1','0');
INSERT INTO `patient` VALUES (3,'Bob Johnson','555-9876','Male','789 Oak St','2023-09-03 00:00:00',NULL,'R3','D1','0');
INSERT INTO `patient` VALUES (4,'Alice Brown','555-4321','Female','101 Pine St','2023-09-04 00:00:00',NULL,'R1','D1','0');
INSERT INTO `patient` VALUES (5,'David Davis','555-2468','Male','202 Cedar St','2023-09-05 00:00:00','2023-09-08 00:00:00','R2','D1','0');
INSERT INTO `patient` VALUES (6,'Eva White','555-9753','Female','303 Oak St','2023-09-06 00:00:00','2023-09-12 00:00:00','R3','D2','0');
INSERT INTO `patient` VALUES (7,'Michael Green','555-4203','Male','404 Pine St','2023-09-07 00:00:00',NULL,'R1','D2','0');
INSERT INTO `patient` VALUES (8,'Olivia Black','555-3189','Female','505 Elm St','2023-09-08 00:00:00',NULL,'R2','D2','0');
INSERT INTO `patient` VALUES (9,'William Gray','555-8750','Male','606 Oak St','2023-09-09 00:00:00','2023-09-15 00:00:00','R3','D2','0');
INSERT INTO `patient` VALUES (10,'Sophia Adams','555-2345','Female','707 Pine St','2023-09-10 00:00:00',NULL,'R1','D2','0');
INSERT INTO `patient` VALUES (11,'asd','123','Male','334/2b hoàng hoa thám',NULL,NULL,NULL,NULL,'1');
INSERT INTO `patient` VALUES (12,'1','1','Male','1',NULL,NULL,NULL,NULL,'1');
INSERT INTO `patient` VALUES (13,'he','1','Male','1he',NULL,NULL,NULL,NULL,'1');
INSERT INTO `patient` VALUES (14,'12','1','Male','12',NULL,NULL,NULL,NULL,'1');
INSERT INTO `patient` VALUES (15,'name','1234','Male','name',NULL,NULL,'R2','D1','1');
INSERT INTO `patient` VALUES (23,'h','4256','Male','b hoàng hoa thám',NULL,NULL,'R1','D1','1');
INSERT INTO `patient` VALUES (24,'trương quang hùng','+84388589911','Male','334/2b hoàng hoa thám','2023-11-30 20:19:26',NULL,'R2','D2','0');
INSERT INTO `patient` VALUES (25,'122','123','Male','334/2b hoàng hoa thám','2023-11-30 22:20:31',NULL,'R2','D2','0');
INSERT INTO `patient` VALUES (26,'asd','23424234','Female','sdfsfsf','2023-11-30 22:29:17',NULL,'R6','D2','0');
INSERT INTO `patient` VALUES (31,'3','333','Male','333','2023-11-30 22:57:55',NULL,'R1','D1','0');
INSERT INTO `patient` VALUES (34,'567','45','Male','64','2023-11-30 23:08:32',NULL,'R1','D1','0');
INSERT INTO `patient` VALUES (35,'0','0','Female','0','2023-11-30 23:10:51',NULL,'R2','D1','0');
INSERT INTO `patient` VALUES (36,'9','9','Male','9','2023-11-30 23:11:07',NULL,'R3','D1','0');
INSERT INTO `patient` VALUES (37,'3','3','Male','3','2023-11-30 23:12:14',NULL,'R3','D2','0');
INSERT INTO `patient` VALUES (38,'3','3','Male','3','2023-11-30 23:18:29',NULL,'R3','D2','0');
INSERT INTO `patient` VALUES (39,'555','55','Male','555','2023-11-30 23:18:53',NULL,'R2','D1','0');
INSERT INTO `patient` VALUES (40,'66','7','Male','7','2023-11-30 23:21:19',NULL,'NULL','NULL','0');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_location_history`
--

DROP TABLE IF EXISTS `patient_location_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_location_history` (
  `patientID` int NOT NULL,
  `entryDateTime` datetime DEFAULT NULL,
  `exitDateTime` datetime DEFAULT NULL,
  `roomNumber` varchar(10) DEFAULT NULL,
  KEY `patientID` (`patientID`),
  CONSTRAINT `patientID` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_location_history`
--

LOCK TABLES `patient_location_history` WRITE;
/*!40000 ALTER TABLE `patient_location_history` DISABLE KEYS */;
INSERT INTO `patient_location_history` VALUES (1,'2023-09-01 10:00:00',NULL,'R1');
INSERT INTO `patient_location_history` VALUES (2,'2023-09-02 11:30:00','2023-09-10 09:00:00','R2');
INSERT INTO `patient_location_history` VALUES (3,'2023-09-03 12:15:00',NULL,'R3');
INSERT INTO `patient_location_history` VALUES (4,'2023-09-04 13:45:00',NULL,'R1');
INSERT INTO `patient_location_history` VALUES (5,'2023-09-05 14:30:00','2023-09-08 16:00:00','R2');
INSERT INTO `patient_location_history` VALUES (6,'2023-09-06 15:45:00','2023-09-12 11:30:00','R3');
INSERT INTO `patient_location_history` VALUES (7,'2023-09-07 16:30:00',NULL,'R1');
INSERT INTO `patient_location_history` VALUES (8,'2023-09-08 17:15:00',NULL,'R2');
INSERT INTO `patient_location_history` VALUES (9,'2023-09-09 18:00:00','2023-09-15 14:30:00','R3');
INSERT INTO `patient_location_history` VALUES (10,'2023-09-10 19:30:00',NULL,'R1');
/*!40000 ALTER TABLE `patient_location_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `people` (
  `peopleID` varchar(10) NOT NULL,
  `peopleName` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`peopleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `people`
--

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
INSERT INTO `people` VALUES ('D1','Doctor 1','Doctor',NULL,NULL);
INSERT INTO `people` VALUES ('D2','Doctor 2','Doctor',NULL,NULL);
INSERT INTO `people` VALUES ('M1','HUY','Manager','1','12345');
INSERT INTO `people` VALUES ('N1','Nurse 1','Nurse',NULL,NULL);
INSERT INTO `people` VALUES ('N2','Nurse 2','Nurse',NULL,NULL);
INSERT INTO `people` VALUES ('NULL',NULL,NULL,NULL,NULL);
INSERT INTO `people` VALUES ('S1','Staff 1','Staff',NULL,NULL);
INSERT INTO `people` VALUES ('S2','Staff 2','Staff',NULL,NULL);
INSERT INTO `people` VALUES ('V1','Volunteer 1','Volunteer',NULL,NULL);
INSERT INTO `people` VALUES ('V2','Volunteer 2','Volunteer',NULL,NULL);
INSERT INTO `people` VALUES ('V3','Volunteer 3','Volunteer',NULL,NULL);
/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room` (
  `roomID` varchar(10) NOT NULL,
  `roomType` varchar(45) DEFAULT NULL,
  `capacity` int DEFAULT NULL,
  PRIMARY KEY (`roomID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES ('NULL',NULL,NULL);
INSERT INTO `room` VALUES ('R1','Normal',10);
INSERT INTO `room` VALUES ('R10','Normal',10);
INSERT INTO `room` VALUES ('R2','Emergency',5);
INSERT INTO `room` VALUES ('R3','Recuperation',8);
INSERT INTO `room` VALUES ('R4','Normal',10);
INSERT INTO `room` VALUES ('R5','Emergency',5);
INSERT INTO `room` VALUES ('R6','Recuperation',8);
INSERT INTO `room` VALUES ('R7','Normal',10);
INSERT INTO `room` VALUES ('R8','Emergency',5);
INSERT INTO `room` VALUES ('R9','Recuperation',8);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `symptom`
--

DROP TABLE IF EXISTS `symptom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `symptom` (
  `patientID` int NOT NULL,
  `symptomsName` varchar(45) DEFAULT NULL,
  `symptomSeverity` varchar(45) DEFAULT NULL,
  `startDate` time DEFAULT NULL,
  `endDate` time DEFAULT NULL,
  KEY `fk_symptoms_patient1_idx` (`patientID`),
  CONSTRAINT `fk_symptoms_patient1` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `symptom`
--

LOCK TABLES `symptom` WRITE;
/*!40000 ALTER TABLE `symptom` DISABLE KEYS */;
INSERT INTO `symptom` VALUES (1,'Fever','Moderate','08:00:00',NULL);
INSERT INTO `symptom` VALUES (1,'Cough','Mild','08:00:00',NULL);
INSERT INTO `symptom` VALUES (2,'Fever','Severe','09:30:00',NULL);
INSERT INTO `symptom` VALUES (3,'Cough','Moderate','10:15:00',NULL);
INSERT INTO `symptom` VALUES (4,'Fever','Mild','11:45:00','10:30:00');
INSERT INTO `symptom` VALUES (5,'Cough','Moderate','13:20:00',NULL);
INSERT INTO `symptom` VALUES (6,'Fever','Severe','09:45:00',NULL);
INSERT INTO `symptom` VALUES (7,'Cough','Mild','11:00:00',NULL);
INSERT INTO `symptom` VALUES (8,'Fever','Moderate','12:30:00',NULL);
INSERT INTO `symptom` VALUES (9,'Cough','Severe','14:15:00','16:45:00');
INSERT INTO `symptom` VALUES (11,'Nausea or vomiting',NULL,'22:47:19',NULL);
INSERT INTO `symptom` VALUES (12,'Cough',NULL,'23:05:09',NULL);
INSERT INTO `symptom` VALUES (12,'Fatigue',NULL,'23:05:09',NULL);
INSERT INTO `symptom` VALUES (13,'Muscle or body aches',NULL,'00:38:33',NULL);
INSERT INTO `symptom` VALUES (14,'Shortness of breath or difficulty breathing',NULL,'00:43:17',NULL);
INSERT INTO `symptom` VALUES (23,'Headache',NULL,'20:11:49',NULL);
INSERT INTO `symptom` VALUES (24,'Cough',NULL,'20:19:26',NULL);
INSERT INTO `symptom` VALUES (24,'Headache',NULL,'20:19:26',NULL);
INSERT INTO `symptom` VALUES (24,'Fatigue',NULL,'20:19:26',NULL);
INSERT INTO `symptom` VALUES (25,'Cough',NULL,'22:20:31',NULL);
INSERT INTO `symptom` VALUES (25,'Headache',NULL,'22:20:31',NULL);
INSERT INTO `symptom` VALUES (25,'Fatigue',NULL,'22:20:31',NULL);
INSERT INTO `symptom` VALUES (26,'Sore throat',NULL,'22:29:17',NULL);
INSERT INTO `symptom` VALUES (26,'Congestion or runny nose',NULL,'22:29:17',NULL);
INSERT INTO `symptom` VALUES (26,'Nausea or vomiting',NULL,'22:29:17',NULL);
INSERT INTO `symptom` VALUES (31,'Fatigue',NULL,'22:57:55',NULL);
INSERT INTO `symptom` VALUES (31,'Shortness of breath or difficulty breathing',NULL,'22:57:55',NULL);
INSERT INTO `symptom` VALUES (31,'Muscle or body aches',NULL,'22:57:55',NULL);
INSERT INTO `symptom` VALUES (34,'Headache',NULL,'23:08:32',NULL);
INSERT INTO `symptom` VALUES (34,'Fatigue',NULL,'23:08:32',NULL);
INSERT INTO `symptom` VALUES (34,'Shortness of breath or difficulty breathing',NULL,'23:08:32',NULL);
INSERT INTO `symptom` VALUES (34,'Muscle or body aches',NULL,'23:08:32',NULL);
INSERT INTO `symptom` VALUES (35,'Fatigue',NULL,'23:10:51',NULL);
INSERT INTO `symptom` VALUES (36,'Headache',NULL,'23:11:07',NULL);
INSERT INTO `symptom` VALUES (37,'Headache',NULL,'23:12:14',NULL);
INSERT INTO `symptom` VALUES (37,'Headache',NULL,'23:18:29',NULL);
INSERT INTO `symptom` VALUES (38,'Headache',NULL,'23:18:29',NULL);
INSERT INTO `symptom` VALUES (39,'Headache',NULL,'23:18:53',NULL);
INSERT INTO `symptom` VALUES (40,'Muscle or body aches',NULL,'23:21:19',NULL);
/*!40000 ALTER TABLE `symptom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testing_information`
--

DROP TABLE IF EXISTS `testing_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testing_information` (
  `patientID` int NOT NULL,
  `testTime` date DEFAULT NULL,
  `PCR_test_result` tinyint DEFAULT NULL,
  `PCR_test_value` varchar(45) DEFAULT NULL,
  `quick_test_result` tinyint DEFAULT NULL,
  `quick_test_value` varchar(45) DEFAULT NULL,
  `SPO2_percentage` varchar(45) DEFAULT NULL,
  `Respiratory_rate` varchar(45) DEFAULT NULL,
  KEY `fk_testing_Information_patient1` (`patientID`),
  CONSTRAINT `fk_testing_Information_patient1` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testing_information`
--

LOCK TABLES `testing_information` WRITE;
/*!40000 ALTER TABLE `testing_information` DISABLE KEYS */;
INSERT INTO `testing_information` VALUES (1,'2023-09-01',1,'25',0,NULL,'94%','22');
INSERT INTO `testing_information` VALUES (2,'2023-09-02',1,'28',1,'30','96%','18');
INSERT INTO `testing_information` VALUES (3,'2023-09-03',0,NULL,1,'32','98%','21');
INSERT INTO `testing_information` VALUES (4,'2023-09-04',1,'27',0,NULL,'93%','23');
INSERT INTO `testing_information` VALUES (5,'2023-09-05',0,NULL,1,'29','97%','20');
INSERT INTO `testing_information` VALUES (6,'2023-09-06',1,'26',0,NULL,'92%','24');
INSERT INTO `testing_information` VALUES (7,'2023-09-07',0,NULL,1,'31','95%','19');
INSERT INTO `testing_information` VALUES (8,'2023-09-08',1,'30',0,NULL,'99%','17');
INSERT INTO `testing_information` VALUES (9,'2023-09-09',0,NULL,1,'28','96%','20');
INSERT INTO `testing_information` VALUES (10,'2023-09-10',1,'29',0,NULL,'94%','22');
/*!40000 ALTER TABLE `testing_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treatment`
--

DROP TABLE IF EXISTS `treatment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `treatment` (
  `patientID` int DEFAULT NULL,
  `DoctorID` varchar(10) DEFAULT NULL,
  `medID` varchar(45) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `result` varchar(500) DEFAULT NULL,
  KEY `fk_treatment_Details_medication1_idx` (`medID`),
  KEY `fk_treatment_Details_patient1_idx` (`patientID`),
  KEY `fk_treatment_people1_idx` (`DoctorID`),
  CONSTRAINT `fk_treatment_Details_medication1` FOREIGN KEY (`medID`) REFERENCES `medication` (`medicationID`),
  CONSTRAINT `fk_treatment_Details_patient1` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`),
  CONSTRAINT `fk_treatment_people1` FOREIGN KEY (`DoctorID`) REFERENCES `people` (`peopleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatment`
--

LOCK TABLES `treatment` WRITE;
/*!40000 ALTER TABLE `treatment` DISABLE KEYS */;
INSERT INTO `treatment` VALUES (1,'D1','Med1','2023-09-02','2023-09-05','Recovered from fever');
INSERT INTO `treatment` VALUES (2,'D2','Med2','2023-09-03','2023-09-10','Recovered from severe cough');
INSERT INTO `treatment` VALUES (3,'D1','Med3','2023-09-04',NULL,'Undergoing antibiotic treatment');
INSERT INTO `treatment` VALUES (4,'D2','Med4','2023-09-05',NULL,'Undergoing anti-inflammatory treatment');
INSERT INTO `treatment` VALUES (5,'D1','Med5','2023-09-06','2023-09-08','Recovered from moderate cough');
/*!40000 ALTER TABLE `treatment` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-30 23:36:54
