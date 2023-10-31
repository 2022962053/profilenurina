CREATE TABLE `nurina` (
  `ic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar (255) NOT NULL,
  `languageknown` varchar (255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `nurina` (`ic`, `name`, `father`, `mother`, `dob`, `address`,`nationality`,`languageknown`, `phone`, `hobby`, `age`, `gender`, `email`, `images`) VALUES
('010225100600', 'Nurina Afiqah Binti Zulqarnain', 'Zulqarnain Bin Rasli', 'Norliza Binti Mahmud','25 February 2001', 'Shah Alam, Selangor', 'Malaysian','Malay, English','0192512016', 'Baking', 22, 'Female', '2022962053@student.uitm.edu.my', 'nina.jpg');
