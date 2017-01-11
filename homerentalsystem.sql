-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-01-11 10:46:50
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homerentalsystem`
--

-- --------------------------------------------------------

--
-- 表的结构 `apartment`
--

CREATE TABLE `apartment` (
  `id` int(20) NOT NULL,
  `area` varchar(30) NOT NULL,
  `category` varchar(60) NOT NULL,
  `price` int(50) NOT NULL,
  `size` int(50) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `apartment`
--

INSERT INTO `apartment` (`id`, `area`, `category`, `price`, `size`, `state`) VALUES
(201400001, 'Lyckeby', 'Villa', 3000, 29, '<input type="checkbox">'),
(201400002, 'Lyckeby', 'Villa', 4200, 31, '<input type="checkbox">'),
(201400003, 'Lyckeby', 'Row House', 4200, 30, '<input type="checkbox">'),
(201400004, 'Lyckeby', 'Row House', 3700, 24, '<input type="checkbox">'),
(201400005, 'Hasslö', 'Row House', 3900, 29, '<input type="checkbox">'),
(201400006, 'Hasslö', 'Independent House', 4100, 27, '<input type="checkbox">'),
(201400007, 'Hasslö', 'Independent House', 3900, 23, '<input type="checkbox">'),
(201400008, 'Nättraby', 'Independent House', 3600, 23, '<input type="checkbox">'),
(201400009, 'Nättraby', 'Independent House', 4200, 23, '<input type="checkbox">'),
(201400010, 'Pantarholmen', 'Independent House', 5100, 42, '<input type="checkbox">'),
(201400011, 'Pantarholmen', 'Villa', 5200, 35, '<input type="checkbox">'),
(201400012, 'Pantarholmen', 'Row House', 3800, 29, '<input type="checkbox">'),
(201400013, 'Trossö', 'Row House', 4100, 33, '<input type="checkbox">'),
(201400014, 'Trossö', 'Independent House', 5200, 28, '<input type="checkbox">'),
(201400015, 'Trossö', 'Villa', 3800, 23, '<input type="checkbox">'),
(201400016, 'Trossö', 'Row House', 4200, 33, '<input type="checkbox">'),
(201400017, 'Kungsmarken', 'Villa', 2900, 23, '<input type="checkbox">'),
(201400018, 'Kungsmarken', 'Row House', 2300, 17, '<input type="checkbox">'),
(201400019, 'Kungsmarken', 'Independent House', 4100, 24, '<input type="checkbox">'),
(201400020, 'Kungsmarken', 'Independent House', 3800, 25, '<input type="checkbox">'),
(201400021, 'Kungsmarken', 'Villa', 4100, 23, '<input type="checkbox">');

-- --------------------------------------------------------

--
-- 表的结构 `dailyroom`
--

CREATE TABLE `dailyroom` (
  `id` int(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `size` int(50) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `dailyroom`
--

INSERT INTO `dailyroom` (`id`, `area`, `category`, `price`, `size`, `state`) VALUES
(201300001, 'Kungsmarken', 'Apartment', 1700, 21, '<input type="checkbox">'),
(201300002, 'Kungsmarken', 'Apartment', 800, 10, '<input type="checkbox">'),
(201300003, 'Kungsmarken', 'Apartment', 1200, 17, '<input type="checkbox">'),
(201300004, 'Gullbernavagen', 'Villa', 1500, 20, '<input type="checkbox">'),
(201300005, 'Gullbernavagen', 'Villa', 1700, 28, '<input type="checkbox">'),
(201300006, 'Gullbernavagen', 'Villa', 2100, 21, '<input type="checkbox">'),
(201300007, 'Pantarholmen', 'Farm House', 1900, 21, '<input type="checkbox">'),
(201300008, 'Pantarholmen', 'Farm House', 1900, 30, '<input type="checkbox">'),
(201300009, 'Pantarholmen', 'Farm House', 2100, 20, '<input type="checkbox">'),
(201300010, 'Lyckeby', 'Farm House', 1800, 19, '<input type="checkbox">');

-- --------------------------------------------------------

--
-- 表的结构 `meeting`
--

CREATE TABLE `meeting` (
  `id` int(20) NOT NULL,
  `area` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `size` int(50) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `meeting`
--

INSERT INTO `meeting` (`id`, `area`, `category`, `price`, `size`, `state`) VALUES
(201500001, 'Kungsmarken', 'Deluxe Room', 2100, 20, '<input type="checkbox">'),
(201500002, 'Kungsmarken', 'Deluxe Room', 2300, 20, '<input type="checkbox">'),
(201500003, 'Kungsmarken', 'Deluxe Room', 4500, 31, '<input type="checkbox">'),
(201500004, 'Kungsmarken', 'Deluxe Room', 12000, 60, '<input type="checkbox">'),
(201500005, 'Kungsmarken', 'Deluxe Room', 9800, 57, '<input type="checkbox">'),
(201500006, 'Trossö', 'Simple Room', 2100, 10, '<input type="checkbox">'),
(201500007, 'Trossö', 'Simple Room', 1700, 15, '<input type="checkbox">'),
(201500008, 'Trossö', 'Simple Room', 1800, 17, '<input type="checkbox">'),
(201500009, 'Trossö', 'Simple Room', 1600, 16, '<input type="checkbox">'),
(201500010, 'Trossö', 'Simple Room', 2100, 19, '<input type="checkbox">');

-- --------------------------------------------------------

--
-- 表的结构 `parking`
--

CREATE TABLE `parking` (
  `id` int(40) NOT NULL,
  `area` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `size` int(50) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Parking in Karlskrona';

--
-- 转存表中的数据 `parking`
--

INSERT INTO `parking` (`id`, `area`, `category`, `price`, `size`, `state`) VALUES
(201600001, 'Kungsmarken', 'Daily Parking', 325, 10, '<input type="checkbox">'),
(201600002, 'Kungsmarken', 'Daily Parking', 410, 13, '<input type="checkbox">'),
(201600003, 'Kungsmarken', 'Personal Parking', 2500, 10, '<input type="checkbox">'),
(201600004, 'Kungsmarken', 'Personal Parking', 3200, 12, '<input type="checkbox">'),
(201600005, 'Kungsmarken', 'Daily Parking', 850, 8, '<input type="checkbox">'),
(201600006, 'Kungsmarken', 'Daily Parking', 900, 9, '<input type="checkbox">'),
(201600007, 'Lyckeby', 'Daily Parking', 850, 9, '<input type="checkbox">'),
(201600008, 'Lyckeby', 'Daily Parking', 800, 10, '<input type="checkbox">'),
(201600009, 'Lyckeby', 'Personal Parking', 3500, 10, '<input type="checkbox">'),
(201600010, 'Lyckeby', 'Personal Parking', 4200, 12, '<input type="checkbox">'),
(201600011, 'Lyckeby', 'Daily Parking', 920, 12, '<input type="checkbox">'),
(201600012, 'Lyckeby', 'Daily Parking', 870, 11, '<input type="checkbox">'),
(201600013, 'Pantarholmen', 'Personal Parking', 3500, 12, '<input type="checkbox">'),
(201600014, 'Pantarholmen', 'Personal Parking', 3200, 12, '<input type="checkbox">'),
(201600015, 'Pantarholmen', 'Personal Parking', 3500, 10, '<input type="checkbox">'),
(201600016, 'Pantarholmen', 'Personal Parking', 3000, 9, '<input type="checkbox">'),
(201600017, 'Pantarholmen', 'Personal Parking', 2900, 9, '<input type="checkbox">'),
(201600018, 'Pantarholmen', 'Daily Parking', 850, 10, '<input type="checkbox">'),
(201600019, 'Pantarholmen', 'Daily Parking', 900, 9, '<input type="checkbox">'),
(201600020, 'Pantarholmen', 'Daily Parking', 900, 10, '<input type="checkbox">'),
(201600021, 'Pantarholmen', 'Daily Parking', 910, 11, '<input type="checkbox">'),
(201600022, 'Pantarholmen', 'Daily Parking', 850, 9, '<input type="checkbox">'),
(201600023, 'Gullbernavagen', 'Personal Parking', 3100, 10, '<input type="checkbox">'),
(201600024, 'Gullbernavagen', 'Daily Parking', 790, 10, '<input type="checkbox">'),
(201600025, 'Gullbernavagen', 'Daily Parking', 820, 10, '<input type="checkbox">'),
(201600026, 'Gullbernavagen', 'Daily Parking', 880, 11, '<input type="checkbox">'),
(201600027, 'Gullbernavagen', 'Daily Parking', 700, 9, '<input type="checkbox">'),
(201600028, 'Gullbernavagen', 'Daily Parking', 930, 15, '<input type="checkbox">'),
(201600029, 'Gullbernavagen', 'Personal Parking', 3100, 10, '<input type="checkbox">'),
(201600030, 'Gullbernavagen', 'Personal Parking', 3500, 12, '<input type="checkbox">'),
(201600031, 'Gullbernavagen', 'Personal Parking', 4000, 11, '<input type="checkbox">'),
(201600032, 'Gullbernavagen', 'Personal Parking', 3700, 11, '<input type="checkbox">');

-- --------------------------------------------------------

--
-- 表的结构 `student_accommodation`
--

CREATE TABLE `student_accommodation` (
  `id` int(20) NOT NULL,
  `area` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `size` int(20) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `student_accommodation`
--

INSERT INTO `student_accommodation` (`id`, `area`, `category`, `price`, `size`, `state`) VALUES
(201200001, 'Pantarholmen', 'Independent House', 2800, 9, '<input type="checkbox">'),
(201200002, 'Pantarholmen', 'Independent House', 3100, 11, '<input type="checkbox">'),
(201200003, 'Pantarholmen', 'Independent House', 3300, 11, '<input type="checkbox">'),
(201200004, 'Lyckeby', 'Independent House', 2900, 9, '<input type="checkbox">'),
(201200005, 'Lyckeby', 'Independent House', 3400, 12, '<input type="checkbox">'),
(201200006, 'Kungsmarken', 'Independent House', 4100, 21, '<input type="checkbox">'),
(201200007, 'Kungsmarken', 'Independent House', 2700, 9, '<input type="checkbox">'),
(201200008, 'Kungsmarken', 'Independent House', 3100, 9, '<input type="checkbox">'),
(201200009, 'Kungsmarken', 'Independent House', 2900, 8, '<input type="checkbox">'),
(201200010, 'Pantarholmen', 'Independent House', 3100, 10, '<input type="checkbox">');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'wangcheng', '1234567@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(2, 'Songjiaqi', '123@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(3, 'Cheng Wang', 'admin@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(4, 'asdd', 'abs@163.cm', 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailyroom`
--
ALTER TABLE `dailyroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_accommodation`
--
ALTER TABLE `student_accommodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201400022;
--
-- 使用表AUTO_INCREMENT `dailyroom`
--
ALTER TABLE `dailyroom`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201300011;
--
-- 使用表AUTO_INCREMENT `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201500011;
--
-- 使用表AUTO_INCREMENT `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201600033;
--
-- 使用表AUTO_INCREMENT `student_accommodation`
--
ALTER TABLE `student_accommodation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201200011;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
