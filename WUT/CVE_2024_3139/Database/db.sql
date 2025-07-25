-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 10, 2025 at 01:42 PM
-- Server version: 8.4.0
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image_path` text COLLATE utf8mb4_general_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`, `description`, `image_path`, `status`, `delete_flag`, `created_at`, `updated_at`) VALUES
(1, 'Mouse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie ipsum ornare nunc pellentesque, ut iaculis diam facilisis.', 'uploads/category_images/1.png?v=1711442416', 1, 0, '2024-03-26 16:40:16', '2024-03-26 16:40:16'),
(2, 'Projector', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis sed suscipit nulla, ac aliquam metus.', 'uploads/category_images/2.png?v=1711442909', 1, 0, '2024-03-26 16:48:27', '2024-03-26 16:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `damage_list`
--

CREATE TABLE `damage_list` (
  `id` int NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `item_id` int NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=damage,\r\n1= fixed',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `damage_list`
--

INSERT INTO `damage_list` (`id`, `code`, `item_id`, `description`, `status`, `delete_flag`, `created_at`, `updated_at`) VALUES
(1, 'D-0000000002', 6, 'test 123', 0, 0, '2024-03-27 15:47:25', '2024-03-27 15:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `code` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`id`, `category_id`, `code`, `description`, `status`, `delete_flag`, `created_at`, `updated_at`) VALUES
(1, 1, 'M-1001', 'Duis sed suscipit nulla, ac aliquam metus.', 1, 0, '2024-03-27 11:21:36', '2024-03-27 11:47:20'),
(2, 1, 'M-1002', 'nteger hendrerit nibh eu est cursus mollis. In aliquam lobortis ipsum.', 1, 0, '2024-03-27 11:23:38', '2024-03-27 11:47:28'),
(3, 1, 'M-1003', 'N/A', 1, 0, '2024-03-27 11:23:50', '2024-03-27 11:47:36'),
(4, 2, 'P-1001', 'N/A', 1, 0, '2024-03-27 11:24:04', '2024-03-27 11:47:43'),
(5, 2, 'P-1002', 'N/A', 1, 0, '2024-03-27 11:24:16', '2024-03-27 11:47:51'),
(6, 2, 'P-1003', 'N/A', 1, 0, '2024-03-27 11:24:26', '2024-03-27 11:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `record_item_list`
--

CREATE TABLE `record_item_list` (
  `id` bigint NOT NULL,
  `record_id` int NOT NULL,
  `item_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `record_item_list`
--

INSERT INTO `record_item_list` (`id`, `record_id`, `item_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '2024-03-27 14:45:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `record_list`
--

CREATE TABLE `record_list` (
  `id` int NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `type` tinyint NOT NULL COMMENT '1=Borrowed\r\n2=Damaged',
  `availability` tinyint(1) NOT NULL COMMENT '1 = available\r\n0 = unavailable',
  `user_id` int NOT NULL,
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 = not deleted\r\n1 = deleted',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `record_list`
--

INSERT INTO `record_list` (`id`, `code`, `type`, `availability`, `user_id`, `delete_flag`, `created_at`, `updated_at`) VALUES
(1, 'REC-0000000001', 1, 1, 1, 0, '2024-03-27 14:25:02', '2024-03-27 16:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `record_meta`
--

CREATE TABLE `record_meta` (
  `id` bigint NOT NULL,
  `record_id` int NOT NULL,
  `meta_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `record_meta`
--

INSERT INTO `record_meta` (`id`, `record_id`, `meta_name`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, 1, 'borrower', 'Student', '2024-03-27 14:25:03', NULL),
(2, 1, 'borrower_name', 'John Smith', '2024-03-27 14:25:03', NULL),
(3, 1, 'faculty_department', '', '2024-03-27 14:25:03', NULL),
(4, 1, 'student_year_sec', 'BSIS 4A', '2024-03-27 14:25:03', NULL),
(5, 1, 'staff_department', '', '2024-03-27 14:25:03', NULL),
(6, 1, 'borrowed_date', '2024-03-27', '2024-03-27 14:25:03', NULL),
(7, 1, 'remarks', 'test', '2024-03-27 14:25:03', NULL),
(8, 1, 'returned_date', '2024-03-27', '2024-03-27 14:45:24', '2024-03-27 16:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int NOT NULL,
  `meta_field` text COLLATE utf8mb4_general_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Simple Laboratory Management System'),
(6, 'short_name', 'LMS - PHP'),
(11, 'logo', 'uploads/logo.png?v=1711440657'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover.png?v=1711440657'),
(17, 'phone', '456-987-1231'),
(18, 'mobile', '09123456987 / 094563212222 '),
(19, 'email', 'info@musicschool.com'),
(20, 'address', 'Here St, Down There City, Anywhere Here, 2306 -updated');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `middlename` text COLLATE utf8mb4_general_ci,
  `lastname` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `username` text COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='2';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', '', 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/avatars/1.png?v=1649834664', NULL, 1, '2021-01-20 14:02:37', '2022-05-16 14:17:49'),
(6, 'Mike', '', 'Williams', 'mwilliams', '3cc93e9a6741d8b40460457139cf8ced', 'uploads/avatars/6.png?v=1653980749', NULL, 2, '2022-05-31 15:05:49', '2022-05-31 15:05:49'),
(7, 'abc', 'abc', 'abc', 'abc', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 2, '2025-06-10 13:38:38', '2025-06-10 13:38:38'),
(8, 'staff', 'ab', 'fuzz', 'staff', '6ad14ba9986e3615423dfca256d04e3f', NULL, NULL, 2, '2025-06-10 13:39:20', '2025-06-10 13:39:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `damage_list`
--
ALTER TABLE `damage_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_category_id_fk` (`category_id`);

--
-- Indexes for table `record_item_list`
--
ALTER TABLE `record_item_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `record_item_rid_fk` (`record_id`),
  ADD KEY `item_list_id_fk` (`item_id`);

--
-- Indexes for table `record_list`
--
ALTER TABLE `record_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `record_user_id_fk` (`user_id`);

--
-- Indexes for table `record_meta`
--
ALTER TABLE `record_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `record_id_fk` (`record_id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `damage_list`
--
ALTER TABLE `damage_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_list`
--
ALTER TABLE `item_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `record_item_list`
--
ALTER TABLE `record_item_list`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `record_list`
--
ALTER TABLE `record_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `record_meta`
--
ALTER TABLE `record_meta`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_list`
--
ALTER TABLE `item_list`
  ADD CONSTRAINT `item_category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `record_item_list`
--
ALTER TABLE `record_item_list`
  ADD CONSTRAINT `item_list_id_fk` FOREIGN KEY (`item_id`) REFERENCES `item_list` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `record_item_rid_fk` FOREIGN KEY (`record_id`) REFERENCES `record_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `record_list`
--
ALTER TABLE `record_list`
  ADD CONSTRAINT `record_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `record_meta`
--
ALTER TABLE `record_meta`
  ADD CONSTRAINT `record_id_fk` FOREIGN KEY (`record_id`) REFERENCES `record_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
