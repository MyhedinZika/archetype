-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2016 at 05:05 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mzwebproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Games` varchar(255) DEFAULT NULL,
  `Rating` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Surname`, `Email`, `Gender`, `Games`, `Rating`) VALUES
(1, 'Test', 'Test', 'Test', 'male', 'CSGO', 'Excellent'),
(2, 'Test', 'Test', 'Test', 'female', 'DOTA', 'Excellent'),
(3, 'Test', 'test', 'test', 'female', 'CSGO, DOTA', 'Excellent'),
(4, 'Test', 'Test', 'Test', 'male', 'CSGO', 'Excellent'),
(5, 'Test', 'Test', 'Test', 'male', 'CSGO', 'Excellent'),
(6, 'Test', 'Test', 'Test', 'male', 'CSGO', 'Excellent'),
(7, 'test', 'Test', 'Test', 'male', 'CSGO', 'Excellent'),
(8, 'test', 'Test', 'Test', 'male', 'CSGO', 'Excellent'),
(9, 'test', 'Test', 'Test', 'male', 'CSGO', 'Excellent'),
(10, 'test', 'test', 'test', 'male', 'CSGO', 'Excellent'),
(11, 'test', 'test', 'test', 'male', 'CSGO', 'Excellent'),
(12, 'test', 'test', 'test', 'male', 'CSGO', 'Excellent'),
(13, 'test', 'test', 'test', 'male', 'CSGO', 'Excellent'),
(14, 'Myhedin', 'Zika', 'mz33396@ubt-uni.net', 'male', 'CSGO, DOTA', 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `postimet`
--

CREATE TABLE `postimet` (
  `ID` int(11) NOT NULL,
  `Titulli` varchar(255) NOT NULL,
  `NenTitulli` varchar(255) DEFAULT NULL,
  `Pershkrimi` text NOT NULL,
  `Foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postimet`
--

INSERT INTO `postimet` (`ID`, `Titulli`, `NenTitulli`, `Pershkrimi`, `Foto`) VALUES
(5, 'Nature', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam molestie orci et mattis porttitor. Cras elementum bibendum volutpat. Sed sit amet ligula nec lacus convallis dignissim sed eu massa. Aenean porta mauris eu semper ornare. Suspendisse accumsan, magna ut hendrerit pretium, mauris purus consequat nisi, non pharetra diam enim ut ipsum. Sed ac rhoncus risus, et interdum nibh. Nullam et est tortor. Nunc nibh ex, dictum non interdum eget, iaculis in dolor. Fusce facilisis in lacus sit amet elementum.', 'https://wallpaperscraft.com/image/nature_mountains_sky_lake_clouds_81150_200x300.jpg'),
(7, 'Titulli', 'NenTitulli', 'Duis egestas arcu turpis, eu consequat leo accumsan non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis sit amet risus et laoreet. Suspendisse nec eros nibh. Sed ut fermentum ligula. Praesent a viverra dui. Duis pharetra mauris nec viverra porta. Mauris interdum suscipit ligula sed rutrum. Nam nec dolor fermentum, semper nisi nec, interdum justo. Sed eleifend, libero nec tincidunt elementum, dui leo vestibulum ligula, a condimentum orci quam et leo. Cras finibus hendrerit eros id pellentesque. Sed at dapibus tortor, eu imperdiet orci. Phasellus semper metus quis maximus facilisis. Vestibulum porttitor elementum enim, faucibus convallis magna molestie sit amet. Nulla interdum metus elit, sit amet maximus ipsum aliquet vel.', 'https://wallpaperscraft.com/image/nature_river_light_trees_84788_200x300.jpg'),
(8, 'Beach', 'Wallpaper', 'Vivamus ipsum sapien, sollicitudin eget faucibus quis, vulputate eget quam. Duis porttitor nibh sed metus maximus aliquet. Aenean tincidunt, justo ut malesuada convallis, risus justo sollicitudin felis, eget mattis nisi diam vel leo. Nunc gravida lacinia leo at euismod. Nulla rutrum commodo tortor, volutpat vulputate urna faucibus non. Duis ultrices sem risus, non venenatis ante pretium in. Phasellus aliquet quam a risus scelerisque, non dapibus sapien pretium. Sed cursus eu massa vitae rutrum. Curabitur et sollicitudin elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas risus nulla, rhoncus consectetur tristique at, vehicula vel nunc. Duis lacus elit, laoreet egestas lorem ut, scelerisque luctus enim.', 'https://s-media-cache-ak0.pinimg.com/236x/38/8a/72/388a722b0e25370d044aee847856bcc0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Titulli` varchar(255) NOT NULL,
  `Permbajtja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Titulli`, `Permbajtja`) VALUES
(1, 'Website Optimization\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fermentum elit nec leo vestibulum, ultrices lobortis urna pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus eget lectus efficitur, commodo est id, vestibulum urna. In vel ex ac ante sodales auctor.'),
(2, 'Link Building Service', 'Donec suscipit commodo tellus. Phasellus congue turpis dolor, vel tincidunt massa condimentum et. Aenean rutrum consequat pellentesque. Sed hendrerit tortor turpis, sed ultrices arcu tincidunt et. Aenean vulputate fermentum felis, ut gravida arcu semper non. Suspendisse sed justo pharetra, commodo leo in, efficitur lectus.'),
(3, 'Guest Blogging', 'Maecenas eu efficitur urna. Nam imperdiet dapibus turpis at molestie. Nunc malesuada quam in sagittis elementum. Nullam eleifend ipsum ut arcu faucibus fermentum. Proin volutpat pulvinar sem nec pulvinar. Cras mattis purus in velit imperdiet viverra.'),
(4, 'Social Media Marketing\r\n\r\n', 'Nulla dictum, velit non congue congue, dolor tortor commodo purus, vel porttitor enim sapien eu dolor. Aliquam nec leo erat. Maecenas tincidunt turpis fermentum mi commodo, mollis accumsan odio luctus. Ut consequat tristique dolor sed fermentum. Quisque vel lacinia lacus.'),
(5, 'Website Development\r\n\r\n', 'Praesent imperdiet nisl nibh, et sodales urna pulvinar non. Suspendisse gravida finibus risus, sit amet molestie ligula lacinia in. Maecenas semper, ex ut cursus rutrum, metus dui cursus metus, quis euismod nunc felis a augue. Donec tristique elit et dui tincidunt, sit amet lobortis velit congue'),
(6, 'Training Support\r\n\r\n', 'Nulla vulputate nulla id dui auctor, luctus scelerisque purus efficitur. Vestibulum molestie erat ac diam blandit, a lacinia turpis posuere. Proin a elit non nulla laoreet lobortis.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `surname`, `password`) VALUES
('Myhedin', 'Myhedin', 'Zika', '123456'),
('MyhedinZ', 'M', 'Z', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
('test', 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
('test2', 'test2', 'test2', '109f4b3c50d7b0df729d299bc6f8e9ef9066971f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `postimet`
--
ALTER TABLE `postimet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `postimet`
--
ALTER TABLE `postimet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
