-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:4306
-- Thời gian đã tạo: Th9 25, 2023 lúc 05:41 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nguoi_dung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `role` enum('manager','admin','customer') NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phone_number`, `role`, `gender`, `date_of_birth`, `password`) VALUES
(0, 'dung', 'dung', 'dung23', 'dung@gmail.com', '058269846', 'admin', '', '2003-03-23', 'dung'),
(1, 'Reena', 'Warmington', 'rwarmington0', 'rwarmington0@yandex.ru', '273-907-6875', 'manager', 'male', '2023-05-07', 'cG4/YT.t)p'),
(2, 'Forrester', 'Trowsdale', 'ftrowsdale1', 'ftrowsdale1@elegantthemes.com', '605-730-3116', 'customer', 'female', '2023-02-09', 'dL1!!iQ2'),
(4, 'Petronilla', 'Carthy', 'pcarthy3', 'pcarthy3@archive.org', '821-343-7714', 'manager', 'female', '2022-12-26', 'oF4/x9Bb0$Y{q5*'),
(5, 'Jennie', 'Keen', 'jkeen4', 'jkeen4@jimdo.com', '514-701-7267', 'admin', 'female', '2023-08-13', 'eO8$GU8dCNkRam8'),
(6, 'Sophey', 'Gammett', 'sgammett5', 'sgammett5@businesswire.com', '702-429-1312', 'admin', 'female', '2023-03-18', 'eZ9)92i2@Lktpl'),
(7, 'Marline', 'Thorius', 'mthorius6', 'mthorius6@merriam-webster.com', '108-169-3088', 'admin', 'male', '2023-08-27', 'gI8`OkiUx~1t+Z>'),
(8, 'Hyacinthie', 'Foldes', 'hfoldes7', 'hfoldes7@ameblo.jp', '897-450-6500', 'customer', 'female', '2023-01-12', 'uX5\",<q~WPx~%7P'),
(9, 'Dilan', 'Higgen', 'dhiggen8', 'dhiggen8@nps.gov', '913-123-7635', 'manager', 'male', '2022-11-20', 'vG8&3\'K?NAP5e\'mX');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
