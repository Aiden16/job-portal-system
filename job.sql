

CREATE TABLE IF NOT EXISTS `application_master` (
  `ApplicationId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`ApplicationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;



INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES
(1, 3, 1, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(2, 3, 2, 'Call Latter Send', 'You are Invited For Interview on 10-MAR-2013.'),
(3, 3, 3, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(5, 3, 4, 'Call Latter Send', 'Invited on 21-Dec-2013.');


-- --
-- Table structure for table `employer_reg`
--

CREATE TABLE IF NOT EXISTS `employer_reg` (
  `EmployerId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`EmployerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- inserting into table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`) VALUES
(4, 'Solusoft  Pvt Limite', 'Mr. Nirav Soni', 'Narayanpura', 'Ahmedabad', 'nirav@gmail.com', 9898989898, 'Software', 'Confirm', 'nirav', 'nirav'),
(5, 'Info Matrics', 'Mr. Narayan', 'Sahibagh', 'Ahmedabad', 'narayan@yahoo.com', 6767676767, 'Software', 'Confirm', 'narayan', 'narayan');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_education`
--

CREATE TABLE IF NOT EXISTS `Academics` (
  `JobSeekId` int(11) NOT NULL AUTO_INCREMENT PRIMARY key,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `HighSchool` varchar(100) NOT NULL,
  `Cgpa` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- inserting into table `jobseeker_education`
--

INSERT INTO `Academics` ( `JobSeekId`, `Degree`, `University`, `HighSchool`, `Cgpa`,`Percentage`) VALUES
(3, 'BTECH', 'Vellore Universiy', 'Rawal convent High School',9, 98.89),
(4, 'MBA', 'Oxford Universiy', 'Cotton convent High School',7, 78.89);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE IF NOT EXISTS `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekerName` varchar(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`JobSeekId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- inserting into table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`,  `Qualification`, `Resume`, `Status`, `UserName`, `Password`) VALUES
(3, 'Jalpa Prajapati', 'M.C.A',  'Marksheet.pdf', 'Confirm', 'jalpa', 'jalpa');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE IF NOT EXISTS `job_master` (
  `JobId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- inserting into table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(3, 'TCS Private Limited', 'Software Trainee Required', 1, 'B.Sc.I.T', 'Starting Salary 5000'),
(4, 'Wipro Infotech', 'Cleaners Required', 3, 'S.S.C', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- inserting into table `admin`
--

INSERT INTO `Admin` (`UserId`, `UserName`, `Password`) VALUES
(6, 'Nitish', 'Nitish'),
(10, 'Vaishnavi', 'Vaishnavi');

-- --------------------------------------------------------

--
-- Table structure for table `interviewType`
--

CREATE TABLE IF NOT EXISTS `interview_type` (
  `int_id_type` int(11) NOT NULL AUTO_INCREMENT,
  `int_type_name` varchar(20) NOT NULL,
  PRIMARY KEY (`int_id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1  ;

--
-- inserting into table `interview_type`
--

INSERT INTO `interview_type` (`int_id_type`, `int_type_name`) VALUES
(1, 'one to one'),
(2, 'panel interview'),
(3, 'Group interview'),
(4, 'Phone interview'),
(5, 'Lunch interview');

--
-- Table structure for table `Interview`
--

CREATE TABLE IF NOT EXISTS `interview` (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL,
  `int_id_type` int(6) NOT NULL,
  PRIMARY KEY (`int_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- inserting into table `Interview`
--

INSERT INTO `interview` (`int_id`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `InterviewDate`, `InterviewTime`,`int_id_type`) VALUES
(1, 'Wipro Infotech', 'Freshers Required', 5, 'B.C.A', 'Hardworking Person are Required.', '2013-09-25', '09:00:00','2'),
(2, 'TCS Private Limited', 'Marketive Representative Invited', 2, 'Pharmacist', 'Ready TO work in North Gujarat', '2013-10-07', '09:00:00','3');

--
-- Table structure for table `personalinfo`
--
CREATE TABLE IF NOT EXISTS `personal_info` (
  `JobSeekId` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1  ;

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `Skills` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `co_curricular` varchar(80) NOT NULL,
  `techical` varchar(80) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1  ;
