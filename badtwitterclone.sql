SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `badtwitterclone`
--

-- --------------------------------------------------------

--
-- Table structure for table `Tweets`
--

CREATE TABLE IF NOT EXISTS `Tweets` (
  `ID` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Username` varchar(50) NOT NULL,
  `Tweet` varchar(140) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tweets`
--

INSERT INTO `Tweets` (`ID`, `Username`, `Tweet`) VALUES
('2014-08-19 10:44:12', 'admin', 'My first tweet!');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Username`, `Password`, `Email`) VALUES
('admin', 'admin', 'admin@example.com');
