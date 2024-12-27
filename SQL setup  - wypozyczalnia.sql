-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 07:05 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wypozyczalnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `calendar`
--

CREATE TABLE `calendar` (
  `car_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `body_type` varchar(50) DEFAULT NULL,
  `engine` varchar(50) DEFAULT NULL,
  `transmission` varchar(50) DEFAULT NULL,
  `drivetrain` varchar(50) DEFAULT NULL,
  `fuel_consumption` decimal(4,1) DEFAULT NULL,
  `acceleration_0_to_100` decimal(3,1) DEFAULT NULL,
  `daily_price` decimal(10,0) DEFAULT NULL,
  `vin` varchar(17) NOT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `image_title` varchar(100) DEFAULT NULL,
  `trunk_capacity` int(11) DEFAULT NULL,
  `number_of_doors` int(11) DEFAULT NULL,
  `number_of_seats` int(11) DEFAULT NULL,
  `drivetrain_type` varchar(10) DEFAULT NULL,
  `tank` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `category`, `brand`, `model`, `body_type`, `engine`, `transmission`, `drivetrain`, `fuel_consumption`, `acceleration_0_to_100`, `daily_price`, `vin`, `short_description`, `long_description`, `image_title`, `trunk_capacity`, `number_of_doors`, `number_of_seats`, `drivetrain_type`, `tank`) VALUES
(1, 'city', 'BMW', '1 Series', 'hatchback', '2.0L I4', 'automatic', 'front-wheel', 6.0, 7.5, 350, 'WBA1S5C54J7A12345', 'Compact premium car', 'The BMW 1 Series is a luxury compact car known for its agility and style.', 'Car_1.png', 380, 5, 5, 'front', 'benzyna'),
(2, 'luxury', 'Audi', 'A4', 'sedan', '2.0L I4', 'automatic', 'front-wheel', 7.0, 6.8, 400, 'WAUAFAFL1AN123456', 'Luxury sedan', 'Audi A4 sedan is a premium car with great comfort and advanced technology.', 'Car_2.png', 480, 4, 5, 'front', 'benzyna'),
(3, 'sport', 'BMW', '2 Series', 'coupe', '2.0L I4', 'automatic', 'rear-wheel', 7.2, 6.5, 450, 'WBA2J3C57EV123456', 'Sporty coupe', 'The BMW 2 Series offers sportier handling in a compact design.', 'Car_3.png', 390, 2, 4, 'rear', 'benzyna'),
(4, 'SUV', 'Mini', 'Countryman Cooper', 'SUV', '1.5L I3', 'automatic', 'all-wheel', 8.5, 8.5, 380, 'WMWZB3C56FP123456', 'Stylish compact SUV', 'Mini Countryman is a stylish SUV with surprising practicality.', 'Car_4.png', 450, 5, 5, '4x4', 'benzyna'),
(5, 'luxury', 'Audi', 'A4', 'wagon', '2.0L I4', 'automatic', 'front-wheel', 7.3, 7.0, 410, 'WAUZZZF46JA123456', 'Spacious family car', 'Audi A4 wagon offers additional space without compromising on luxury.', 'Car_5.png', 505, 5, 5, 'front', 'benzyna'),
(6, 'luxury', 'BMW', '3 Series', 'sedan', '2.0L I4', 'automatic', 'rear-wheel', 6.8, 6.1, 460, 'WBA3C1G57FK123456', 'Sporty and luxurious sedan', 'BMW 3 Series is a best-in-class luxury sports sedan.', 'Car_6.png', 480, 4, 5, 'rear', 'benzyna'),
(7, 'city', 'Hyundai', 'i30', 'hatchback', '1.6L I4', 'manual', 'front-wheel', 5.4, 9.1, 220, 'KMHCT51C2DU123456', 'Economical hatchback', 'Hyundai i30 is a perfect balance of affordability and modern features.', 'Car_7.png', 395, 5, 5, 'front', 'benzyna'),
(8, 'city', 'KIA', 'Ceed', 'hatchback', '1.6L I4', 'manual', 'front-wheel', 5.6, 9.3, 230, 'U5YHN811CGL123456', 'Affordable hatchback', 'KIA Ceed offers great value for money in the compact segment.', 'Car_8.png', 395, 5, 5, 'front', 'benzyna'),
(9, 'sport', 'BMW', '4 Series', 'coupe', '3.0L I6', 'automatic', 'rear-wheel', 8.0, 4.8, 500, 'WBA4B3C57GG123456', 'Sporty luxury coupe', 'BMW 4 Series offers a dynamic drive and stylish design.', 'Car_9.png', 440, 2, 4, 'rear', 'benzyna'),
(10, 'luxury', 'BMW', '5 Series', 'sedan', '3.0L I6', 'automatic', 'rear-wheel', 7.5, 5.5, 600, 'WBA5A5C57HG123456', 'Executive sedan', 'BMW 5 Series provides luxury and performance for executive drivers.', 'Car_10.png', 530, 4, 5, 'rear', 'benzyna'),
(11, 'SUV', 'BMW', 'X1', 'SUV', '2.0L I4', 'automatic', 'all-wheel', 7.8, 7.1, 450, 'WBAVL1C54H0Y12345', 'Compact luxury SUV', 'BMW X1 is a versatile compact SUV perfect for urban and off-road adventures.', 'Car_11.png', 505, 5, 5, '4x4', 'benzyna'),
(12, 'city', 'Seat', 'Leon', 'hatchback', '1.5L I4', 'manual', 'front-wheel', 5.7, 8.3, 240, 'VSSZZZ5FZKR123456', 'Sporty compact car', 'Seat Leon offers sportiness and practicality for everyday driving.', 'Car_12.png', 380, 5, 5, 'front', 'benzyna'),
(13, 'city', 'Hyundai', 'i30', 'hatchback', '1.6L I4', 'manual', 'front-wheel', 5.4, 9.1, 220, 'KMHCT51C2DU987654', 'Economical hatchback', 'Hyundai i30 is a perfect balance of affordability and modern features.', 'Car_13.png', 395, 5, 5, 'front', 'benzyna'),
(14, 'SUV', 'BMW', 'X2', 'SUV', '2.0L I4', 'automatic', 'all-wheel', 7.9, 6.9, 470, 'WBAXB5C56GK123456', 'Sporty compact SUV', 'BMW X2 blends sportiness and versatility in an SUV format.', 'Car_14.png', 470, 5, 5, '4x4', 'benzyna'),
(15, 'van', 'Ford', 'Transit Custom', 'van', '2.0L I4', 'manual', 'front-wheel', 8.5, 11.0, 700, 'WF0XXXTTGXHE12345', '9-seater van', 'Ford Transit Custom is perfect for group transport with seating for 9 people.', 'Car_15.png', 1350, 4, 9, 'front', 'diesel'),
(16, 'van', 'Mercedes', 'Vito', 'van', '2.1L I4', 'automatic', 'rear-wheel', 8.0, 10.8, 750, 'WDF44770313234567', 'Spacious 9-seater van', 'Mercedes Vito offers comfort and space for 9 passengers.', 'Car_16.png', 1200, 4, 9, 'rear', 'diesel'),
(17, 'van', 'Renault', 'Trafic', 'van', '2.0L I4', 'manual', 'front-wheel', 8.7, 11.2, 720, 'VF1FL000XHY123456', '9-seater van', 'Renault Trafic is ideal for large groups or business transport.', 'Car_17.png', 1250, 4, 9, 'front', 'diesel'),
(18, 'van', 'Fiat', 'Ducato', 'van', '2.3L I4', 'manual', 'front-wheel', 9.2, 11.5, 750, 'ZFA2500000G123456', 'Crew cab van', 'Fiat Ducato offers a versatile van with a crew cab configuration.', 'Car_18.png', 1400, 4, 6, 'front', 'diesel'),
(19, 'van', 'Iveco', 'Daily', 'van', '3.0L I4', 'manual', 'rear-wheel', 10.5, 12.0, 850, 'ZCFC135B0P6001234', 'Large cargo van', 'Iveco Daily offers a spacious cargo area for large deliveries.', 'Car_19.png', 16000, 2, 3, 'rear', 'diesel'),
(20, 'van', 'Mercedes', 'Sprinter', 'van', '3.0L I4', 'manual', 'rear-wheel', 10.0, 11.8, 820, 'WD3PF1CD3GP123456', 'Cargo van', 'Mercedes Sprinter is a reliable choice for transporting goods with ample space.', 'Car_20.png', 15000, 2, 3, 'rear', 'diesel'),
(21, 'truck', 'Fiat', 'Ducato', 'truck', '2.3L I4', 'manual', 'rear-wheel', 9.5, 11.7, 880, 'ZFA2500000G987654', 'Flatbed truck', 'Fiat Ducato with a flatbed for transporting up to 10 Europallets.', 'Car_21.png', 18000, 2, 3, 'rear', 'diesel'),
(22, 'electric', 'BMW', 'iX1', 'SUV', 'electric', 'automatic', 'all-wheel', 0.0, 5.7, 550, 'WBY11C33XVH123456', 'Electric SUV', 'BMW iX1 offers the latest electric technology in a compact SUV.', 'Car_22.png', 490, 5, 5, '4x4', 'elektryk'),
(23, 'electric', 'BMW', 'i4', 'sedan', 'electric', 'automatic', 'rear-wheel', 0.0, 5.6, 620, 'WBY12C33XVH123456', 'Electric luxury sedan', 'BMW i4 combines luxury with an electric powertrain.', 'Car_23.png', 470, 4, 5, 'rear', 'elektryk'),
(24, 'electric', 'BMW', 'iX2', 'SUV', 'electric', 'automatic', 'all-wheel', 0.0, 6.0, 570, 'WBY21C33XVH123456', 'Electric SUV', 'BMW iX2 is a next-generation electric SUV for all-road capability.', 'Car_24.png', 495, 5, 5, '4x4', 'elektryk');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `document_number` varchar(50) DEFAULT NULL,
  `driver_license_number` varchar(50) DEFAULT NULL,
  `e_mail` text NOT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `first_name`, `last_name`, `username`, `passwd`, `phone`, `city`, `street`, `document_number`, `driver_license_number`, `e_mail`, `country`) VALUES
(1, 'Jan', 'Kowalski', 'janek123', '$2y$10$tXDDnMvOgw0gHx6jETRoM.Tp6gz82YAErL/hndwGyIUXtPOGHwSlC', '+48 123 456 789', 'Warszawa', 'Marszałkowska 10', 'ABC123456', 'PL123456789', '', NULL),
(2, 'Anna', 'Nowak', 'ania_nowak', '$2y$10$QjJ3I8WvAcSwhfMgrQ9fDOR/X9R5xqJWLCkXSuHws.E/Indeq2Vna', '+48 987 654 321', 'Kraków', 'Floriańska 15', 'XYZ987654', 'PL987654321', '', NULL),
(3, 'Piotr', 'Wiśniewski', 'piotrek_85', '$2y$10$rz43r.IOBhg5q9U3yTSKQeHG7BDxAGwSj1jUmPVmSJ3CjJYFFwraq', '+48 600 555 222', 'Gdańsk', 'Długa 7', 'LMN543210', 'PL543210987', '', NULL),
(4, 'Katarzyna', 'Wójcik', 'kasia_w89', '$2y$10$s4LMrmAuiWCUMPbd5ncEqevhSSgVsvvRW0UA7EwIORPECZVGirThC', '+48 789 111 333', 'Poznań', 'Święty Marcin 8', 'QWE678901', 'PL678901234', '', NULL),
(5, 'Tomasz', 'Kwiatkowski', 'tomkowy', '$2y$10$25jlgX92vpe2Nl.yVEPSGOVxQJW7W8CSmwY.vu.b/SAPk6Zv2Isly', '+48 501 234 567', 'Łódź', 'Piotrkowska 22', 'ASD765432', 'PL234567890', '', NULL),
(6, 'Ewa', 'Zielińska', 'ewa_zielona', '$2y$10$mND3fRMC76YIO38Zpod9BOvggxY.SlHQCQiMk8HLbKHdH0oN6H0pa', '+48 505 987 654', 'Wrocław', 'Kazimierza Wielkiego 9', 'FGH876543', 'PL098765432', '', NULL),
(7, 'Marek', 'Szymański', 'mareksz', '$2y$10$JcGvcayAKQIArtD6reWh5OqjFNJM7JxbmhqXuEpmv3WYdM5WlNpS6', '+48 700 444 888', 'Szczecin', 'Jagiellońska 4', 'JKL234567', 'PL345678901', '', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `discounts`
--

CREATE TABLE `discounts` (
  `discount_id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `discount_percentage` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `insurance`
--

CREATE TABLE `insurance` (
  `car_id` int(11) NOT NULL,
  `insurance_company` varchar(100) NOT NULL,
  `policy_number` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rentals`
--

CREATE TABLE `rentals` (
  `rental_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `daily_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `number_of_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tank`
--

CREATE TABLE `tank` (
  `car_id` int(11) NOT NULL,
  `fuel_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `tank`
--

INSERT INTO `tank` (`car_id`, `fuel_type`) VALUES
(1, 'benzyna'),
(2, 'benzyna'),
(3, 'benzyna'),
(4, 'benzyna'),
(5, 'benzyna'),
(6, 'benzyna'),
(7, 'benzyna'),
(8, 'benzyna'),
(9, 'benzyna'),
(10, 'benzyna'),
(11, 'benzyna'),
(12, 'benzyna'),
(13, 'benzyna'),
(14, 'benzyna'),
(15, 'diesel'),
(16, 'diesel'),
(17, 'diesel'),
(18, 'diesel'),
(19, 'diesel'),
(20, 'diesel'),
(21, 'diesel'),
(22, 'elektryk'),
(23, 'elektryk'),
(24, 'elektryk');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `calendar`
--
ALTER TABLE `calendar`
  ADD KEY `car_id` (`car_id`);

--
-- Indeksy dla tabeli `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `vin` (`vin`);

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeksy dla tabeli `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`discount_id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `client_id` (`client_id`);

--
-- Indeksy dla tabeli `insurance`
--
ALTER TABLE `insurance`
  ADD UNIQUE KEY `policy_number` (`policy_number`),
  ADD KEY `car_id` (`car_id`);

--
-- Indeksy dla tabeli `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`rental_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indeksy dla tabeli `tank`
--
ALTER TABLE `tank`
  ADD PRIMARY KEY (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `rental_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `insurance_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`),
  ADD CONSTRAINT `rentals_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
