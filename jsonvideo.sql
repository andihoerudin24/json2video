-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2023 at 04:53 PM
-- Server version: 8.0.32-0ubuntu0.20.04.2
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `queue_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `jsonvideo`
--

CREATE TABLE `jsonvideo` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `projectid` text,
  `url` text,
  `custom_data` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jsonvideo`
--

INSERT INTO `jsonvideo` (`id`, `id_user`, `projectid`, `url`, `custom_data`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"downloading assets\", \"project\": \"VTTU8fuBiD7ioRue\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:07:44.969Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 37, \"movies\": 20}}', NULL, NULL),
(2, 2, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"downloading assets\", \"project\": \"8FQvMkWx6N6SFXtA\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:07:48.788Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 37, \"movies\": 20}}', NULL, NULL),
(3, 3, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"downloading assets\", \"project\": \"cFvEXRQdcYL7kwXc\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:07:51.829Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 37, \"movies\": 20}}', NULL, NULL),
(4, 4, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"downloading assets\", \"project\": \"EOfbvs0JLbD9TDbw\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:07:55.048Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 37, \"movies\": 20}}', NULL, NULL),
(5, 5, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"downloading assets\", \"project\": \"CG5fF4pZ7fZvjmwk\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:07:58.450Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 37, \"movies\": 20}}', NULL, NULL),
(6, 6, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"rendering scenes\", \"project\": \"sJc0BDxCSXvD8qDe\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:08:01.329Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 37, \"movies\": 20}}', NULL, NULL),
(7, 7, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"rendering scenes\", \"project\": \"FgdPcPRWdOKyecF9\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:08:04.250Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 37, \"movies\": 20}}', NULL, NULL),
(8, 8, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"rendering scenes\", \"project\": \"Dp4AQyRer0QgtKA8\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:08:07.129Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 35, \"movies\": 20}}', NULL, NULL),
(9, 9, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"rendering scenes\", \"project\": \"SXOu316BbN6r3EYo\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:08:10.088Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 34, \"movies\": 20}}', NULL, NULL),
(10, 10, NULL, NULL, '{\"movie\": {\"url\": null, \"draft\": true, \"status\": \"running\", \"message\": \"rendering scenes\", \"project\": \"o5EDgeORNs8vYBim\", \"success\": false, \"ended_at\": null, \"created_at\": \"2023-02-27T09:08:13.030Z\", \"rendering_time\": null}, \"success\": true, \"remaining_quota\": {\"drafts\": 33, \"movies\": 20}}', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jsonvideo`
--
ALTER TABLE `jsonvideo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jsonvideo`
--
ALTER TABLE `jsonvideo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
