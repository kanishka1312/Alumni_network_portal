-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: alumni
-- ------------------------------------------------------
-- Server version       10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `alumni`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `alumni` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `alumni`;

--
-- Table structure for table `admin_cred`
--

DROP TABLE IF EXISTS `admin_cred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_cred` (
  `Id` int(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_cred`
--

LOCK TABLES `admin_cred` WRITE;
/*!40000 ALTER TABLE `admin_cred` DISABLE KEYS */;
INSERT INTO `admin_cred` VALUES (6789,'789amity','Amity Unviversity Noida'),(7530,'653integra','Integral Unviversity Lucknow'),(7654,'764jiitsol','JIIT Solan\r\n'),(8956,'450jiitgun','JIIT Guna'),(12343,'123jiitnoi','JIIT Noida'),(64329,'2423nsut','NSUT Delhi'),(84687,'423quantum','Quantum University Roorkee'),(123454,'3687hbtu','HBTU Kanpur'),(406345,'406KRIS','Kristu jayanti banglore '),(457874,'4578BHUV','BHU Vasanasi'),(495409,'4954dtud','DTU Delhi'),(543545,'1234kiet','KIET Ghaziabaad'),(604864,'6048IIIT','IIIT Jabalpur'),(963440,'9634bitsp','BITS Pilani'),(975891,'9758nitb','NIT Bhopal');
/*!40000 ALTER TABLE `admin_cred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expected_year`
--

DROP TABLE IF EXISTS `expected_year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expected_year` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `yr_name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expected_year`
--

LOCK TABLES `expected_year` WRITE;
/*!40000 ALTER TABLE `expected_year` DISABLE KEYS */;
INSERT INTO `expected_year` VALUES (1,'1998'),(2,'2002'),(3,'2003'),(4,'2005'),(5,'2007'),(6,'2008'),(7,'2009'),(8,'2010'),(9,'2011'),(10,'2012'),(11,'2013'),(12,'2014'),(13,'2015'),(14,'2016'),(15,'2017'),(16,'2018'),(17,'2019'),(18,'2020'),(19,'2021');
/*!40000 ALTER TABLE `expected_year` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institute`
--

DROP TABLE IF EXISTS `institute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institute` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ins_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institute`
--

LOCK TABLES `institute` WRITE;
/*!40000 ALTER TABLE `institute` DISABLE KEYS */;
INSERT INTO `institute` VALUES (1,'JIIT Noida'),(2,'HBTU Kanpur'),(3,'Amity Unviversity Noida'),(4,'Integral Unviversity Lucknow'),(5,'JIIT Solan\r\n'),(6,'JIIT Guna'),(7,'JIIT Noida'),(8,'NSUT Delhi'),(9,'Quantum University Roorkee'),(10,'HBTU Kanpur'),(11,'Kristu jayanti banglore '),(12,'BHU Vasanasi'),(13,'DTU Delhi'),(14,'KIET Ghaziabaad'),(15,'IIIT Jabalpur'),(16,'BITS Pilani'),(17,'NIT Bhopal');
/*!40000 ALTER TABLE `institute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pass_out`
--

DROP TABLE IF EXISTS `pass_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pass_out` (
  `Id` int(10) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  `Passing_Year` int(11) NOT NULL,
  `Field_of_Expertise` varchar(100) NOT NULL,
  `Current_status` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pass_out`
--

LOCK TABLES `pass_out` WRITE;
/*!40000 ALTER TABLE `pass_out` DISABLE KEYS */;
INSERT INTO `pass_out` VALUES (111145,'Kriti','Sanon','F','JIIT Noida',2014,'Acting','Actress','kriti.sanon@gmail.com'),(122345,'Siddharth','Batra','M','JIIT Noida',2014,'AI','Co-founder of X1 Card','sidd.batra@gmail.com'),(123213,'Akansha','Matta','F','HBTU Kanpur',2014,'Ethical Hacking','Cyber Security Analyst SOC Noida','aaakaa23@yahoo.com'),(123445,'Sakshi','Malik','F','JIIT Noida',2018,'Acting','Actress','sakshi.malik@yahoo.com'),(123449,'Ayush','Thakur','M','Amity University Noida',2012,'Programming Languages and Statistics','AI Developer at CryptoMize','ayusss234@rediffmail.com'),(123451,'Raj','Malhotra','M','JIIT Guna',2012,'Digital Marketing','Founder and CEO of Foretold Tech ','rajmal@yahoo.com'),(123452,'Apoorv','Agarwal','M','JIIT Guna',2011,'Graphic Designing','Section Head at Grafitoon','apoorv.ag12345@gmail.com'),(123453,'Hardik','Jeethalal','M','JIIT Guna',2014,'Web Developer','Front-end Developer at GitHub','har.jeetha@gmail.com'),(123454,'Manav ','Gupta','M','JIIT Solan',2019,'Entrepreneurship','CEO of Being Human','manav.human@gmail.com'),(123455,'Shivam ','Patel','M','JIIT Solan',2014,'Corporate Lawyer','Legal Manager at Being Human','shivam@gmail.com'),(123456,'Kanishka','Agarwaal','F','JIIT Guna',2010,'Web Development','Chief Technology officer at Amazon','kanishka.agra123@gmail.com'),(123457,'Astha','Agha','F','JIIT Noida',2015,'Public Relation','Marketing Manager at Ola','agha.astha96@yahoo.com'),(123458,'Rajalaxmi','Iyer','M','JIIT Guna',2015,'Computer Aided Design','Chief Manager at TurboCAD','laxmi.raj@rediffmail.com'),(123459,'Mayank','Mittal','M','JIIT Solan',2018,'Human Resource','HR Manager at Google','maya.hyper@yahoo.com'),(123460,'Saumitra','Jain','M','JIIT Solan',2020,'Data Analysis','Data Analysis Executive at Boat','sau.jain@yahoo.com'),(123486,'Mukesh','Rai','M','JIIT Noida',2019,'Management','Manager at Infosys','rajesh.kumar@yahoo.com'),(123543,'Disha','Chauhaan','F','JIIT Guna',2010,'Machine Learning','Data Scientist Fintech','disha.original@gmail.com'),(123567,'Yanika','Chaudhary','F','Amity University Noida',2018,'Finance management','Chief Financial Officer at Snapdeal','yash.ika@hotmail.com\r\n'),(123568,'Madhav','Basa','M','Amity University Noida',2021,'App Developer','Team Head at Genpact','Madhavbasa@hotmail.com'),(123569,'Rachita','Kumari','M','Amity University',2009,'Game Developer','Technical Head at game24x7','rachita.kuma@hotmail.com'),(124387,'Ashish','Gharde','M','HBTU Kanpur',2011,'Food Processing','Food Technologist at Lays','ashishgan@gmail.com'),(187654,'Satvik','Bhuttan','M','Quantum University Roorkee',2016,'Graphic Designing','Chief Graphic Designer at PhotoLab','satatwich@rediffmail.com'),(234567,'Astha','Thakur','F','Integral University Lucknow',2018,'Public Relation','Area Sales Manager at Aditya Birla','rj192382@gmail.com'),(245885,'Shantanu','Kandwaal','M','KIET Ghaziabad',2003,'CAD','Architectural Designer at CAD Design Sol.','shan.tanu@yahoo.com'),(247976,'Piyush','Jaiswaal','M','Quantum University Roorkee',2003,'Public Relation and Management','Supervisor of Manager Section at Flipkart','piyu69@gmail.com'),(248086,'Anant','Thakur','M','IIIT Jabalpur',2017,'Nuclear Physicist','Asst. Manager at NPCIL','Anant.tha@gmail.com'),(257338,'Smriti','Arora','F','Kristujayanti Collage Banglore',2002,'AI','Project Manager at Tesla','sm.arora@gmail.com'),(266369,'Shrishti','Yadav','F','BHU Varanasi',2007,'Particle Physicist','HOD at ISRO','shrishti.notfound@gmail.com'),(295352,'Aditya','Kaul','M','Amity University Noida',2005,'Fashion Photography','Freelancer','kaul.callme@gmail.com'),(296323,'NIshita','Rai','F','DTU Delhi',2020,'App Development','App Developer at Xbox','nishi69@gmail.com'),(357453,'Alok','Bhau','M','Quantum University Roorkee',1998,'Management','Head Manager at Yellow Chilli','alok.god@gmail.com'),(369242,'Shreya','Singh','F','NIT Bhopal',2017,'Microelectronic','Microelectronics Numerical Simulation Engi. at NI','shreya.saumi@gmail.com'),(386421,'Riya','Vedi','F','NIT Bhopal',2016,'Control Systems','Lead Control System Verification Engineer At BechTel Corp.','riya.me@gmail.com'),(407372,'Aman','Gupta','M','NIT Bhopal',2013,'Game Developer','Chief Developer at BetX9','aman.notme@gmail.com'),(437547,'Naman ','Gupta','M','DTU Delhi',2017,'Radio Frequency Engineering','Radio Frequency Engineer at Samsung Electronics','naman.chaman@yahoo.com'),(477435,'Devita','Saikiya','F','KIET Ghaziabaad',2008,'Robotics','Technical Engineer at TATA','devita.sahihai@gmail.com'),(504938,'Ashwasti','Agha','F','BITS Pilani',2018,'AI','Software Developer at Uber','ashwas.ag@gmail.com'),(533564,'Ankita ','Bhatnagar','F','Integral University',2012,'Graphic Designing','Packaging Designer at Pepsi','antiva.ankita@yahoo.com'),(586735,'Ankita','Thakur','F','BITS Pilani',2011,'ML','App Developer at BGMI','antava.oo@gmail.com'),(632554,'Samay','Rada','M','IIIT Jabalpur ',2011,'Telecommunications','Asst. Manager at Invest India','samay.rada@yahoo.com'),(654323,'Neha','Upadhyay','F','Integral University Lucknow',2019,'Acting','Actress','neha.neha@rediffmail.com'),(693746,'Neha','Dhupia','F','BITS Pilani',2019,'Photography','Freelancer','Neha.itsherchoice@gmail.com\r\n'),(693753,'Harsh','Rana','M','BITS Pilani',2015,'Astrology ','Astrologist at BabaSehPucho.com','dhongipandit@gmail.com'),(694273,'Mayank','Raj','M','NIT Bhopal',2003,'Cloud Computing','Infrastructure Specialist Cloud Platforms IBM','mayank.raj@yahoo.com'),(876513,'Arnal','Sainik','M','NSUT Delhi',2014,'Blockchain Designing','Blockchain Developer at CoinDCX','arval.soldier@gmail.com'),(876543,'Ishita','Rai','F','Quantum University Roorkee',2020,'Full Stack Developer','Chief Technology Developer at JIIT','ishi.sid@gmail.com'),(976543,'Rahul','Bothra','M','KIET Ghaziabad',2021,'Web Development','Website Designer At Google','rahul.good@gmail.com'),(981344,'Ravi','Chopra','M','IIIT Jabalpur',2018,'Discrete Mathematics and Analysis','Assistant Manager at BHU','ravi.chopra@gmail.com'),(987635,'Piyali','Saha','F','KIET Ghaziabad',2019,'Electrical Sciences','Communication Engineer at Dimension India Network','piyaorepiya@gmail.com'),(987654,'Ridhi','Sachde','F','Quantum University Roorkee',2013,'Machine Learning','Senior ML Manager at Fintech','ridisach@gmail.com\r\n');
/*!40000 ALTER TABLE `pass_out` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-10  1:46:36