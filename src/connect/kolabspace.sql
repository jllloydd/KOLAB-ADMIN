-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 03:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolabspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `admin_role` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `admin_role`, `username`, `password`) VALUES
(0, 'Admin', 'Marianne', '123456');

--
-- Triggers `admin`
--
DELIMITER $$
CREATE TRIGGER `delete_admin_trigger` AFTER DELETE ON `admin` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (OLD.adminid, 'Admin deleted', CONCAT('Admin ', OLD.username, ' deleted.'), 'admin', OLD.adminid, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_admin_trigger` AFTER INSERT ON `admin` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (NEW.adminid, 'New admin added', CONCAT(admin_role, ' ', NEW.username, ' added.'), 'admin', NEW.adminid, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_admin_trigger` AFTER UPDATE ON `admin` FOR EACH ROW BEGIN
    DECLARE action_description VARCHAR(255);
    
    IF OLD.username != NEW.username THEN
        SET action_description = CONCAT('Admin ', OLD.username, ' username updated to ', NEW.username, '.');
        INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
        VALUES (NEW.adminid, 'Admin updated', action_description, 'admin', NEW.adminid, CURDATE(), CURTIME());
    END IF;
    
    IF OLD.password != NEW.password THEN
        SET action_description = CONCAT('Admin ', OLD.username, ' changed their password.');
        INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
        VALUES (NEW.adminid, 'Admin updated', action_description, 'admin', NEW.adminid, CURDATE(), CURTIME());
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `status` varchar(255) DEFAULT 'Pending',
  `reference_number` bigint(20) UNSIGNED DEFAULT NULL,
  `term_rate` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pax` int(11) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `payment_method` int(11) DEFAULT NULL,
  `voucher` varchar(50) NOT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `firstname`, `lastname`, `email`, `number`, `booking_date`, `status`, `reference_number`, `term_rate`, `dob`, `address`, `pax`, `start_time`, `end_time`, `payment_method`, `voucher`, `date_created`) VALUES
(1, 'Marianne', 'Malayo', 'mayingfar17@gmail.com', '09091895619', '2024-05-10', 'Pending', NULL, 75, '2024-05-31', 'Orchid St., San Luis Village', 2, '12:36:26', '16:36:26', NULL, '', '2024-05-31 16:36:26');

--
-- Triggers `bookings`
--
DELIMITER $$
CREATE TRIGGER `delete_booking_log` AFTER DELETE ON `bookings` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (NULL, 'Booking deleted', CONCAT('Booking with ID ', OLD.bookingid, ' deleted.'), 'booking', OLD.bookingid, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_booking_log` AFTER INSERT ON `bookings` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (NULL, 'Booking added', CONCAT('Booking with ID ', NEW.bookingid, ' added.'), 'booking', NEW.bookingid, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_booking_log` AFTER UPDATE ON `bookings` FOR EACH ROW BEGIN
    DECLARE action_description VARCHAR(255);
    
    IF OLD.status != NEW.status THEN
        SET action_description = CONCAT('Booking with ID ', NEW.bookingid, ' status changed from ', OLD.status, ' to ', NEW.status, '.');
        INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
        VALUES (NULL, 'Booking updated', action_description, 'booking', NEW.bookingid, CURDATE(), CURTIME());
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `event_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `events`
--
DELIMITER $$
CREATE TRIGGER `delete_event_log` AFTER DELETE ON `events` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (NULL, 'Event deleted', CONCAT('Event "', OLD.event_title, '" with ID ', OLD.event_id, ' deleted.'), 'events', OLD.event_id, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_event_log` AFTER INSERT ON `events` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (NULL, 'Event added', CONCAT('Event "', NEW.event_title, '" added.'), 'events', NEW.event_id, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_event_log` AFTER UPDATE ON `events` FOR EACH ROW BEGIN
    DECLARE action_description VARCHAR(255);
    
    IF OLD.event_title != NEW.event_title THEN
        SET action_description = CONCAT('Event "', OLD.event_title, '" title updated to "', NEW.event_title, '".');
        INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
        VALUES (NULL, 'Event updated', action_description, 'events', NEW.event_id, CURDATE(), CURTIME());
    END IF;
    
    IF OLD.start_time != NEW.start_time OR OLD.end_time != NEW.end_time THEN
        SET action_description = CONCAT('Event "', NEW.event_title, '" time updated from ', OLD.start_time, ' - ', OLD.end_time, ' to ', NEW.start_time, ' - ', NEW.end_time, '.');
        INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
        VALUES (NULL, 'Event updated', action_description, 'events', NEW.event_id, CURDATE(), CURTIME());
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `inquiryid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `event_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `num_attendees` int(11) NOT NULL,
  `request` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `inquiries`
--
DELIMITER $$
CREATE TRIGGER `delete_inquiry_log` AFTER DELETE ON `inquiries` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (NULL, 'Inquiry deleted', CONCAT('Inquiry with ID ', OLD.inquiryid, ' deleted.'), 'inquiries', OLD.inquiryid, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_inquiry_log` AFTER INSERT ON `inquiries` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (NULL, 'Inquiry added', CONCAT('Inquiry with ID ', NEW.inquiryid, ' added.'), 'inquiries', NEW.inquiryid, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_inquiry_log` AFTER UPDATE ON `inquiries` FOR EACH ROW BEGIN
    DECLARE action_description VARCHAR(255);
    
    IF OLD.status != NEW.status THEN
        SET action_description = CONCAT('Inquiry with ID ', NEW.inquiryid, ' status changed from "', OLD.status, '" to "', NEW.status, '".');
        INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
        VALUES (NULL, 'Inquiry updated', action_description, 'inquiries', NEW.inquiryid, CURDATE(), CURTIME());
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `adminid` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `table_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`adminid`, `action`, `description`, `table_name`, `table_id`, `date`, `time`) VALUES
(1, 'Booking added', 'Booking with ID 1 added.', 'booking', 1, '2024-05-09', '09:49:31'),
(2, 'New admin added', 'Admin Marianne added.', 'admin', 0, '2024-05-09', '09:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `paymentid` int(11) NOT NULL,
  `bookingid` int(11) NOT NULL,
  `package_price` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_status` varchar(50) DEFAULT 'Completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `transactions`
--
DELIMITER $$
CREATE TRIGGER `delete_transaction_log` AFTER DELETE ON `transactions` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (NULL, 'Transaction deleted', CONCAT('Transaction with ID ', OLD.paymentid, ' deleted.'), 'transactions', OLD.paymentid, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_transaction_log` AFTER INSERT ON `transactions` FOR EACH ROW BEGIN
    INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
    VALUES (NULL, 'Transaction added', CONCAT('Transaction with ID ', NEW.paymentid, ' added.'), 'transactions', NEW.paymentid, CURDATE(), CURTIME());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_transaction_log` AFTER UPDATE ON `transactions` FOR EACH ROW BEGIN
    DECLARE action_description VARCHAR(255);
    
    IF OLD.payment_status != NEW.payment_status THEN
        SET action_description = CONCAT('Transaction with ID ', NEW.paymentid, ' payment status changed from "', OLD.payment_status, '" to "', NEW.payment_status, '".');
        INSERT INTO logs (adminid, action, description, table_name, table_id, date, time)
        VALUES (NULL, 'Transaction updated', action_description, 'transactions', NEW.paymentid, CURDATE(), CURTIME());
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`),
  ADD UNIQUE KEY `reference_number` (`reference_number`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`inquiryid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`paymentid`),
  ADD KEY `payments_ibfk_1` (`bookingid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `inquiryid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
