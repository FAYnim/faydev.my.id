-- Faydev Personal Business Card Website
-- Ready-to-import MySQL schema + seed data

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `fayd7716_project`
	DEFAULT CHARACTER SET utf8mb4
	COLLATE utf8mb4_unicode_ci;

USE `fayd7716_project`;

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
	`id` int unsigned NOT NULL AUTO_INCREMENT,
	`title` varchar(150) NOT NULL,
	`thumbnail` varchar(255) NOT NULL,
	`demo_link` varchar(255) DEFAULT NULL,
	`project_date` date NOT NULL,
	`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
	`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	PRIMARY KEY (`id`),
	KEY `idx_project_date` (`project_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `projects` (`id`, `title`, `thumbnail`, `demo_link`, `project_date`) VALUES
	(1, 'Website Company Profile UMKM Kuliner', 'assets/images/projects/project-1.jpg', 'https://demo.faydev.my.id/umkm-kuliner', '2026-02-25'),
	(2, 'Landing Page Produk Herbal', 'assets/images/projects/project-2.jpg', 'https://demo.faydev.my.id/herbal-landing', '2026-02-10'),
	(3, 'Dashboard Penjualan Sederhana', 'assets/images/projects/project-3.jpg', 'https://demo.faydev.my.id/dashboard-sales', '2026-01-28'),
	(4, 'Website Booking Jasa Fotografi', 'assets/images/projects/project-4.jpg', 'https://demo.faydev.my.id/booking-foto', '2026-01-15'),
	(5, 'Sistem Otomasi Laporan WhatsApp', 'assets/images/projects/project-5.jpg', NULL, '2025-12-20'),
	(6, 'Chatbot FAQ untuk Bisnis Retail', 'assets/images/projects/project-6.jpg', NULL, '2025-11-30'),
	(7, 'Microsite Event Organizer', 'assets/images/projects/project-7.jpg', 'https://demo.faydev.my.id/event-microsite', '2025-11-12'),
	(8, 'Landing Page Kursus Online', 'assets/images/projects/project-8.jpg', 'https://demo.faydev.my.id/kursus-online', '2025-10-22');

DROP TABLE IF EXISTS `social_links`;
CREATE TABLE `social_links` (
	`id` int unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`icon` varchar(120) NOT NULL,
	`url` varchar(255) NOT NULL,
	`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
	`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	PRIMARY KEY (`id`),
	UNIQUE KEY `uq_social_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `social_links` (`id`, `name`, `icon`, `url`) VALUES
	(1, 'Instagram', 'fab fa-instagram', 'https://instagram.com/faydev'),
	(2, 'LinkedIn', 'fab fa-linkedin', 'https://linkedin.com/in/faydev'),
	(3, 'GitHub', 'fab fa-github', 'https://github.com/faydev'),
	(4, 'Threads', 'fab fa-threads', 'https://threads.net/@faydev'),
	(5, 'TikTok', 'fab fa-tiktok', 'https://tiktok.com/@faydev');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

COMMIT;
