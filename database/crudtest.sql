CREATE TABLE `cours` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;