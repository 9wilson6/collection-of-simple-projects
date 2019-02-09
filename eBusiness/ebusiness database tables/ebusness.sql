-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 02:31 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebusness`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `orders` int(11) NOT NULL DEFAULT '0',
  `phone` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `orders`, `phone`, `email`) VALUES
(1, 'Wei Lei', 'Bruce Highway Rockham', 0, '07888888888', 'gatheruwilson@gmail.com'),
(2, 'hustlemail9900', 'Bruce Highway ', 0, '0788789900', 'gatheruwilson@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `new_cars`
--

CREATE TABLE `new_cars` (
  `id` int(11) NOT NULL,
  `R_number` text NOT NULL,
  `C_make` text NOT NULL,
  `C_model` text NOT NULL,
  `D_type` text NOT NULL,
  `B_type` text NOT NULL,
  `B_Color` text NOT NULL,
  `transmission` text NOT NULL,
  `C_engine` text NOT NULL,
  `F_type` text NOT NULL,
  `D_number` text NOT NULL,
  `S_number` text NOT NULL,
  `price` text NOT NULL,
  `warranty` text NOT NULL,
  `E_warranty` text NOT NULL,
  `A_package` text NOT NULL,
  `N_cars` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_cars`
--

INSERT INTO `new_cars` (`id`, `R_number`, `C_make`, `C_model`, `D_type`, `B_type`, `B_Color`, `transmission`, `C_engine`, `F_type`, `D_number`, `S_number`, `price`, `warranty`, `E_warranty`, `A_package`, `N_cars`) VALUES
(6, 'N1234', 'Toyota', 'Land cruiser', '4x4', 'White', 'White', 'Automatic', 'V8', 'Diesel', '5', '7', '1000', '3', '2', 'Toyota', '5'),
(7, 'N1234hghgh', 'Toyota', 'Land cruiser', '4x4', 'White', 'yellow', 'manual', '4 cylinder', 'Petrol', '5', '7', '1000', '3', '2', 'Toyota', '5');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `car` text NOT NULL,
  `quantity` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `car`, `quantity`, `date`) VALUES
(1, 'hustlemail9900', 'gfhfhfh', '3', '2018-10-01 08:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `used_cars`
--

CREATE TABLE `used_cars` (
  `id` int(11) NOT NULL,
  `R_number` text NOT NULL,
  `C_make` text NOT NULL,
  `C_model` text NOT NULL,
  `D_type` text NOT NULL,
  `B_Color` text NOT NULL,
  `transmission` text NOT NULL,
  `C_engine` text NOT NULL,
  `F_type` text NOT NULL,
  `D_number` text NOT NULL,
  `S_number` text NOT NULL,
  `price` text NOT NULL,
  `Odometer` text NOT NULL,
  `Rego_no` text NOT NULL,
  `Rego_exp` text NOT NULL,
  `S_history` text NOT NULL,
  `V_id` text NOT NULL,
  `C_history` text NOT NULL,
  `C_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used_cars`
--

INSERT INTO `used_cars` (`id`, `R_number`, `C_make`, `C_model`, `D_type`, `B_Color`, `transmission`, `C_engine`, `F_type`, `D_number`, `S_number`, `price`, `Odometer`, `Rego_no`, `Rego_exp`, `S_history`, `V_id`, `C_history`, `C_number`) VALUES
(1, 'N1234', 'Nissan', 'X-Trail', '4x4', '', 'Automatic', '4 cylinder', 'Diesel', '5', '7', '1000', '1500', '123ABC', '', 'This car has', 'VIN MV%', 'This car has ....', '6'),
(2, 'K1234', 'Toyota', 'Land cruiser', '4x4', '', 'manual', 'V8', 'Diesel', '5', '7', '1000', '1500', '123ABC', '', 'the car has-----', 'VIN MV%', 'This car has ....', '6'),
(3, 'N1234hghgh', 'Toyota', 'Land cruiser', '4x4', 'White', 'Automatic', 'V8', 'Petrol', '5', '7', '1000', '1500', '123ABC', '2018', 'This car has', 'bgh', 'This car has ....', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_cars`
--
ALTER TABLE `new_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `used_cars`
--
ALTER TABLE `used_cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `new_cars`
--
ALTER TABLE `new_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `used_cars`
--
ALTER TABLE `used_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
