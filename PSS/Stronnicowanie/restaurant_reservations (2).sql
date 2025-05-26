-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2025 at 08:21 AM
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
-- Database: `restaurant_reservations`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservations`
--

CREATE TABLE `reservations` (
  `idReservation` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `reservationDate` date NOT NULL,
  `reservationTime` time NOT NULL,
  `numberOfPeople` int(11) NOT NULL,
  `idStatus` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateModified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` int(11) DEFAULT NULL,
  `modifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`idReservation`, `idUser`, `reservationDate`, `reservationTime`, `numberOfPeople`, `idStatus`, `dateCreated`, `dateModified`, `createdBy`, `modifiedBy`) VALUES
(9, 6, '2025-01-14', '18:00:00', 4, 3, '2025-01-11 16:48:25', '2025-01-18 11:05:06', 6, 6),
(10, 6, '2025-01-14', '18:00:00', 4, 2, '2025-01-11 17:17:59', '2025-01-11 17:18:32', 6, 6),
(11, 6, '2025-01-14', '18:00:00', 4, 2, '2025-01-11 17:18:57', '2025-01-11 17:19:24', 6, 6),
(12, 6, '2025-01-14', '18:00:00', 4, 3, '2025-01-11 17:19:06', '2025-01-15 20:07:42', 6, 6),
(13, 10, '2025-01-14', '18:00:00', 4, 3, '2025-01-11 17:41:39', '2025-01-15 20:07:38', 10, 10),
(14, 11, '2025-01-16', '12:00:00', 2, 2, '2025-01-15 19:16:16', '2025-01-15 19:16:47', 11, 11),
(15, 6, '2025-01-16', '12:00:00', 4, 2, '2025-01-15 20:12:06', '2025-01-15 20:12:30', 6, 6),
(16, 6, '2025-01-16', '12:00:00', 4, 2, '2025-01-15 20:12:49', '2025-01-15 20:47:26', 6, 6),
(17, 6, '2025-01-16', '18:00:00', 8, 2, '2025-01-15 20:47:03', '2025-01-15 20:47:42', 6, 6),
(18, 6, '2025-01-15', '12:00:00', 2, 1, '2025-01-18 08:46:11', '2025-01-18 08:46:11', 6, 6),
(19, 6, '2025-01-23', '14:00:00', 2, 1, '2025-01-18 08:50:23', '2025-01-18 08:50:23', 6, 6),
(20, 15, '2025-01-21', '15:00:00', 2, 1, '2025-01-18 11:00:40', '2025-01-18 11:00:40', 15, 15),
(21, 15, '2025-01-22', '13:00:00', 4, 2, '2025-01-18 11:00:55', '2025-01-18 11:01:46', 15, 15);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation_notes`
--

CREATE TABLE `reservation_notes` (
  `idNote` int(11) NOT NULL,
  `idReservation` int(11) NOT NULL,
  `noteText` text NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateModified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` int(11) DEFAULT NULL,
  `modifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_notes`
--

INSERT INTO `reservation_notes` (`idNote`, `idReservation`, `noteText`, `dateCreated`, `dateModified`, `createdBy`, `modifiedBy`) VALUES
(4, 9, 'chleb', '2025-01-11 16:48:25', '2025-01-11 16:48:25', 6, 6),
(5, 9, 'ffsad', '2025-01-11 17:01:50', '2025-01-11 17:01:50', NULL, NULL),
(6, 13, 'Mam alergie na chleb. ', '2025-01-11 17:41:39', '2025-01-11 17:41:39', 10, 10),
(7, 13, 'przy oknie', '2025-01-11 17:42:04', '2025-01-11 17:42:04', 3, 3),
(8, 16, 'przy oknie', '2025-01-15 20:47:26', '2025-01-15 20:47:26', 3, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation_statuses`
--

CREATE TABLE `reservation_statuses` (
  `idStatus` int(11) NOT NULL,
  `statusName` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateModified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` int(11) DEFAULT NULL,
  `modifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_statuses`
--

INSERT INTO `reservation_statuses` (`idStatus`, `statusName`, `isActive`, `dateCreated`, `dateModified`, `createdBy`, `modifiedBy`) VALUES
(1, 'Oczekująca', 1, '2025-01-11 16:48:23', '2025-01-11 16:48:23', 4, 4),
(2, 'Potwierdzona', 1, '2025-01-11 16:48:23', '2025-01-11 16:48:23', 4, 4),
(3, 'Anulowana', 1, '2025-01-11 16:48:23', '2025-01-11 16:48:23', 4, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation_tables`
--

CREATE TABLE `reservation_tables` (
  `idResTable` int(11) NOT NULL,
  `idReservation` int(11) NOT NULL,
  `idTable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_tables`
--

INSERT INTO `reservation_tables` (`idResTable`, `idReservation`, `idTable`) VALUES
(4, 9, 10),
(5, 10, 13),
(6, 12, 13),
(7, 11, 13),
(8, 13, 11),
(9, 14, 4),
(10, 15, 13),
(11, 16, 10),
(12, 17, 16),
(13, 21, 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL,
  `roleName` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateModified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` int(11) DEFAULT NULL,
  `modifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRole`, `roleName`, `isActive`, `dateCreated`, `dateModified`, `createdBy`, `modifiedBy`) VALUES
(1, 'Guest', 1, '2025-01-11 09:53:19', '2025-01-11 09:53:19', 4, 4),
(2, 'user', 1, '2025-01-11 09:53:19', '2025-01-11 12:37:45', 4, 4),
(3, 'employee', 1, '2025-01-11 09:53:19', '2025-01-11 12:37:20', 4, 4),
(4, 'admin', 1, '2025-01-11 09:53:19', '2025-01-11 12:18:51', 4, 4),
(8, 'manager', 1, '2025-01-15 20:16:37', '2025-01-15 20:16:43', NULL, NULL),
(9, 'wozny', 1, '2025-01-18 11:06:46', '2025-01-18 11:06:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tables`
--

CREATE TABLE `tables` (
  `idTable` int(11) NOT NULL,
  `tableName` varchar(100) NOT NULL,
  `maxCapacity` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateModified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` int(11) DEFAULT NULL,
  `modifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`idTable`, `tableName`, `maxCapacity`, `isActive`, `dateCreated`, `dateModified`, `createdBy`, `modifiedBy`) VALUES
(4, 'Stolik 2-osobowy 1', 2, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(5, 'Stolik 2-osobowy 2', 2, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(6, 'Stolik 2-osobowy 3', 2, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(7, 'Stolik 2-osobowy 4', 2, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(8, 'Stolik 2-osobowy 5', 2, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(9, 'Stolik 2-osobowy 6', 2, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(10, 'Stolik 4-osobowy 1', 4, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(11, 'Stolik 4-osobowy 2', 4, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(12, 'Stolik 4-osobowy 3', 4, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(13, 'Stolik 4-osobowy 4', 4, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(14, 'Stolik 6-osobowy 1', 6, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(15, 'Stolik 6-osobowy 2', 6, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(16, 'Stolik 8-osobowy 1', 8, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4),
(17, 'Stolik 8-osobowy 2', 8, 1, '2025-01-11 16:51:25', '2025-01-11 16:51:25', 4, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `dateModified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` int(11) DEFAULT NULL,
  `modifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `login`, `password`, `firstName`, `lastName`, `email`, `phoneNumber`, `address`, `dateCreated`, `dateModified`, `createdBy`, `modifiedBy`) VALUES
(1, 'guestuser', '$2y$10$5CQUysbc.CU/oYDv45aZEeqqAH7gXhvNdf7hfuDnEOeDP6FH5lEYO', 'Guest', 'User', 'guest@example.com', '000000000', 'Guest Street', '2025-01-11 09:53:06', '2025-01-11 12:54:01', NULL, 4),
(2, 'regularuser', '$2y$10$jv1hoWpqQayXgfdy6fhhcecA3s3fD8AkwodlQGS.LzGxidkvz/7Aq', 'Jan', 'Kowalski', 'jan.kowalski@example.com', '+48123456789', 'Kowalskiego 1', '2025-01-11 09:53:06', '2025-01-11 12:27:56', NULL, NULL),
(3, 'employeeuser', '$2y$10$eEPBVDetlZsSFDE.2Q56G.LvFO0ioyBgAMKMjx3IB8vj26xnt7.i2', 'Adam', 'Nowak', 'adam.nowak@example.com', '+48111222333', 'Nowaka 2', '2025-01-11 09:53:06', '2025-01-11 12:27:14', NULL, NULL),
(4, 'adminuser', '$2y$10$IuIqs2j0DpnQX3Gzqf0Rvei8AMZF/rws70I88jtKgIWT2vn.p97bS', 'Admin', 'Istrator', 'admin@example.com', '+48987654321', 'Admin Street', '2025-01-11 09:53:06', '2025-01-11 12:25:41', NULL, NULL),
(5, 'admin', '$2y$10$LAfsPITe1P2TYl/MWlxn6uubRNmGlh1aTwcugmwpCJ0FsSxyBEb5S', 'admin', 'admin', 'admin@admin', '444444444', 'adminowa 12', '2025-01-11 11:59:08', '2025-01-11 11:59:08', NULL, NULL),
(6, 'user', '$2y$10$el3tdy4/XxBc8XcR4ok3bei6cZnVmr0H.p5TxIaSYwadxc0DRF8zm', 'user', 'user', 'user@user', '123456789', 'userowa 43', '2025-01-11 12:38:39', '2025-01-15 20:11:42', 5, 4),
(7, 'uzyt', '$2y$10$GxdwDY9amKtkIP2rBfiWVucMVzfrdAsGdR9rkjESpbgmIo8caHU3S', 'uzyt', 'uzyt', 'uzyt@uzyt', '+48 660 875 172', '44', '2025-01-11 13:07:17', '2025-01-11 13:07:17', NULL, NULL),
(9, 'chlop', '$2y$10$PKtCstnsbTHSqou2e/A/IeKC/FMwl6AW/s0mIrAct.hkxKc9KzKI6', 'chlop', 'chlop', 'haslo@haslo', '54315314', 'chlopa 32', '2025-01-11 15:31:21', '2025-01-11 15:31:21', NULL, NULL),
(10, 'pass', '$2y$10$1BisekCavRGwZdPZAvPabu7GiZwHB844rEEovn95bpw6ge64N7DZK', 'pass', 'pass', 'pass@pass', '55555555', 'user', '2025-01-11 17:41:13', '2025-01-11 17:41:13', NULL, NULL),
(11, 'jacek', '$2y$10$Bpr6Jr69myM0H904KBTbd.zvh/mf9RT3XEwuBpReY.alhK8IPCzk2', 'jacek', 'jacek', 'jacek@jacek', '654311', 'jacek', '2025-01-15 18:48:14', '2025-01-15 18:48:14', NULL, NULL),
(13, 'dom', '$2y$10$4lg5luQabInnwuJ/ZMsrOOviaxJfBtIOs2WWOrWETTuifZoeWaxUG', 'dom', 'dom', 'dom@ada', '4123', 'dom', '2025-01-15 20:25:17', '2025-01-15 20:25:17', 5, 5),
(14, 'pracownik', '$2y$10$xbwZhdUym2sotA9VO4p9pedcJSVopNJUugalUQyvPdIZ9PK.wdg.S', 'pracownik', 'pracownik', 'pracownik@mail', '41234213', 'pracownik', '2025-01-18 10:42:54', '2025-01-18 10:42:54', NULL, NULL),
(15, 'ewa', '$2y$10$EGLcwx92.jr4sy8aQ81CcO/rHMVvmWKLdz5lzVwTrO0Mq/iq/m1Iy', 'user', 'user', 'user@user', '42134213', 'user', '2025-01-18 10:59:10', '2025-01-18 10:59:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_roles`
--

CREATE TABLE `user_roles` (
  `idUser` int(11) NOT NULL,
  `idRole` int(11) NOT NULL,
  `dateAssigned` datetime NOT NULL DEFAULT current_timestamp(),
  `dateRevoked` datetime DEFAULT NULL,
  `assignedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`idUser`, `idRole`, `dateAssigned`, `dateRevoked`, `assignedBy`) VALUES
(1, 1, '2025-01-11 09:53:30', NULL, 5),
(2, 2, '2025-01-11 09:53:30', NULL, 4),
(3, 3, '2025-01-11 09:53:30', NULL, 5),
(4, 3, '2025-01-11 09:53:30', NULL, 5),
(5, 4, '2025-01-11 11:59:08', NULL, NULL),
(6, 2, '2025-01-11 12:38:39', NULL, 5),
(7, 4, '2025-01-11 13:07:17', NULL, 5),
(9, 2, '2025-01-11 15:31:21', NULL, NULL),
(10, 2, '2025-01-11 17:41:13', NULL, NULL),
(11, 3, '2025-01-15 18:48:14', NULL, 5),
(13, 1, '2025-01-15 20:25:17', NULL, 5),
(14, 2, '2025-01-18 10:42:54', NULL, NULL),
(15, 2, '2025-01-18 10:59:10', NULL, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `fk_reservations_user` (`idUser`),
  ADD KEY `fk_reservations_status` (`idStatus`),
  ADD KEY `fk_reservations_createdBy` (`createdBy`),
  ADD KEY `fk_reservations_modifiedBy` (`modifiedBy`);

--
-- Indeksy dla tabeli `reservation_notes`
--
ALTER TABLE `reservation_notes`
  ADD PRIMARY KEY (`idNote`),
  ADD KEY `fk_res_notes_reservation` (`idReservation`),
  ADD KEY `fk_res_notes_createdBy` (`createdBy`),
  ADD KEY `fk_res_notes_modifiedBy` (`modifiedBy`);

--
-- Indeksy dla tabeli `reservation_statuses`
--
ALTER TABLE `reservation_statuses`
  ADD PRIMARY KEY (`idStatus`),
  ADD KEY `fk_res_statuses_createdBy` (`createdBy`),
  ADD KEY `fk_res_statuses_modifiedBy` (`modifiedBy`);

--
-- Indeksy dla tabeli `reservation_tables`
--
ALTER TABLE `reservation_tables`
  ADD PRIMARY KEY (`idResTable`),
  ADD KEY `fk_res_tables_reservation` (`idReservation`),
  ADD KEY `fk_res_tables_table` (`idTable`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`),
  ADD KEY `fk_roles_createdBy` (`createdBy`),
  ADD KEY `fk_roles_modifiedBy` (`modifiedBy`);

--
-- Indeksy dla tabeli `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`idTable`),
  ADD KEY `fk_tables_createdBy` (`createdBy`),
  ADD KEY `fk_tables_modifiedBy` (`modifiedBy`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `fk_users_createdBy` (`createdBy`),
  ADD KEY `fk_users_modifiedBy` (`modifiedBy`);

--
-- Indeksy dla tabeli `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`idUser`,`idRole`),
  ADD KEY `fk_user_roles_role` (`idRole`),
  ADD KEY `fk_user_roles_assignedBy` (`assignedBy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `idReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reservation_notes`
--
ALTER TABLE `reservation_notes`
  MODIFY `idNote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservation_statuses`
--
ALTER TABLE `reservation_statuses`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation_tables`
--
ALTER TABLE `reservation_tables`
  MODIFY `idResTable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `idTable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_reservations_createdBy` FOREIGN KEY (`createdBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_modifiedBy` FOREIGN KEY (`modifiedBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_status` FOREIGN KEY (`idStatus`) REFERENCES `reservation_statuses` (`idStatus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservations_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation_notes`
--
ALTER TABLE `reservation_notes`
  ADD CONSTRAINT `fk_res_notes_createdBy` FOREIGN KEY (`createdBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_res_notes_modifiedBy` FOREIGN KEY (`modifiedBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_res_notes_reservation` FOREIGN KEY (`idReservation`) REFERENCES `reservations` (`idReservation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation_statuses`
--
ALTER TABLE `reservation_statuses`
  ADD CONSTRAINT `fk_res_statuses_createdBy` FOREIGN KEY (`createdBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_res_statuses_modifiedBy` FOREIGN KEY (`modifiedBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `reservation_tables`
--
ALTER TABLE `reservation_tables`
  ADD CONSTRAINT `fk_res_tables_reservation` FOREIGN KEY (`idReservation`) REFERENCES `reservations` (`idReservation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_res_tables_table` FOREIGN KEY (`idTable`) REFERENCES `tables` (`idTable`) ON UPDATE CASCADE;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `fk_roles_createdBy` FOREIGN KEY (`createdBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_roles_modifiedBy` FOREIGN KEY (`modifiedBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `fk_tables_createdBy` FOREIGN KEY (`createdBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tables_modifiedBy` FOREIGN KEY (`modifiedBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_createdBy` FOREIGN KEY (`createdBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_modifiedBy` FOREIGN KEY (`modifiedBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `fk_user_roles_assignedBy` FOREIGN KEY (`assignedBy`) REFERENCES `users` (`idUser`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_roles_role` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_roles_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
