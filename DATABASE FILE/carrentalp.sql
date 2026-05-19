-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 05:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentalp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(20) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_nameplate` varchar(50) NOT NULL,
  `car_img` varchar(50) DEFAULT 'NA',
  `ac_price` float NOT NULL,
  `non_ac_price` float NOT NULL,
  `ac_price_per_day` float NOT NULL,
  `non_ac_price_per_day` float NOT NULL,
  `car_availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_nameplate`, `car_img`, `ac_price`, `non_ac_price`, `ac_price_per_day`, `non_ac_price_per_day`, `car_availability`) VALUES
(1, 'Toyota Vios', 'GA3KA6969', 'assets/img/cars/vios.jpeg', 36, 26, 5200, 2600, 'yes'),
(2, 'Toyota Avanza', 'BA2CH2020', 'assets/img/cars/avanza.jpg', 22, 12, 2900, 1400, 'yes'),
(3, 'Toyota Innova', 'BA10PA5555', 'assets/img/cars/innova1.jpg', 39, 30, 6950, 5999, 'no'),
(4, 'Toyota Hiace', 'BA10CH6009', 'assets/img/cars/hiace.jpg', 45, 30, 7200, 5200, 'yes'),
(6, 'Ford EcoSport', 'GA4PA2587', 'assets/img/cars/ecosport.png', 21, 13, 3890, 2600, 'yes'),
(7, 'Ford Everest', 'PJ16YX8820', 'assets/img/cars/everest.jpg', 14, 12, 2800, 2400, 'yes'),
(8, 'Ford Territory', 'GA5KH9669', 'assets/img/cars/teritory.jpg', 36, 26, 6000, 4600, 'yes'),
(9, 'Ford Ranger', 'GA6PA6666', 'assets/img/cars/ford-ranger-wildtrak.jpg', 20, 12, 2900, 1400, 'yes'),
(10, 'Nissan Almera', 'TN17MS1997', 'assets/img/cars/nissanalmera.jpg', 22, 15, 2850, 1400, 'yes'),
(11, 'Nissan Terra', 'KA12EX1883', 'assets/img/cars/nissan-terra.jpg', 15, 13, 3000, 2600, 'yes'),
(12, 'Nissan Navara', 'GA08MX1997', 'assets/img/cars/navara.png', 16, 14, 3200, 2800, 'yes'),
(13, 'Nissan NV350', 'BA20PA5685', 'assets/img/cars/urvan.png', 23, 15, 4500, 3500, 'yes'),
(16, 'Ford Raptor', 'LMNOP23456', 'assets/img/cars/RAPTORS.jpg', 40, 20, 400, 200, 'no'),
(17, 'Honda Civic Rs', 'QRVKWERQAS', 'assets/img/cars/honda-civic.jpg', 100, 60, 2100, 2100, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `clientcars`
--

CREATE TABLE `clientcars` (
  `car_id` int(20) NOT NULL,
  `client_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clientcars`
--

INSERT INTO `clientcars` (`car_id`, `client_username`) VALUES
(1, 'root'),
(2, 'root'),
(3, 'root'),
(4, 'root'),
(6, 'root'),
(7, 'root'),
(8, 'root'),
(9, 'root'),
(10, 'root'),
(11, 'root'),
(12, 'root'),
(13, 'root'),
(16, 'root'),
(17, 'wayner26');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_username` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_phone` varchar(15) NOT NULL,
  `client_email` varchar(25) NOT NULL,
  `client_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `client_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_username`, `client_name`, `client_phone`, `client_email`, `client_address`, `client_password`) VALUES
('bred', 'bred', '6969696969', 'bred@gmail.com', 'Angkol', '12345'),
('Jers', 'Jerry Cardenas', '68584838', 'jer@gmail.com', 'dfvjlfjd', '12345'),
('k', 'k', '67676767', 'k@gmail.com', 'k', '12345'),
('Kie', 'Kieron', '6969696969', 'kieron@gmail.com', 'Dapitan', '12345'),
('kols', 'kols', '0977777777777', 'kols@gmail.com', 'dhdjfhkj bcui', '12345'),
('MACK', 'MACK', '565656789', 'mack@gmail.com', 'mcdo', '12345'),
('pol', 'pol', '69696', 'p@gmail.com', '6sickjb', '12345'),
('rak', 'rack', '09696996996969', 'rak@gmail.com', 'dipolog', '12345'),
('rambo', 'rambo', '093334567', 'rams@gmail.com', 'Dapitan', '12345'),
('rambotan', 'rambotan', '093334567', 'ramstan@gmail.com', 'Dapitan', '12345'),
('root', 'Rhett Wayne Manubag', '0969696969', 'sixtynine@gmail.com', 'Dipshit', '12345'),
('ter', 'ther', '09555666777222', 'ter@gmail.com', 'turmeng', '12345'),
('turks', 'turko', '093334567', 'turks@gmail.com', 'Dapitan', '12345'),
('Ukininam', 'George Hirbert George', '09454545454545', 'ukinams@gmail.com', 'Marawi', '12345'),
('vdfnvk', 'nsd', '655986759687', 'sdvcsv@gmail.com', 'jvdjfvd', '12345'),
('vdfvd', 'vndfjv', '093447574747', 'sdvcsv@gmail.com', 'c vc dvdfd', '12345'),
('wayner26', 'Rhett Wayne Manubag', '09567613638', 'rmanubag308@gmail.com', 'ZDN,Dipolog City, Upper Turno', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_username` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_email` varchar(25) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `customer_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_username`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `customer_password`) VALUES
('a', 'a', '84938734t', 'a@gmail.com', 'turk', '12345'),
('h', 'h', '677886888', 'h@gmail.com', 'fjfjero', '12345'),
('keiron', 'Kieron Bernido', '09652322345', 'keiron@gmail.com', 'ZDN, Dipolog City, Upper Turno', '12345'),
('l', 'l', '7979797979', 'l@gmail.com', 'embot', '12345'),
('r', 'r', '0796860', 'r@gmail.com', 'g', '12345'),
('rappy', 'Ralph Wyndryl Andilab', '866969696', 'rap@gmail.com', 'Sindangan', '12345'),
('root', 'rhett', '796569795078', 'hk2@gmail.com', 'svsdk', '12345'),
('t', 't', '6767676767', 't@gmail.com', 'fgkrrt', '12345'),
('teng', 'Intengski', '6969696969', 'bayot@gmail.com', 'jvjvf', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(20) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `dl_number` varchar(50) NOT NULL,
  `driver_phone` varchar(15) NOT NULL,
  `driver_address` varchar(50) NOT NULL,
  `driver_gender` varchar(10) NOT NULL,
  `client_username` varchar(50) NOT NULL,
  `driver_availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `dl_number`, `driver_phone`, `driver_address`, `driver_gender`, `client_username`, `driver_availability`) VALUES
(1, 'Johny Sins', '6875456790', '09123456789', 'Dipshit', 'Bayot', 'root', 'no'),
(2, 'Lexi Lore', '6969696969', '6969696969', 'Dipshit', 'Female', 'root', 'no'),
(10, 'kol', '898989', '898989', 'ghfh', 'Male', 'root', 'yes'),
(11, 'Vin Diesel', '5678912345', '0912121212', 'Dipolog City', 'Male', 'wayner26', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `rentedcars`
--

CREATE TABLE `rentedcars` (
  `id` int(100) NOT NULL,
  `customer_username` varchar(50) NOT NULL,
  `car_id` int(20) NOT NULL,
  `driver_id` int(20) NOT NULL,
  `booking_date` date NOT NULL,
  `rent_start_date` date NOT NULL,
  `rent_end_date` date NOT NULL,
  `car_return_date` date DEFAULT NULL,
  `fare` double NOT NULL,
  `charge_type` varchar(25) NOT NULL DEFAULT 'days',
  `distance` double DEFAULT NULL,
  `no_of_days` int(50) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `return_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rentedcars`
--

INSERT INTO `rentedcars` (`id`, `customer_username`, `car_id`, `driver_id`, `booking_date`, `rent_start_date`, `rent_end_date`, `car_return_date`, `fare`, `charge_type`, `distance`, `no_of_days`, `total_amount`, `return_status`) VALUES
(574681284, 'root', 2, 1, '2023-12-08', '2023-12-08', '2023-12-09', '2023-12-08', 22, 'km', 1, 1, 22, 'R'),
(574681285, 'root', 1, 10, '2023-12-08', '2023-12-30', '2023-12-31', '2023-12-08', 5200, 'days', NULL, 1, 5200, 'R'),
(574681286, 'teng', 3, 1, '2023-12-08', '2023-12-08', '2023-12-10', NULL, 6950, 'days', NULL, NULL, NULL, 'NR'),
(574681287, 'root', 1, 2, '2023-12-08', '2023-12-08', '2023-12-09', '2023-12-08', 5200, 'days', NULL, 1, 5200, 'R'),
(574681288, 'root', 1, 2, '2023-12-08', '2023-12-08', '2023-12-09', '2023-12-08', 5200, 'days', NULL, 1, 5200, 'R'),
(574681289, 'root', 4, 2, '2023-12-08', '2023-12-08', '2023-12-10', '2023-12-08', 7200, 'days', NULL, 2, 14400, 'R'),
(574681290, 'root', 1, 2, '2023-12-08', '2023-12-08', '2023-12-10', '2023-12-08', 5200, 'days', NULL, 2, 10400, 'R'),
(574681291, 'keiron', 1, 2, '2023-12-09', '2023-12-10', '2023-12-14', '2023-12-09', 5200, 'days', NULL, 4, 20800, 'R'),
(574681292, 'keiron', 17, 11, '2023-12-09', '2023-12-25', '2023-12-27', '2023-12-09', 2100, 'days', NULL, 2, 4200, 'R'),
(574681293, 'keiron', 16, 2, '2023-12-09', '2023-12-09', '2023-12-10', NULL, 400, 'days', NULL, NULL, NULL, 'NR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `car_nameplate` (`car_nameplate`);

--
-- Indexes for table `clientcars`
--
ALTER TABLE `clientcars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `client_username` (`client_username`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_username`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_username`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD UNIQUE KEY `dl_number` (`dl_number`),
  ADD KEY `client_username` (`client_username`);

--
-- Indexes for table `rentedcars`
--
ALTER TABLE `rentedcars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_username` (`customer_username`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rentedcars`
--
ALTER TABLE `rentedcars`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=574681294;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clientcars`
--
ALTER TABLE `clientcars`
  ADD CONSTRAINT `clientcars_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `clients` (`client_username`),
  ADD CONSTRAINT `clientcars_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `clients` (`client_username`);

--
-- Constraints for table `rentedcars`
--
ALTER TABLE `rentedcars`
  ADD CONSTRAINT `rentedcars_ibfk_1` FOREIGN KEY (`customer_username`) REFERENCES `customers` (`customer_username`),
  ADD CONSTRAINT `rentedcars_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`),
  ADD CONSTRAINT `rentedcars_ibfk_3` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
