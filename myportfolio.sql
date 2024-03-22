-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 05:18 PM
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
-- Database: `myportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_title`, `short_description`, `long_description`, `about_image`, `resume`, `created_at`, `updated_at`) VALUES
(1, 'I will transform your ideas into remarkable digital products', '15+ Years Experience In this industry, Means Product Designing', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer and as a Web Developer for over 15 years. You can count on my ability.', '<p class=\"desc\">My name is Michael Kobru. I am the founder and CEO of MrichTech Expert Solution. My passion for technology made me delve into it and as a person who delight joy in helping people solve their problem, I was able to see this come to light when I use my skills and knowledge to bring solutions to reality.</p>\r\n<ul class=\"about__exp__list\">\r\n<li>\r\n<h5 class=\"title\">User experience design - (Product Design)</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to unseery.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Web and user interface design - Development</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of lorem ipsum.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Interaction design - Animation</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</p>\r\n</li>\r\n</ul>', 'upload/about_image/1793696902020657.png', '1793699800922847.pdf', NULL, '2024-03-19 15:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `about_awards`
--

CREATE TABLE IF NOT EXISTS `about_awards` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `award_image` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_awards`
--

INSERT INTO `about_awards` (`id`, `title`, `award_image`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'Best ux designer award in 2002', 'upload/award_image/1792792367244908.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', NULL, '2024-03-06 15:47:15'),
(3, 'BBA final examination 2001', 'upload/award_image/1792792602224865.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', NULL, '2024-03-06 15:50:59'),
(4, 'Designing award 2021', 'upload/award_image/1792792338864769.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', NULL, '2024-03-07 07:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `about_education`
--

CREATE TABLE IF NOT EXISTS `about_education` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_education`
--

INSERT INTO `about_education` (`id`, `title`, `date`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'Economics -  University Of Lagos', '2012 – 2016', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', NULL, '2024-03-06 11:17:25'),
(2, 'Oracle Database 12C - NIIT Nigeria', '2008 – 2012', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.', NULL, '2024-03-06 11:16:54'),
(3, 'Web Design & Development with Udemy', '2016 - 2020', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', NULL, '2024-03-06 11:17:56'),
(5, 'CCNA Networking at New Horizon', '2021 – Present', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available.', NULL, '2024-03-06 11:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_id` varchar(255) DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `blog_tags` varchar(255) DEFAULT NULL,
  `blog_description` text DEFAULT NULL,
  `detail_image` varchar(255) DEFAULT NULL,
  `wrap_image` varchar(255) DEFAULT NULL,
  `wrap_image2` varchar(255) DEFAULT NULL,
  `other_text` text DEFAULT NULL,
  `blog_thumb` varchar(255) DEFAULT NULL,
  `post_thumb` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_image`, `blog_tags`, `blog_description`, `detail_image`, `wrap_image`, `wrap_image2`, `other_text`, `blog_thumb`, `post_thumb`, `created_by`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'Facebook design is dedicated to what\'s new in design', 'upload/blog_images/1793786696699960.jpg', 'facebook', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'upload/blog_images/1793786696772378.jpg', NULL, NULL, NULL, 'upload/blog_images/1793786696983348.jpg', 'upload/blog_images/1793786696994350.jpg', 'Michael Kobru', 1, '2024-03-17 15:10:21', '2024-03-18 13:36:39'),
(2, '3', 'Make communication Fast and Effectively.', 'upload/blog_images/1793787233372602.jpg', 'react', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'upload/blog_images/1793787233426969.jpg', NULL, NULL, NULL, 'upload/blog_images/1793787233538974.jpg', 'upload/blog_images/1793787233548710.jpg', 'Michael Kobru', 1, '2024-03-17 15:20:13', '2024-03-18 13:36:46'),
(3, '1', 'How to increase your productivity at work - 2021', 'upload/blog_images/1793787568172066.jpg', 'vuejs', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'upload/blog_images/1793787568242584.jpg', NULL, NULL, NULL, 'upload/blog_images/1793787568453308.jpg', 'upload/blog_images/1793787568464852.jpg', 'Michael Kobru', 1, '2024-03-17 15:25:33', '2024-03-18 13:36:34'),
(4, '5', 'How to start sketch after build a website', 'upload/blog_images/1793808892790590.jpg', 'vuejs', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'upload/blog_images/1793808892879322.jpg', NULL, NULL, NULL, 'upload/blog_images/1793808893053457.jpg', 'upload/blog_images/1793808893063459.jpg', 'Michael Kobru', 1, '2024-03-17 21:04:29', '2024-03-18 13:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', '2024-03-14 14:38:13', NULL),
(2, 'Laravel', '2024-03-14 14:43:02', NULL),
(3, 'React', '2024-03-14 14:43:54', '2024-03-14 14:54:09'),
(5, 'VueJS', '2024-03-15 22:26:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_feedback`
--

CREATE TABLE IF NOT EXISTS `client_feedback` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_feedback` text DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_feedback`
--

INSERT INTO `client_feedback` (`id`, `client_feedback`, `client_name`, `created_at`, `updated_at`) VALUES
(1, 'MrichTech is the best when it comes to Web development. We trusted them to handle our branding. We are very happy we did because their professionalism is topnotch.', 'GMS Consults', '2024-03-08 20:52:23', '2024-03-08 21:51:32'),
(3, 'We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.', 'Grenville Schools', '2024-03-08 21:52:17', '2024-03-08 21:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `address`, `budget`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Michael Kobru', 'mikipary@gmail.com', NULL, '08138600137', NULL, NULL, 'Pls get in touch', '2024-03-22 08:45:14', NULL),
(2, 'Michael Kobru', 'mikipary@gmail.com', NULL, '08138600137', NULL, NULL, 'hfjfjf', '2024-03-22 09:06:29', NULL),
(3, 'Michael Kobru', 'mikipary@gmail.com', NULL, '08138600137', NULL, NULL, 'ghjh', '2024-03-22 10:43:36', NULL),
(4, 'Michael Kobru', 'mikipary@gmail.com', NULL, '08138600137', NULL, NULL, 'asdf', '2024-03-22 11:03:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone_no` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `motto` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `copyright` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `phone_no`, `short_description`, `address`, `email`, `country`, `motto`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '+2348138600137', 'At MrichTech, we take pride in our ability to transform your business challenges to strength in a technologically driven way .', '18 Ladoke Akintola Street, GRA Ikeja Lagos.', 'mikipary@gmail.com', 'Nigeria', 'Trust the process, we will deliver', 'https://www.facebook.com/mrichtec', 'https://www.twitter.com/mrichtec', 'https://www.instagram.com/mrichtec', 'https://www.linkedin.com/mrichtec', 'https://www.youtube.com/mrichtec', 'Copyright @ MrichTech Expert Solutions 2024 All right Reserved', NULL, '2024-03-19 15:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `home_client_images`
--

CREATE TABLE IF NOT EXISTS `home_client_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_client_images`
--

INSERT INTO `home_client_images` (`id`, `client_image`, `created_at`, `updated_at`) VALUES
(1, 'upload/client_images/1793001014757635.jpg', '2024-03-08 22:32:41', '2024-03-08 23:03:37'),
(2, 'upload/client_images/1793000992317246.jpg', '2024-03-08 22:32:42', '2024-03-08 23:03:15'),
(4, 'upload/client_images/1793000961613408.jpg', '2024-03-08 22:59:13', '2024-03-08 23:02:46'),
(5, 'upload/client_images/1793001042490388.jpg', '2024-03-08 23:04:03', NULL),
(6, 'upload/client_images/1793001054595877.jpg', '2024-03-08 23:04:15', NULL),
(7, 'upload/client_images/1793001137252391.jpg', '2024-03-08 23:05:33', NULL),
(8, 'upload/client_images/1793001159838983.jpg', '2024-03-08 23:05:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_partners`
--

CREATE TABLE IF NOT EXISTS `home_partners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_partners`
--

INSERT INTO `home_partners` (`id`, `title`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'I am proud to have collaborated with some awesome companies', 'I\'m a bit of a digital product junky. Over the years, I\'ve used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own. I am happy they always count on my expertise.', NULL, '2024-03-08 16:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `home_partner_images`
--

CREATE TABLE IF NOT EXISTS `home_partner_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `partner_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_partner_images`
--

INSERT INTO `home_partner_images` (`id`, `partner_image`, `created_at`, `updated_at`) VALUES
(5, 'upload/partner_images/1792966315993121.jpg', '2024-03-08 13:52:05', NULL),
(8, 'upload/partner_images/1792966316107119.jpg', '2024-03-08 13:52:05', NULL),
(9, 'upload/partner_images/1792966316138952.jpg', '2024-03-08 13:52:05', NULL),
(10, 'upload/partner_images/1792977390431360.png', '2024-03-08 14:03:47', '2024-03-08 16:48:07'),
(11, 'upload/partner_images/1792967203357360.jpg', '2024-03-08 14:06:12', NULL),
(12, 'upload/partner_images/1792967216079184.jpg', '2024-03-08 14:06:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE IF NOT EXISTS `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `other_text` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `detail_image` varchar(255) DEFAULT NULL,
  `wrap_image1` varchar(255) DEFAULT NULL,
  `wrap_image2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `title`, `short_description`, `long_description`, `other_text`, `icon`, `main_image`, `detail_image`, `wrap_image1`, `wrap_image2`, `created_at`, `updated_at`) VALUES
(1, 'Business Strategy', '<p>Strategy is a forward-looking plan for your brand&rsquo;s behavior. Strategy is a forward-looking plan.</p>', '<p><span style=\"font-size: 18pt;\">We Solve Business Strategy Problem</span></p>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', 'upload/service_images/1793248043825052.png', 'upload/service_images/1793317781193458.png', 'upload/service_images/1793318060280564.png', 'upload/service_images/1793326737553994.jpg', 'upload/service_images/1793326811108125.jpg', '2024-03-11 14:08:53', '2024-03-12 13:39:47'),
(2, 'Brand Strategy', '<p>Full strategy design and execution for new and refresh brand projects, including positioning, brand architecture, identity, comprehensive guidelines and trainings.</p>', '<p><span style=\"font-size: 18pt;\">We Solve Business Strategy Problem</span></p>\r\n<p>Full strategy design and execution for new and refresh brand projects, including positioning, brand architecture, identity, comprehensive guidelines and trainings.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', NULL, 'upload/service_images/1793244650848791.png', 'upload/service_images/1793328493008773.jpg', 'upload/service_images/1793328493091716.jpg', 'upload/service_images/1793328419302302.jpg', 'upload/service_images/1793328493257085.jpg', '2024-03-11 15:36:06', '2024-03-13 06:56:17'),
(3, 'Product Design', '<p>User interface design, interaction design, design refinement, prototyping, wireframing, product audit.</p>', NULL, NULL, 'upload/service_images/1793248089495727.png', 'upload/service_images/1793318428539667.jpg', 'upload/service_images/1793318428666913.jpg', NULL, NULL, '2024-03-11 15:48:27', '2024-03-12 11:08:46'),
(4, 'Web Development', '<p>Crafting high-performance websites with striking visuals and robust security.</p>', '<p>test</p>', NULL, 'upload/service_images/1793316161395568.png', 'upload/service_images/1793318617895104.jpg', 'upload/service_images/1793318617962309.jpg', NULL, NULL, '2024-03-11 16:39:18', '2024-03-12 11:11:47'),
(5, 'Visual Design', '<p>Strategy is a forward-looking plan for your brand&rsquo;s behavior. Strategy is a forward-looking plan.</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li style=\"font-weight: bold;\"><strong>User Research &amp; Testing</strong></li>\r\n<li style=\"font-weight: bold;\"><strong>UX Design</strong></li>\r\n<li style=\"font-weight: bold;\"><strong>Visual Design</strong></li>\r\n<li style=\"font-weight: bold;\"><strong>Information Architecture</strong></li>\r\n</ul>', '<p>Test</p>', NULL, 'upload/service_images/1793316291623472.png', 'upload/service_images/1793317890649733.png', 'upload/service_images/1793318019533665.png', NULL, NULL, '2024-03-11 16:40:12', '2024-03-12 11:02:16'),
(6, 'On Demand Services', '<p>Full-stack brand, marketing and creative services to complement and support short and long-term requirements.</p>', '<p>Test</p>', NULL, 'upload/service_images/1793317091486621.png', 'upload/service_images/1793317998962348.png', 'upload/service_images/1793317999039878.png', NULL, NULL, '2024-03-12 10:27:30', '2024-03-12 11:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE IF NOT EXISTS `home_slides` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `home_slide` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `title`, `short_title`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'I will give you Best Product in the shortest time.', 'I\'m a Software developer, product design & visual designer focused on crafting clean & user‑friendly experiences', 'upload/home_slides/1792591312012193.png', 'https://youtu.be/fQmpf1e7Ov0', NULL, '2024-03-04 10:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_01_103420_create_home_slides_table', 1),
(7, '2024_03_04_154642_create_multi_images_table', 2),
(9, '2024_03_06_105222_create_about_education_table', 3),
(11, '2024_03_06_133408_create_about_awards_table', 4),
(16, '2024_03_08_124627_create_home_partners_table', 6),
(17, '2024_03_08_134140_create_home_partner_images_table', 7),
(18, '2024_03_08_212225_create_client_feedback_table', 8),
(19, '2024_03_08_225754_create_home_client_images_table', 9),
(20, '2024_03_11_110815_create_home_services_table', 10),
(22, '2024_03_07_082550_create_portfolios_table', 11),
(23, '2024_03_14_145023_create_blog_categories_table', 12),
(25, '2024_03_02_220808_create_abouts_table', 14),
(26, '2024_03_15_133132_create_blogs_table', 15),
(29, '2024_03_19_092538_create_footers_table', 16),
(31, '2024_03_20_074844_create_contacts_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE IF NOT EXISTS `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `multi_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `multi_image`, `created_at`, `updated_at`) VALUES
(1, 'upload/multi_image/1792767819891275.png', '2024-03-06 09:17:05', NULL),
(10, 'upload/multi_image/1792768519372545.png', '2024-03-06 09:28:12', NULL),
(12, 'upload/multi_image/1792768577463176.png', '2024-03-06 09:29:07', NULL),
(14, 'upload/multi_image/1792768726047605.png', '2024-03-06 09:31:29', NULL),
(15, 'upload/multi_image/1792768828114612.png', '2024-03-06 09:33:06', NULL),
(16, 'upload/multi_image/1792768941878761.png', '2024-03-06 09:34:55', NULL),
(17, 'upload/multi_image/1792768981514608.png', '2024-03-06 09:35:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_name` varchar(255) DEFAULT NULL,
  `portfolio_title` varchar(255) DEFAULT NULL,
  `portfolio_category` varchar(255) DEFAULT NULL,
  `portfolio_image` varchar(255) DEFAULT NULL,
  `detail_image` varchar(255) DEFAULT NULL,
  `wrap_image1` varchar(255) DEFAULT NULL,
  `wrap_image2` varchar(255) DEFAULT NULL,
  `wr_image` varchar(255) DEFAULT NULL,
  `portfolio_description` text DEFAULT NULL,
  `other_text` text DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `client_phone` varchar(255) DEFAULT NULL,
  `client_mail` varchar(255) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_location` varchar(255) DEFAULT NULL,
  `project_link` varchar(255) DEFAULT NULL,
  `project_date` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `facebook_handle` varchar(255) DEFAULT NULL,
  `twitter_handle` varchar(255) DEFAULT NULL,
  `instagram_handle` varchar(255) DEFAULT NULL,
  `youtube_handle` varchar(255) DEFAULT NULL,
  `linkedin_handle` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_category`, `portfolio_image`, `detail_image`, `wrap_image1`, `wrap_image2`, `wr_image`, `portfolio_description`, `other_text`, `client_name`, `client_phone`, `client_mail`, `project_name`, `project_location`, `project_link`, `project_date`, `client_address`, `facebook_handle`, `twitter_handle`, `instagram_handle`, `youtube_handle`, `linkedin_handle`, `created_at`, `updated_at`) VALUES
(1, 'Grenville Schools', 'Social Media and School Website Design', 'website', 'upload/portfolio_image/1793491127360830.png', 'upload/portfolio_image/1793491130470641.png', NULL, NULL, 'upload/portfolio_image/1793492717322948.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', NULL, 'Grenville Schools', '+2349062684833', 'info@grenvilleschool.com', 'Website Design and Brand', '18 Ladoke Akintola Street, GRA Ikeja Lagos', 'https://www.grenvilleschool.com', '2024-03-06', '18 Ladoke Akintola Street, GRA Ikeja Lagos', 'https://www.facebook.com/grenville_sch', 'https://www.twitter.com/grenville_sch', 'https://www.instagram.com/grenville_sch', 'https://www.youtube.com/grenville_sch', 'https://www.linkedin.com/grenville_sch', '2024-03-14 08:53:48', '2024-03-17 12:59:28'),
(2, 'GMS Consults', 'Education Travel Website Design', 'website', 'upload/portfolio_image/1793491250964495.png', 'upload/portfolio_image/1793491251767415.png', NULL, NULL, 'upload/portfolio_image/1793492860806546.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', NULL, 'GMS Consults', '+2348166117591', 'info@gmsconsult.org', 'Website Design and Brand', NULL, 'https://www.gmsconsult.org/', '2022-12-24', NULL, 'https://www.facebook.com/gms', 'https://www.twitter.com/gms', NULL, 'https://www.youtube.com/gms', 'https://www.linkedin.com/gms', '2024-03-14 08:55:44', '2024-03-17 13:00:34'),
(3, 'Grenville Schools', 'School Management System', 'website', 'upload/portfolio_image/1793491360101715.png', 'upload/portfolio_image/1793491360917146.png', NULL, NULL, 'upload/portfolio_image/1793492927757407.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', NULL, 'Grenville Schools', '+2349062684833', 'info@grenvilleschool.com', 'SMS', '18 Ladoke Akintola Street, GRA Ikeja Lagos', 'https://portal.grenvilleschool.com', NULL, 'No 18 Ladoke Akintola Street, GRA Ikeja Lagos.', 'https://www.facebook.com/grenville_sch', 'https://www.twitter.com/grenville_sch', NULL, 'https://www.youtube.com/grenville_sch', 'https://www.linkedin.com/grenville_sch', '2024-03-14 08:57:28', '2024-03-14 09:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `twitter_profile` varchar(255) DEFAULT NULL,
  `facebook_profile` varchar(255) DEFAULT NULL,
  `instagram_profile` varchar(255) DEFAULT NULL,
  `linkedin_profile` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `phone`, `country`, `job`, `company`, `address`, `about`, `profile_image`, `twitter_profile`, `facebook_profile`, `instagram_profile`, `linkedin_profile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Michael Kobru', 'mikipary@gmail.com', 'mickypary', '08138600137', 'Nigeria', 'Web Developer', 'Grenville School', 'No 18 Ladoke Akintola Street GRA Ikeja Lagos', NULL, '202403040921mickypary.jpeg', 'https://twitter.com/mickypary', 'https://facebook.com/mickypary', 'https://instagram.com/mickypary', 'https://linkedin.com/mickypary', '2024-03-04 08:19:51', '$2y$12$SMh73cYXddcqlJ97N5hU8OSwiqgPqK2fcjVcfPgKIrGyCYcAeCiKi', NULL, '2024-03-04 08:19:34', '2024-03-04 08:21:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
