

CREATE TABLE IF NOT EXISTS `archivefile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fileurl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `bucketfile`
--

CREATE TABLE IF NOT EXISTS `bucketfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fileurl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `bucketfile`
--

INSERT INTO `bucketfile` (`id`, `fileurl`) VALUES
(13, 'cloudbucket/f8.png'),
(15, 'cloudbucket/g1.png');

-- --------------------------------------------------------

--
-- Table structure for table `trashfile`
--

CREATE TABLE IF NOT EXISTS `trashfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fileurl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'abdganiu', '53dc42b787aec27ca0a540d12c64524a'),
(19, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(21, 'ishola', '19b4c6c95a51c83ff787e7636f0a4e3b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
