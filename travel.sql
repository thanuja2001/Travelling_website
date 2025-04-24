-- Table structure for table `register`
--

CREATE TABLE `register` (
  `F_name` varchar(30) NOT NULL,
  `L_name` varchar(30) NOT NULL,
  `U_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `C_code` int(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Re_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`F_name`, `L_name`, `U_name`, `Email`, `Country`, `C_code`, `Phone`, `Password`, `Re_password`) VALUES
('Aa', 'Bb', 'AaBb', 'abc@gmail.com', '', 22, 771234567, 'AaBb#123', 'AaBb#123'),
('Aa', 'Bb', 'AaBb', 'abc@gmail.com', '', 22, 771234567, 'AaBb#123', 'AaBb#123'),
('Gayan', 'vimukthi', 'Gayan', 'gayan@gmail.com', '', 94, 773634440, 'Gayan#123', 'Gayan#123');