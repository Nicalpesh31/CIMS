-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 10:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `question_paper`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `contents` longtext NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `branch`, `semester`, `subject`, `status`, `contents`, `added_by`) VALUES
(4, 'CIVIL', '2', 'xyz', 'published', '<p><strong>adadasd</strong></p>', 'x@gmail.com'),
(5, 'CIVIL', '3', 'xyz', 'unpublished', '<p><strong>asdas</strong></p><p>&nbsp;</p><p><i><strong>sddsfs</strong></i></p>', 'x@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_ans`
--

CREATE TABLE `assignment_ans` (
  `id` int(11) NOT NULL,
  `assignment_ans` longtext NOT NULL,
  `subject` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `stud_email` varchar(255) NOT NULL,
  `quesid` varchar(255) NOT NULL,
  `accept` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment_ans`
--

INSERT INTO `assignment_ans` (`id`, `assignment_ans`, `subject`, `semester`, `branch`, `stud_email`, `quesid`, `accept`) VALUES
(2, '<ul><li>sadsd</li><li><i><strong>hfghgfhfg</strong></i></li></ul>', 'xyz', '2', 'CIVIL', 'q@gmail.com', '4', 1),
(3, '<p>ssdsfsdfdsf</p><p>&nbsp;</p><ul><li><strong>assignment</strong></li></ul>', 'xyz', '2', 'CIVIL', 'q@gmail.com', '4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hod_details`
--

CREATE TABLE `hod_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod_details`
--

INSERT INTO `hod_details` (`id`, `firstname`, `middlename`, `lastname`, `email`, `phonenumber`, `birthdate`, `gender`, `branch`, `password`) VALUES
(1, 'p', 'q', 'r', 'p@gmail.com', '03214569870', '2022-02-01', 'male', 'CIVIL', '000');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_details`
--

CREATE TABLE `lecturer_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer_details`
--

INSERT INTO `lecturer_details` (`id`, `firstname`, `middlename`, `lastname`, `email`, `phonenumber`, `birthdate`, `gender`, `branch`, `password`) VALUES
(1, 'x', 'y', 'zz', 'x@gmail.com', '121212121', '2022-02-01', 'male', 'CIVIL', '777'),
(2, 'r', 'rr', 'rrr', 'r@gmail.com', '424234234', '2022-02-09', 'female', 'EXTC', '1212'),
(3, 'wewewe', 'wew', 'wewewe', 'wewe@gmail.com', '23232323', '2022-02-11', 'male', 'EXTC', '4455');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file_url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `branch`, `subject`, `semester`, `created`, `file_url`, `status`, `added_by`) VALUES
(3, 'CIVIL', 'abc', '2', '2022-02-14 16:11:54', 'Notes/Copy of Gaming YouTube Channel Art Template - Made with PosterMyWall.jpg', 'published', 'x@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_content` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_title`, `notice_content`, `status`, `created`, `semester`, `branch`) VALUES
(3, 'aasda', '<p><strong>asd</strong></p><p>&nbsp;</p><ul><li><strong>werewr</strong></li><li><strong>rtytytry</strong></li></ul>', 'published', '2022-02-13 21:19:43', '2', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `practical`
--

CREATE TABLE `practical` (
  `id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `contents` longtext NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `practical`
--

INSERT INTO `practical` (`id`, `branch`, `semester`, `subject`, `status`, `contents`, `added_by`) VALUES
(4, 'CIVIL', '2', 'xyz', 'published', '<p><strong>adadasd</strong></p>', 'x@gmail.com'),
(5, 'CIVIL', '2', 'xyz', 'published', '<p>dfsdffsdf</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>sdfdsfsdfdsfsd</strong></p><p>&nbsp;</p><ul><li><strong>dfgfdgdf</strong></li><li><strong>hfghfghfgh</strong></li></ul>', 'x@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `practical_ans`
--

CREATE TABLE `practical_ans` (
  `id` int(11) NOT NULL,
  `practical_ans` longtext NOT NULL,
  `subject` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `stud_email` varchar(255) NOT NULL,
  `quesid` varchar(255) NOT NULL,
  `accept` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `practical_ans`
--

INSERT INTO `practical_ans` (`id`, `practical_ans`, `subject`, `semester`, `branch`, `stud_email`, `quesid`, `accept`) VALUES
(2, '<ul><li>sadsd</li><li><i><strong>hfghgfhfg</strong></i></li></ul>', 'xyz', '2', 'CIVIL', 'q@gmail.com', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `questionmarks` int(11) NOT NULL,
  `correctanwer` varchar(255) NOT NULL,
  `optiond` varchar(255) NOT NULL,
  `optionc` varchar(255) NOT NULL,
  `optionb` varchar(255) NOT NULL,
  `optiona` varchar(255) NOT NULL,
  `question` longtext NOT NULL,
  `subject` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionmarks`, `correctanwer`, `optiond`, `optionc`, `optionb`, `optiona`, `question`, `subject`, `semester`, `branch`, `added_by`) VALUES
(1, 2, 'b', 'ddd', 'ccc', 'bbb', 'saa', 'aasdsada fddsfsdf sdfsdfsdf ', 'xyz', '2', 'CIVIL', 'x@gmail.com'),
(2, 2, 'c', 'sadsad', 'sdsad', 'sadsd', 'sadasd', 'aadasasdsad', 'xyz', '2', 'CIVIL', 'x@gmail.com'),
(3, 2, 'c', 'asdad', 'asddsa', 'sadsad', 'asdas', 'dasdadasd', 'xyz', '2', 'CIVIL', 'x@gmail.com'),
(4, 2, 'c', 'zxczxc', 'zcxczx', 'zczxc', 'zxczxc', 'czxzczcx', 'xyz', '2', 'CIVIL', 'x@gmail.com'),
(5, 2, 'c', 'asdasd', 'sadasd', 'dasd', 'sadsad', 'sdadadaaaaaaaaaaaa', 'xyz', '2', 'CIVIL', 'x@gmail.com'),
(6, 2, 'd', 'dsdsdsd', 'ssss', 'ddsss', 'ddddd', 'saddddddddddddd', 'xyz', '2', 'CIVIL', 'x@gmail.com'),
(7, 2, 'b', 'asdasd', 'asdasd', 'sadasd', 'sdsadsad', 'dddddddddddddddddddaaaaaaaaaa', 'xyz', '2', 'CIVIL', 'x@gmail.com'),
(8, 2, 'a', 'ghgh', 'ghgh', 'hhhghgh', 'retth', 'sdsafghgfhfgh', 'xyz', '2', 'CIVIL', 'x@gmail.com'),
(9, 2, 'c', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'fsdfsd', 'dsfsdfsdf', 'xyz', '2', 'CIVIL', 'x@gmail.com'),
(10, 1, 'a', 'dsfsdf', 'sdfsdf', 'sdfsdf', 'dfsdf', 'sdfdsfsd', 'xyz', '2', 'CIVIL', 'x@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `question_paper`
--

CREATE TABLE `question_paper` (
  `id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `totalmarks` int(11) NOT NULL,
  `totalquestions` int(11) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `question_paper_id` varchar(255) NOT NULL,
  `question_id` varchar(122) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `pprname` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_paper`
--

INSERT INTO `question_paper` (`id`, `branch`, `semester`, `subject`, `time`, `totalmarks`, `totalquestions`, `added_by`, `question_paper_id`, `question_id`, `status`, `pprname`) VALUES
(37, 'CIVIL', '2', 'xyz', 180, 16, 10, 'x@gmail.com', '620bf2a197ac5', '5', 1, ''),
(38, 'CIVIL', '2', 'xyz', 180, 16, 10, 'x@gmail.com', '620bf2a197ac5', '1', 1, ''),
(39, 'CIVIL', '2', 'xyz', 180, 16, 10, 'x@gmail.com', '620bf2a197ac5', '2', 1, ''),
(40, 'CIVIL', '2', 'xyz', 180, 16, 10, 'x@gmail.com', '620bf2a197ac5', '4', 1, ''),
(41, 'CIVIL', '2', 'xyz', 180, 16, 10, 'x@gmail.com', '620bf2a197ac5', '3', 1, ''),
(42, 'CIVIL', '2', 'xyz', 180, 16, 10, 'x@gmail.com', '620bf2a197ac5', '6', 1, ''),
(43, 'CIVIL', '2', 'xyz', 180, 16, 10, 'x@gmail.com', '620bf2a197ac5', '9', 1, ''),
(44, 'CIVIL', '2', 'xyz', 180, 16, 10, 'x@gmail.com', '620bf2a197ac5', '7', 1, ''),
(53, 'CIVIL', '2', 'xyz', 30, 10, 5, 'x@gmail.com', '620f6456c866f', '7', 1, ''),
(54, 'CIVIL', '2', 'xyz', 30, 10, 5, 'x@gmail.com', '620f6456c866f', '3', 1, ''),
(55, 'CIVIL', '2', 'xyz', 30, 10, 5, 'x@gmail.com', '620f6456c866f', '9', 1, ''),
(56, 'CIVIL', '2', 'xyz', 30, 10, 5, 'x@gmail.com', '620f6456c866f', '5', 1, ''),
(57, 'CIVIL', '2', 'xyz', 30, 10, 5, 'x@gmail.com', '620f6456c866f', '1', 1, ''),
(58, 'CIVIL', '2', 'xyz', 30, 9, 5, 'x@gmail.com', '620f649f1cb76', '2', 0, ''),
(59, 'CIVIL', '2', 'xyz', 30, 9, 5, 'x@gmail.com', '620f649f1cb76', '1', 0, ''),
(60, 'CIVIL', '2', 'xyz', 30, 9, 5, 'x@gmail.com', '620f649f1cb76', '5', 0, ''),
(61, 'CIVIL', '2', 'xyz', 30, 9, 5, 'x@gmail.com', '620f649f1cb76', '10', 0, ''),
(62, 'CIVIL', '2', 'xyz', 30, 9, 5, 'x@gmail.com', '620f649f1cb76', '7', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `question_paper_ans`
--

CREATE TABLE `question_paper_ans` (
  `id` int(11) NOT NULL,
  `studemail` varchar(255) NOT NULL,
  `question_paper_id` varchar(255) NOT NULL,
  `question_id` varchar(255) NOT NULL,
  `question_ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_paper_ans`
--

INSERT INTO `question_paper_ans` (`id`, `studemail`, `question_paper_id`, `question_id`, `question_ans`) VALUES
(25, 'q@gmail.com', '620bf2a197ac5', '5', 'a'),
(26, 'q@gmail.com', '620bf2a197ac5', '1', 'b'),
(27, 'q@gmail.com', '620bf2a197ac5', '2', 'c'),
(28, 'q@gmail.com', '620bf2a197ac5', '4', 'd'),
(29, 'q@gmail.com', '620bf2a197ac5', '3', 'a'),
(30, 'q@gmail.com', '620bf2a197ac5', '6', 'b'),
(31, 'q@gmail.com', '620bf2a197ac5', '9', 'c'),
(32, 'q@gmail.com', '620bf2a197ac5', '7', 'd'),
(33, 'q@gmail.com', '620f6456c866f', '7', ''),
(34, 'q@gmail.com', '620f6456c866f', '3', ''),
(35, 'q@gmail.com', '620f6456c866f', '9', ''),
(36, 'q@gmail.com', '620f6456c866f', '5', ''),
(37, 'q@gmail.com', '620f6456c866f', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `students_detail`
--

CREATE TABLE `students_detail` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `rollnumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_detail`
--

INSERT INTO `students_detail` (`id`, `firstname`, `middlename`, `lastname`, `email`, `phonenumber`, `birthdate`, `gender`, `year`, `branch`, `semester`, `rollnumber`, `password`, `role`) VALUES
(15, 'qqq', 'q', 'q', 'q@gmail.com', '1212121212', '2022-02-17', 'female', '4', 'CIVIL', '2', '121212', '222', 'student'),
(16, 'sadsad', 'sada', 'asass', 'asasas@gmail.com', '423213213123', '2022-02-10', 'male', '3', 'EXTC', '3', '1221', '2323', 'student'),
(17, 'tytyty', 'tyt', 'tytyt', 'tyty@gmail.com', '6454545445', '2022-02-15', 'female', '3', 'CIVIL', '3', '4454', '6565', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `lect_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `branch`, `semester`, `subject`, `lect_id`) VALUES
(5, 'CIVIL', '1', 'C++', 'x@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `email`, `password`, `role`) VALUES
(2, 'admin@gmail.com', '999', 'admin'),
(3, 'p@gmail.com', '000', 'HOD'),
(4, 'x@gmail.com', '777', 'lecturer'),
(5, 'q@gmail.com', '222', 'student'),
(6, 'r@gmail.com', '1212', 'HOD'),
(7, 'asasas@gmail.com', '2323', 'student'),
(8, 'wewe@gmail.com', '4455', 'lecturer'),
(9, 'tyty@gmail.com', '6565', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment_ans`
--
ALTER TABLE `assignment_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod_details`
--
ALTER TABLE `hod_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_details`
--
ALTER TABLE `lecturer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practical`
--
ALTER TABLE `practical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practical_ans`
--
ALTER TABLE `practical_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_paper`
--
ALTER TABLE `question_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_paper_ans`
--
ALTER TABLE `question_paper_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_detail`
--
ALTER TABLE `students_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assignment_ans`
--
ALTER TABLE `assignment_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hod_details`
--
ALTER TABLE `hod_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecturer_details`
--
ALTER TABLE `lecturer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `practical`
--
ALTER TABLE `practical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `practical_ans`
--
ALTER TABLE `practical_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question_paper`
--
ALTER TABLE `question_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `question_paper_ans`
--
ALTER TABLE `question_paper_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `students_detail`
--
ALTER TABLE `students_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
