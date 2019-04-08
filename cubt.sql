-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 11:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cubt`
--

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `TotalSemester` int(11) DEFAULT NULL,
  `SemesterLength` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`id`, `Title`, `Description`, `TotalSemester`, `SemesterLength`) VALUES
(1, ' MBA', ' MASTER OF BUSINESS ADMINISTRATION', 4, 6),
(2, ' DBA', ' DOCTOR OF BUSINESS ADMINISTRATION', 4, 6),
(3, ' BBA', ' BACHELOR OF BUSINESS ADMINISTRATION', 6, 6),
(4, ' MAeD', ' MASTER OF ARTS IN EDUCATION', 4, 6),
(5, ' MACIS', ' MASTER OF ARTS IN COMPUTER INFORMATION SYSTEM', 4, 6),
(6, ' BBA Jr.', ' BACHELOR OF BUSINESS ADMINISTRATION - Junior', 4, 6),
(7, ' BBA Sr.', ' BACHELOR OF BUSINESS ADMINISTRATION - Senior', 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Student_ID` int(11) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Email_Address` varchar(255) DEFAULT NULL,
  `Phone_Number` varchar(255) DEFAULT NULL,
  `Address_1` varchar(255) DEFAULT NULL,
  `Address_2` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Zip` int(11) DEFAULT NULL,
  `Date_of_Birth` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Ethnicity` varchar(255) DEFAULT NULL,
  `Country_of_Origin` varchar(255) DEFAULT NULL,
  `Enrollment_Date` varchar(255) DEFAULT NULL,
  `Program` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Student_ID`, `First_Name`, `Last_Name`, `Email_Address`, `Phone_Number`, `Address_1`, `Address_2`, `City`, `State`, `Zip`, `Date_of_Birth`, `Gender`, `Ethnicity`, `Country_of_Origin`, `Enrollment_Date`, `Program`) VALUES
(1, 654984443, 'Mira', 'Okawa', 'Miemiemie18@msn.com', '424-230-1113', '5601 Walnut Ave', 'Add2', 'Long Beach', 'CA', 90805, '01/08/87', 'F', 'ECity', 'Japan ', '31/1/2017', 'Junior'),
(2, 786378945, 'Rinlapas', 'Lueangjaroenkit', 'Rinlapas.nina@gmail.com', '818-578-9817', '19006 Chase St.', 'Add3', 'Northridge', 'CA', 91324, '08/19/92', 'F', 'ECity', 'Thailand', '3/1/2017', 'MAED'),
(3, 997495956, 'Benjamin', 'Jr. Sabanal Nalzaro', 'benjaminnalzaro@yahoo.com', '641-455-1804', '139 S. Kingsvey Drive', 'Add4', 'LA', 'CA', 90004, '10/01/81', 'M', 'ECity', 'Philipines', '5/1/2017', 'DBA'),
(4, 666540448, 'Suchathip', 'Sarnkham', 'suchathip.s@gmail.com', '747-272-8120', '4077 West 3rd St.', 'Add5', 'LA', 'CA', 90020, '10/29/83', 'F', 'ECity', 'Thailand', '4/1/2017', 'MBA'),
(5, 664915876, 'Supida', 'Thanawinbavorndit', 'tha.supatcha@gmail.com', '323-492-7866', '1017  N. Berendo St.', 'Add6', 'LA', 'CA', 90029, '01/13/89', 'F', 'ECity', 'Thailand', '7/12/2016', 'MBA'),
(6, 964842863, 'Yuna', 'Oda', 'Unaoda1206@gmail.com', '323-350-0987', '3736 Westwood Blvd Apt 2', 'Add7', 'LA', 'CA', 90034, '12/06/84', 'F', 'ECity', 'Japan', '10/1/2017', 'MBA'),
(7, 997854621, 'Wasin', 'Penpratum', 'sebastianwasin@gmail.com', '626-428-7710', '115 S. Rural Dr.', 'Add8', 'Monterey Park', 'CA', 91755, '06/29/82', 'M', 'ECity', 'Thailand', '4/1/2017', 'MBA'),
(8, 365490019, 'Benjchaporn', 'Saengpol', 'benjymn@gmail.com', '323-369-2915', '1736 Clinton St.', 'Add9', 'LA', 'CA', 90026, '10/23/89', 'F', 'ECity', 'Thailand', '4/1/2017', 'MBA'),
(9, 650984488, 'Jirapat', 'Churnjai', 'San_jirapat@hotmail.com', '323-369-2966', '1736 Clinton St.', 'Add10', 'LA', 'CA', 90026, '07/15/90', 'M', 'ECity', 'Thailand', '4/1/2017', 'MBA'),
(10, 879658212, 'Paveerat', 'Siliyasub', 'Nan.paveerat@gmail.com', '909-727-9888', '1150 W. Stoneridge Ct.', 'Add11', 'Ontario', 'CA', 91762, '06/08/93', 'F', 'ECity', 'Thailand', '11/1/2017', 'MAED'),
(11, 981474360, 'Weeratat', 'Threethampinich', 'Limpoo_02@hotmail.com', '213-249-2120', '1725 N. Normandie Ave. Apt 21', 'Add12', 'LA', 'CA', 90027, '04/16/80', 'M', 'ECity', 'Thailand', '17/1/2017', 'DBA'),
(12, 698243657, 'Sittikorn', 'Jongpermwattanaphon', 'Por_6020@hotmail.com', '909-264-5323', '18270 Santa Fe Ave.', 'Add13', 'San Bernardio', 'CA', 92407, '07/12/89', 'M', 'ECity', 'Thailand', '5/1/2017', 'DBA'),
(13, 649844215, 'Sukit', 'Jaitong', 'Tun072@hotmail.com', '323-556-4460', '5589 W. Pico Blvd.', 'Add14', 'LA', 'CA', 90019, '04/24/80', 'M', 'ECity', 'Thailand', '1/2/2017', 'DBA'),
(14, 665404489, 'Yulong', 'Zhang', '', '415-530-8362', '1802 Pontenova ave.', 'Add15', 'Hacienda Height', 'CA', 91745, '08/25/88', 'M', 'ECity', 'China', '18/1/2017', 'MACIS'),
(15, 225988712, 'Walailak', 'Phetsamai', 'w.phetsamai@gmail.com', '626-589-3939', '1136 Knoll Drive.', 'Add16', 'Monterey Park', 'CA', 91745, '04/21/82', 'F', 'ECity', 'Thailand', '25/1/2017', 'MACIS'),
(16, 684165113, 'Weining', 'Bi ', '610467853@99.com', '626-616-6812', '2881 Woodsorrel Drive', 'Add17', 'Chino Hills', 'CA', 91709, '11/13/92', 'M', 'ECity', 'China', '4/1/2017', 'MBA'),
(17, 996565444, 'Sittiporn', 'Charoensrichai', 'Sittiporn.cna@gmail.com', '310-782-5676', '652 ½ W. 11th St.', 'Add18', 'San Pedro', 'CA', 90731, '01/22/85', 'M', 'ECity', 'Thailand', '15/2/2017', 'DBA'),
(18, 651098494, 'Jan', 'Patrick Jaurigue', 'Jpz_jaurigue@yahoo.com', '310-283-4243', '23421 Panama Ave.', 'Add19', 'Carson', 'CA', 90745, '08/02/86', 'M', 'ECity', 'Philipines', '23/2/2016', 'Senior'),
(19, 365984048, 'Yu', 'Ling Yeh', 'ylyehtw@yahoo.com', '714-883-4836', '5973 E. Calle Principia', 'Add20', 'Anaheim', 'CA', 92807, '04/11/64', 'F', 'ECity', 'Taiwan ', '24/1/2017', 'MBA'),
(20, 576236872, 'Chaiwat', 'Jaidee', 'j.chaiwat32@gmail.com', '213-245-7145', '4242 Normal Ave.', 'Add21', 'LA', 'CA', 90029, '02/10/89', 'M', 'ECity', 'Thailand', '18/1/2016', 'MBA'),
(21, 649808852, 'Jibenz', 'Bertulfo', 'duenasmanssa700@yahoo.com', '818-787-4466', '14424 Vanowen St.', 'Add22', 'Van Nuys', 'CA', 91405, '05/05/55', 'M', 'ECity', 'Philipines', '4/1/2017', 'DBA'),
(22, 123456789, 'Sarintip', 'Sripipat', 'sarinsripi@yahoo.com', '909-329-7996', 'add1', 'Add23', 'NA', 'CA', 12345, '02/18/83', 'F', 'ECity', 'Thailand', '14/2/2017', 'MBA'),
(23, 654980048, 'Shih', 'Yu Wu', 'qshley541541@gmail.com', '949-331-6774', '30 Nature', 'Add24', 'Irvine', 'CA', 92620, '11/16/77', 'M', 'ECity', 'Taiwan ', '1/1/1990', 'MBA'),
(24, 654987751, 'Sirilawan', 'Yoskumthon', 'Bombam.sirilawan@gmail.com', '818-818-7246', '307 S. Reno St., Apt. 401', 'Add25', 'LA', 'CA', 90057, '05/21/88', 'F', 'ECity', 'Thailand', '31/1/2017', 'MBA'),
(25, 556941334, 'Rachanan', 'Pundumrongklun ', 'ms. rachanan@gmail.com', '818-599-5462', '9743 Reseda Blvd. Unit 8', 'Add26', 'Northridge', 'CA', 91324, '06/21/88', 'F', 'ECity', 'Thailand', '15/2/2017', 'DBA'),
(26, 510684845, 'Gan', 'Zhang', 'Zhannan2014@gmail.com', '626-474-5687', '19609 Terraza Ter.', 'Add27', 'Walnut', 'CA', 91789, '02/04/91', 'M', 'ECity', 'China', '1/1/1990', 'MBA'),
(27, 661981001, 'Catherina', 'Fournier', 'Catherina1001@yahoo.com', '818-787-4466', '14424 Vanowen St.', 'Add28', 'Van Nuys', 'CA', 91405, '11/26/66', 'F', 'ECity', 'Philipines ', '4/1/2017', 'DBA'),
(28, 851473561, 'Xuping', 'Gao', 'mileyguo1110@gmail.com', '626-560-3425', '1817 Peaceful Hills Rd.', 'Add29', 'Walnut', 'CA', 91789, '05/05/55', 'F', 'ECity', '', '1/1/1990', 'MBA'),
(29, 668746691, 'Sararee', 'Jirattikanchote', 'pukan_nuch@hotmail.com', '562-310-8118', '5453 E. Harvey way', 'Add30', 'Long Beach', 'CA', 90808, '05/06/88', 'F', 'ECity', 'Thailand', '7/3/2017', 'MBA'),
(30, 665487743, 'Maxat', 'Kazakpayev', 'Maxat_kz89@mail.ru', '626-757-2074', '1721 Vine St., Apt. D', 'Add31', 'Alhambra', 'CA', 91801, '07/16/89', 'M', 'ECity', 'Kazakhstan', '1/3/2017', 'DBA'),
(31, 685416454, 'Piyakan', 'Chusilkul', 'p.shusilkul@hotmail', '951-207-7896', '9129 Admiralty Ave.', 'Add32', 'Riverside', 'CA', 92503, '05/05/55', 'M', 'ECity', 'Thailand', '1/3/2017', 'MBA'),
(32, 365484412, 'Setthada', 'Kankha', 'Noonoi_2772@hotmail.com', '310-986-5324', '756 Cedar Point Pl.', 'Add33', 'Westlake Village', 'CA', 91362, '01/10/85', 'M', 'ECity', 'Thailand', '15/2/2017', 'MBA'),
(33, 654652445, 'Richard', 'Camposano Tan', 'Richard.tan368@gmail.com', '626-554-2143', '1815 E. Cortez St. APT 232', 'Add34', 'West Covina', 'CA', 91791, '02/09/77', 'M', 'ECity', '', '1/1/1990', 'MBA'),
(34, 865748314, 'Thongpak', 'Junlanee', 'junnaitae@gmail.com', '323-794-8350', '288 S Kingsley Dr.', 'Add35', 'LA', 'CA', 90004, '05/05/55', 'F', 'ECity', 'Thailand', '21/2/2017', 'MBA'),
(35, 664254234, 'Konokwan', 'Chaowanitkul', 'chwankanokwan@gmail.com', '213-610-5005', '1616 N. Harvard Blvd.', 'Add36', 'LA', 'CA', 90020, '10/22/90', 'F', 'ECity', 'Thailand', '22/2/2017', 'MBA'),
(36, 684244621, 'Khemryn', 'Nontawatpakorn', 'anne.kanokwan@gmail.com', '424-283-1120', '1820 S. Bundy Dr., Apt. 6', 'Add37', 'LA', 'CA', 90025, '08/30/82', 'F', 'ECity', 'Thailand', '22/2/2017', 'MBA'),
(37, 365100488, 'Thanaree', 'Kannakit', 'q@q.q', '323-459-9989', '5426 Harold way. Apt#203', 'Add38', 'LA', 'CA', 90027, '05/05/55', '', 'ECity', 'Thailand', '28/2/2017', 'MBA'),
(38, 814654814, 'Mahidol', 'Maskao', 'neungamidori@gmail.com', '323-610-6661', '5007 Marathon St.', 'Add39', 'LA', 'CA', 90029, '05/05/55', 'M', 'ECity', 'Thailand', '7/3/2017', 'MBA'),
(39, 614736917, 'Sarunyu', 'Saisee', 'saisarunyou@gmail.com', '323-352-7569', '961 N. Kingsley Dr.', 'Add40', 'LA', 'CA', 90029, '05/05/55', 'M', 'ECity', 'Thailand', '1/3/2017', 'MBA'),
(40, 698464795, 'Anthika', 'Phangkhayan', 'Berry_sqeeze@hotmail.com', '657-377-7482', '9842 Stanford Ave.', 'Add41', 'Garden Grove', 'CA', 92841, '05/05/55', 'F', 'ECity', 'Thailand', '1/1/1990', 'MBA'),
(41, 879451564, 'Sitdhichai', 'Sriiam', 'Toon_un26@gmail.com', '213-234-8741', '1735 N. Serrano Ave', 'Add42', 'LA', 'CA', 90027, '04/23/83', 'M', 'ECity', 'Thailand', '1/3/2017', 'MBA'),
(42, 123456789, 'Anna', 'Beatriz Rivera Guerrero', 'q@q.q', '626-272-6443', 'add1', 'Add43', 'NA', 'CA', 12345, '05/05/55', 'F', 'ECity', 'Philippines', '1/1/1990', 'MBA'),
(43, 123456789, 'Noraset', 'Vasasiri', 'q@q.q', '310-406-4009', 'add1', 'Add44', 'NA', 'CA', 12345, '05/05/55', 'M', 'ECity', 'Thailand', '1/1/1990', 'MAED'),
(44, 548654634, 'Nattapon', 'Sathaisong', 'Nattapon_sa@hotmail.com', '213-421-4624', '340 S La Fayette Park Pl', 'Add45', 'LA', 'CA', 90057, '02/14/92', 'M', 'ECity', 'Thailand', '14/3/2017', 'MBA'),
(45, 671469785, 'Pichit', 'Laokanjana', 'Boytoon.plao@gmail.com', '404-775-3255', '2220 E. Chapman Ave. Unit 25', 'Add46', 'Fullerton', 'CA', 92831, '08/09/87', 'M', 'ECity', 'Thailand', '3/3/2017', 'MBA'),
(46, 851468486, 'Rattiya', 'Pahunratpitak', 'Rattiya.ouii@gmail.com', '323-743-6671', '5007 Marathon St. Apt 2A', 'Add47', 'LA', 'CA', 90029, '01/05/88', 'F', 'ECity', 'Thailand', '28/2/2017', 'MBA'),
(47, 542124561, 'Jiranun', 'Klinkajorn', 'Jiranun_klin@hotmail.com', '323-330-7601', '1283 N. Ardmore Ave', 'Add48', 'LA', 'CA', 90029, '03/04/91', 'F', 'ECity', 'Thailand', '28/2/2017', 'MBA'),
(48, 554107840, 'Suttikit', 'Chuayuan', 'Suttikit.ch@hotmail.com', '323-330-7603', '961 N. Kingsley Dr', 'Add49', 'LA', 'CA', 90029, '12/13/91', 'M', 'ECity', 'Thailand', '7/3/2017', 'MBA'),
(49, 548485751, 'Salisa', 'Sanpanich ', 'Tingnong.tn@gmail.com', '213-810-1076', '345 S. Westlake Ave. Apt 14', 'Add50', 'LA', 'CA', 90057, '05/04/87', 'F', 'ECity', 'Thailand', '7/3/2017', 'MBA'),
(50, 974566151, 'Suphapron', 'Khunatornphong', 'Suphapron1108@gmail.com', '323-640-8949', '1130 W. Redondo Beach Blvd', 'Add51', 'Gardena', 'CA', 90247, '02/05/98', 'F', 'ECity', 'Thailand', '11/1/2017', 'MBA'),
(51, 483314312, 'Praesiree', 'Saengwisit', 'keronopain@hotmail.com', '949-245-8499', '25752 Appian Way', 'Add52', 'Mission Viejo', 'CA', 92691, '05/05/55', 'F', 'ECity', 'Thailand', '8/3/2017', 'MBA'),
(52, 630446847, 'Worapol', 'Ploysub', 'worapolploysub@hotmail.com', '646-226-4426', '7830 Stalmer St', 'Add53', 'San Diego', 'CA', 92111, '05/05/55', 'M', 'ECity', 'Thailand', '8/3/2017', 'DBA'),
(53, 545646127, 'Temsiri', 'Klapprasit', 'namikarjung@hotmail.com', '661-289-1471', '19946 Eccles St', 'Add54', 'Canoga Park', 'CA', 91306, '05/05/55', 'F', 'ECity', 'Thailand', '7/3/2017', 'MBA'),
(54, 841465101, 'Yupparat', 'Jittaropas', 'Petchy_kung@hotmail.com', '818-853-4315', '16616 Ventura Blvd', 'Add55', 'Encino', 'CA', 91436, '05/05/55', 'F', 'ECity', 'Thailand', '1/1/1990', 'MBA'),
(55, 861740024, 'Tidarat', 'Rattanapan', 'Tidarat.be@gmail.com', '626-400-9949', '11034 Elliot Ave', 'Add56', 'El Monte', 'CA', 91732, '12/01/90', 'F', 'ECity', 'Thailand', '14/3/2017', 'MBA'),
(56, 985714017, 'Ausanee', 'Tantivipast', 'neenat@hotmail.com', '818-284-8848', '6439 Bonner Ave', 'Add57', 'North Hollywood', 'CA', 91606, '05/05/55', 'F', 'ECity', 'Thailand', '1/1/1990', 'MBA'),
(57, 650015250, 'Raweekit', 'Pradubsilp', 'idoomybest@gnail.com', '909-334-0405', '1640 N. Hobart Blvd, Apt 21', 'Add58', 'LA', 'CA', 90027, '04/02/89', 'M', 'ECity', 'Thailand', '14/3/2017', 'MBA'),
(58, 123456789, 'Noppawan', 'Yannawa', 'q@q.q', '805-469-8328', 'add1', 'Add59', 'NA', 'CA', 12345, '10/19/87', 'F', 'ECity', 'Thailand', '1/1/1990', 'MBA'),
(59, 541035404, 'Chih', 'Hao Wu', 'good22966@gmail.com', '626-255-1716', '750 Lincoln Ave.', 'Add60', 'Walnut', 'CA', 91789, '12/29/90', 'M', 'ECity', 'Taiwan ', '21/3/2017', 'MACIS'),
(60, 534153087, 'Preeyaporn', 'Suchartsakunsri', 'Toey-richy@hotmail.com', '949-302-0925', '2060 South Della Lane', 'Add61', 'Anaheim', 'CA', 92802, '12/2/1985', 'F', 'ECity', 'Thailand', '21/3/2017', 'MBA');

-- --------------------------------------------------------

--
-- Table structure for table `tblmenu`
--

CREATE TABLE `tblmenu` (
  `ID` int(11) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `NavigateTo` varchar(250) NOT NULL,
  `ParentMenu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmenu`
--

INSERT INTO `tblmenu` (`ID`, `MenuName`, `NavigateTo`, `ParentMenu`) VALUES
(1, 'Configuration Master', '#', ''),
(2, 'Academics', '#', ''),
(3, 'Fees', '#', ''),
(4, 'Students', '#', ''),
(5, 'Accounting', '#', ''),
(6, 'Degrees', 'degreecrud.php', 'Configuration Master'),
(7, 'Courses', 'add-new-courses.php', 'Configuration Master'),
(8, 'Subjects', 'add-new-subjects.php', 'Configuration Master'),
(9, 'Instructors', 'add-new-instructors.php', 'Configuration Master'),
(10, 'Staff', 'add-new-staff.php', 'Configuration Master'),
(11, 'Fees Collection', 'FeesCollection.php', 'Fees'),
(12, 'Fees Template', 'Create-Update-Fee-Template.php', 'Fees'),
(13, 'Alumni', 'alumni.php', 'Academics'),
(14, 'Placements', 'placements.php', 'Academics'),
(15, 'Exams', 'exams.php', 'Academics'),
(16, 'TimeTable', 'timetable.php', 'Academics'),
(17, 'Admission', 'student-admission.php', 'Students'),
(18, 'Attendance', 'student-attendance.php', 'Students'),
(19, 'Day Book', 'day-book.php', 'Accounting'),
(20, 'Cash Book', 'cash-book.php', 'Accounting'),
(21, 'Bank Book', 'bank-book.php', 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) NOT NULL,
  `LoginID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `LastLoggedin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `LoginID`, `Password`, `LastLoggedin`) VALUES
(1, 'mohit', 'mohit', '2017-06-01 03:24:40'),
(2, 'test', 'check', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tblmenu`
--
ALTER TABLE `tblmenu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
