-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2021 lúc 01:05 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` int(3) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `sort`, `active`, `created`, `modified`) VALUES
(1, 'Fiction', 'media', 'Main', 100, 1, '2013-10-18 11:23:04', '2021-08-27 09:49:53'),
(2, 'Non-Fiction', 'Fiction', 'Shoes', 100, 1, '2013-10-23 03:11:57', '2021-08-27 09:50:27'),
(3, 'Classic', 'Jared Diamond', 'Must-Read Books', 100, 1, '2021-08-27 09:51:31', '2021-08-27 09:51:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderproducts`
--

CREATE TABLE `orderproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `productoption_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `productoption_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `weight` decimal(8,2) UNSIGNED DEFAULT 0.00,
  `price` decimal(8,2) UNSIGNED DEFAULT NULL,
  `subtotal` decimal(8,2) UNSIGNED DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `orderproducts`
--

INSERT INTO `orderproducts` (`id`, `order_id`, `product_id`, `productoption_id`, `name`, `productoption_name`, `quantity`, `weight`, `price`, `subtotal`, `note`, `created`, `modified`) VALUES
(1, 1, 4, NULL, 'The World Until Yesterday', NULL, 1, '0.00', '360.00', '360.00', NULL, '2021-09-23 11:45:37', '2021-09-23 11:45:37'),
(2, 2, 4, NULL, 'The World Until Yesterday', NULL, 1, '0.00', '360.00', '360.00', NULL, '2021-09-23 11:46:10', '2021-09-23 11:46:10'),
(3, 3, 4, NULL, 'The World Until Yesterday', NULL, 1, '0.00', '360.00', '360.00', NULL, '2021-09-23 11:47:29', '2021-09-23 11:47:29'),
(4, 4, 4, NULL, 'The World Until Yesterday', NULL, 1, '0.00', '360.00', '360.00', NULL, '2021-09-23 11:48:55', '2021-09-23 11:48:55'),
(5, 5, 9, NULL, 'Walking in This World by', NULL, 1, '0.00', '190.00', '190.00', NULL, '2021-09-23 12:58:55', '2021-09-23 12:58:55'),
(6, 6, 5, NULL, 'The World Without Us by', NULL, 1, '0.00', '320.00', '320.00', NULL, '2021-09-23 13:05:48', '2021-09-23 13:05:48'),
(7, 7, 3, NULL, 'James Cameron\'s TITANIC', NULL, 1, '0.00', '1.20', '1.20', NULL, '2021-09-23 13:09:39', '2021-09-23 13:09:39'),
(8, 8, 4, NULL, 'The World Until Yesterday', NULL, 1, '0.00', '360.00', '360.00', NULL, '2021-09-23 15:00:00', '2021-09-23 15:00:00'),
(9, 9, 4, NULL, 'The World Until Yesterday', NULL, 1, '0.00', '360.00', '360.00', NULL, '2021-09-23 15:00:27', '2021-09-23 15:00:27'),
(10, 10, 4, NULL, 'The World Until Yesterday', NULL, 3, '0.00', '360.00', '1080.00', NULL, '2021-09-23 15:02:33', '2021-09-23 15:02:33'),
(11, 11, 10, NULL, 'Waiting for the Barbarians', NULL, 1, '0.00', '150.00', '150.00', NULL, '2021-09-23 15:14:14', '2021-09-23 15:14:14'),
(12, 12, 4, NULL, 'The World Until Yesterday', NULL, 1, '0.00', '360.00', '360.00', NULL, '2021-09-25 03:03:33', '2021-09-25 03:03:33'),
(13, 13, 4, NULL, 'The World Until Yesterday', NULL, 1, '0.00', '360.00', '360.00', NULL, '2021-09-25 03:05:19', '2021-09-25 03:05:19'),
(14, 14, 9, NULL, 'Walking in This World by', NULL, 1, '0.00', '190.00', '190.00', NULL, '2021-09-25 03:09:03', '2021-09-25 03:09:03'),
(15, 15, 5, NULL, 'The World Without Us by', NULL, 1, '0.00', '320.00', '320.00', NULL, '2021-09-25 03:13:05', '2021-09-25 03:13:05'),
(16, 16, 10, NULL, 'Waiting for the Barbarians', NULL, 1, '0.00', '150.00', '150.00', NULL, '2021-09-25 03:14:44', '2021-09-25 03:14:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` decimal(8,2) UNSIGNED DEFAULT 0.00,
  `order_item_count` int(11) DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `tax` decimal(8,2) DEFAULT NULL,
  `shipping` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `phone`, `billing_state`, `shipping_address`, `shipping_state`, `weight`, `order_item_count`, `subtotal`, `tax`, `shipping`, `total`, `status`, `ip_address`, `created`, `modified`) VALUES
(10, 'ta', 'quynh anh', 'bacolu1234@gmail.com', '985905085', 'LA', 'nguyen luong bang', 'AR', '0.00', 1, '1080.00', '0.00', NULL, '1080.00', NULL, '::1', '2021-09-23 15:02:33', '2021-09-23 15:02:33'),
(11, 'ta', 'quynh anh', 'ngocdo44814@yahoo.com', '985905085', 'ME', 'nguyen luong bang', 'KS', '0.00', 1, '150.00', '0.00', NULL, '150.00', NULL, '::1', '2021-09-23 15:14:14', '2021-09-23 15:14:14'),
(13, 'do', 'hongngoc', 'ngocdo4481224@yahoo.com', '0985905085', 'ME', 'njdsnvd', 'ME', '0.00', 1, '360.00', '0.00', NULL, '360.00', NULL, '::1', '2021-09-25 03:05:19', '2021-09-25 03:05:19'),
(14, 'do', 'hongson', 'ngocdo434814@yahoo.com', '0985905085', 'ME', NULL, 'IA', '0.00', 1, '190.00', '0.00', NULL, '190.00', NULL, '::1', '2021-09-25 03:09:03', '2021-09-25 03:09:03'),
(15, 'hoang', 'thanh', 'ngoc@gmail.com', '242432414', NULL, 'njdsnvd', 'LA', '0.00', 1, '320.00', '0.00', NULL, '320.00', NULL, '::1', '2021-09-25 03:13:05', '2021-09-25 03:13:05'),
(16, 'quynh', 'nhu', 'ngoc123@gmail.com', '2424324141', NULL, 'njdsnvd', 'KY', '0.00', 1, '150.00', '0.00', NULL, '150.00', NULL, '::1', '2021-09-25 03:14:44', '2021-09-25 03:14:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productoptions`
--

CREATE TABLE `productoptions` (
  `id` int(10) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `productoptions`
--

INSERT INTO `productoptions` (`id`, `product_id`, `name`, `value`, `price`, `weight`, `active`, `views`, `created`, `modified`) VALUES
(1, 17, 'brown 8', NULL, '79.00', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(2, 17, 'brown 9', NULL, '79.00', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(3, 17, 'brown 10', NULL, '79.00', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(4, 15, 'xl', NULL, '14.95', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(5, 15, 'sm', NULL, '9.95', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(6, 15, 'md', NULL, '14.95', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00'),
(7, 15, 'l', NULL, '14.95', NULL, 1, 0, '2017-11-28 00:00:00', '2017-11-28 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `active` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `price`, `weight`, `views`, `active`, `created`, `modified`) VALUES
(1, 2, 'White Noise by Don DeLillo', 'JDon DeLillo', 'Winner of the National Book Award, from the author of The SilenceWhite Noise is the story of Jack and Babette and their children from their six or so various marriages. They live in a college town where Jack is Professor of Hitler Studies (and conceals the fact that he does not speak a word of German), and Babette teaches posture and volunteers by reading from the tabloids to a group of elderly shut-ins. They are happy enough, until a deadly toxic accident and Babette\'s addiction to an experimental drug make Jake question everything.White Noise is considered a postmodern classic and its unfolding of themes of consumerism, family and divorce, and technology as a deadly threat have attracted the attention of literary scholars since its publication. This Viking Critical Library edition, prepared by scholar Mark Osteen, is the only edition of White Noise that contains the entire text along with an extensive critical apparatus, including a critical introduction, selected essays on the author, the work, and its themes, reviews, a chronology of DeLillo\'s life and work, a list of discussion topics, and a selected bibliography.', 'img5.jpg', '340.00', '1.00', 0, 1, '2021-08-27 09:39:15', '2021-09-19 04:29:03'),
(2, 3, 'Willpower: Rediscovering the Greatest Human ', 'Roy F. Baumeister and John Tierney', 'One of the world\'s most esteemed and influential psychologists, Roy F. Baumeister, teams with New York Times science writer John Tierney to reveal the secrets of self-control and how to master it. Deep and provocative analysis of people\'s battle with temptation and masterful insights into understanding willpower: why we have it, why we don\'t, and how to build it. A terrific read. --Ravi Dhar, Yale School of Management, Director of Center for Customer Insights Pioneering research psychologist Roy F. Baumeister collaborates with New York Times science writer John Tierney to revolutionize our understanding of the most coveted human virtue: self-control. Drawing on cutting-edge research and the wisdom of real-life experts, Willpower shares lessons on how to focus our strength, resist temptation, and redirect our lives. It shows readers how to be realistic when setting goals, monitor their progress, and how to keep faith when they falter. By blending practical wisdom with the best of recent research science, Willpower makes it clear that whatever we seek--from happiness to good health to financial security--we won\'t reach our goals without first learning to harness self-control.', 'img9.jpg', '320.00', '1.00', 0, 1, '2021-08-27 09:40:45', '2021-08-28 04:39:46'),
(3, 2, 'James Cameron\'s TITANIC', 'James Cameron', 'When James Cameron\'s film Titanic first sailed across the silver screen in 1997, audiences were amazed by its groundbreaking visual effects, cinematography, and heart-wrenching love story. Now, nearly fifteen years later, Titanic has remained one of the most critically acclaimed and highest-grossing motion picture epics of all time, becoming a cultural phenomenon.In this updated edition of the New York Times bestseller, discover everything you\'ve always wanted to know about Titanic, from the actual construction of the \"ship of dreams\" to the casting of Jack and Rose, one of the most memorable film couples in Hollywood history. Featuring an in-depth new foreword by James Cameron that details the personal impact Titanic had on his life and career as a filmmaker and never-before-seen photographs--plus a removable, double-sided poster--this collector\'s edition is the ultimate behind-the-scenes look at one of the most beloved movies of all time.', 'img8.jpg', '1.20', '1.00', 0, 1, '2021-08-27 09:42:15', '2021-08-27 09:47:12'),
(4, 1, 'The World Until Yesterday', 'Jared Diamond', 'The bestselling author of Collapse and Guns, Germs and Steel surveys the history of human societies to answer the question: What can we learn from traditional societies that can make the world a better place for all of us?\r\n\r\n\"As he did in his Pulitzer Prize-winning Guns, Germs, and Steel, Jared Diamond continues to make us think with his mesmerizing and absorbing new book.\" Bookpage\r\n\r\n\r\nMost of us take for granted the features of our modern society, from air travel and telecommunications to literacy and obesity. Yet for nearly all of its six million years of existence, human society had none of these things. While the gulf that divides us from our primitive ancestors may seem unbridgeably wide, we can glimpse much of our former lifestyle in those largely traditional societies still or recently in existence. Societies like those of the New Guinea Highlanders remind us that it was only yesterday-in evolutionary time-when everything changed and that we moderns still possess bodies and social practices often better adapted to traditional than to modern conditions.The World Until Yesterday provides a mesmerizing firsthand picture of the human past as it had been for millions of years-a past that has mostly vanished-and considers what the differences between that past and our present mean for our lives today.\r\n', 'img1.jpg', '360.00', '1.00', 1, 1, '2021-08-27 09:45:57', '2021-08-28 04:41:53'),
(5, 2, 'The World Without Us by', ' Alan Weisman', 'Time #1 Nonfiction Book of 2007\r\nEntertainment Weekly #1 Nonfiction Book of 2007\r\nFinalist for the 2007 National Book Critics Circle Award\r\nSalon Book Awards 2007\r\nAmazon Top 100 Editors\' Picks of 2007 (#4)\r\nBarnes and Noble 10 Best of 2007: Politics and Current Affairs\r\nKansas City Star\'s Top 100 Books of the Year 2007\r\nMother Jones\' Favorite Books of 2007\r\nSouth Florida Sun-Sentinel Best Books of the Year 2007\r\nHudson\'s Best Books of 2007\r\nSt. Louis Post-Dispatch Best Books of 2007\r\nSt. Paul Pioneer Press Best Books of 2007 If human beings disappeared instantaneously from the Earth, what would happen? How would the planet reclaim its surface? What creatures would emerge from the dark and swarm? How would our treasured structures--our tunnels, our bridges, our homes, our monuments--survive the unmitigated impact of a planet without our intervention? In his revelatory, bestselling account, Alan Weisman draws on every field of science to present an environmental assessment like no other, the most affecting portrait yet of humankind\'s place on this planet.\r\nshow less', 'img2.jpg', '320.00', '0.00', 0, 1, '2021-08-28 04:47:19', '2021-08-28 04:47:19'),
(6, 3, 'When You Kant Figure It Out, Ask a Philosopher by', 'Author: Marie Robert', 'Advice for modern dilemmas from the greatest Western philosophers.How can Kant comfort you when you get ditched via text message? How can Aristotle cure your hangover? How can Heidegger make you feel better when your dog dies?When You Kant Figure It Out, Ask a Philosopher explains how pearls of wisdom from the greatest Western philosophers can help us face and make light of some of the daily challenges of modern life. In twelve clever, accessible chapters, you\'ll get advice from Epicurus about how to disconnect from constant news alerts and social media updates, Nietzsche\'s take on getting in shape, John Stuart Mill\'s tips for handling bad birthday presents, and many other classic insights to help you navigate life today.Hilarious, practical, and edifying, When You Kant Figure It Out, Ask a Philosopher brings the best thinkers of the past into the 21st Century to help us all make sense of a chaotic new world.', 'img3.jpg', '290.00', '1.00', 0, 1, '2021-08-28 04:49:57', '2021-09-18 06:32:38'),
(7, 3, 'Why I\'m No Longer Talking', ' Reni Eddo-Lodge', 'NEW YORK TIMES BESTSELLER This is a book that was begging to be written. This is the kind of book that demands a future where we\'ll no longer need such a book. Essential. --Marlon James \"The most important book for me this year.\" --Emma Watson Selected by Emma Watson as the Our Shared Shelf Book Club Pick for January/February 2018\r\nSunday Times Bestseller\r\nWinner of the British Book Awards Nonfiction Narrative Book of the Year\r\nWinner of the Jhalak Prize\r\nFoyles Nonfiction Book of the Year\r\nBlackwell\'s Nonfiction Book of the Year Named One of the Best Books of 2017 by:\r\nNPR\r\nThe Guardian\r\nThe Observer\r\nThe Brooklyn Rail\r\nCultured Vultures Award-winning journalist Reni Eddo-Lodge was frustrated with the way that discussions of race and racism are so often led by those blind to it, by those willfully ignorant of its legacy. Her response, Why I\'m No Longer Talking to White People About Race, has transformed the conversation both in Britain and around the world. Examining everything from eradicated black history to the political purpose of white dominance, from whitewashed feminism to the inextricable link between class and race, Eddo-Lodge offers a timely and essential new framework for how to see, acknowledge, and counter racism. Including a new afterword by the author, this is a searing, illuminating, absolutely necessary exploration of what it is to be a person of color in Britain today, and an essential handbook for anyone looking to understand how structural racism works.\r\nshow less', 'img4.jpg', '290.00', '1.00', 0, 1, '2021-08-28 09:08:48', '2021-08-28 09:56:20'),
(8, 1, 'When You Kant Figure', ' Marie Robert', 'Advice for modern dilemmas from the greatest Western philosophers.How can Kant comfort you when you get ditched via text message? How can Aristotle cure your hangover? How can Heidegger make you feel better when your dog dies?When You Kant Figure It Out, Ask a Philosopher explains how pearls of wisdom from the greatest Western philosophers can help us face and make light of some of the daily challenges of modern life. In twelve clever, accessible chapters, you\'ll get advice from Epicurus about how to disconnect from constant news alerts and social media updates, Nietzsche\'s take on getting in shape, John Stuart Mill\'s tips for handling bad birthday presents, and many other classic insights to help you navigate life today.Hilarious, practical, and edifying, When You Kant Figure It Out, Ask a Philosopher brings the best thinkers of the past into the 21st Century to help us all make sense of a chaotic new world.', 'img6.jpg', '350.00', '1.00', 0, 1, '2021-08-28 09:12:33', '2021-09-12 15:04:24'),
(9, 2, 'Walking in This World by', ': Julia Cameron', 'In this long-awaited sequel to the international bestseller The Artist\'s Way, Julia Cameron presents the next step in her course of discovering and recovering the creative self.\r\n\r\nWalking in This World picks up where Julia Cameron\'s bestselling book on the creative process, The Artist\'s Way, left off to present readers with a second course--Part Two in an amazing journey toward discovering our human potential. Full of valuable new strategies and techniques for breaking through difficult creative ground, this is the \"intermediate level\" of the Artist\'s Way program.\r\n\r\nA profoundly inspired work by the leading authority on the subject of creativity, Walking in This World is an invaluable tool for artists. This second book is followed by Finding Water, the thrird book in The Artist\'s Way trilogy.\r\nshow less', 'img7.jpg', '190.00', '1.00', 0, 1, '2021-08-28 09:14:46', '2021-08-28 09:59:10'),
(10, 3, 'Waiting for the Barbarians', ' J. M. Coetzee , Illustrated', 'A modern classic by Nobel Laureate J. M. Coetzee, now a major motion picture starring Robert Pattinson and Johnny DeppFor decades the Magistrate has run the affairs of a tiny frontier settlement, ignoring the impending war between the barbarians and the Empire whose servant he is. When interrogation experts arrive, however, he finds himself jolted into sympathy with their victims-until their barbarous treatment of prisoners of war finally pushes him into a quixotic act of rebellion, and thus into imprisonment as an enemy of the state.Waiting for the Barbarians, J. M. Coetzee\'s third novel, which won the James Tate Black Memorial Prize, is an allegory of the war between oppressor and oppressed. The Magistrate is not simply a man living through a crisis of conscience in an obscure place in remote times; his situation is that of all men living in unbearable complicity with regimes that elevate their own survival above justice and decency.', 'img10.jpg', '150.00', '0.00', 0, 1, '2021-08-28 09:39:29', '2021-09-18 06:34:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uuid` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) UNSIGNED DEFAULT 0,
  `login_count` int(11) UNSIGNED DEFAULT 0,
  `login_last` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role`, `first_name`, `last_name`, `phone`, `email`, `password`, `uuid`, `active`, `login_count`, `login_last`, `created`, `modified`) VALUES
(1, 'admin', 'Admin', 'Admin', '818-111-1111', 'info@example.com', '$2y$10$CgM4vIxsvxgDGR3A0.0tfuFNvBDw8EAVYWPZBV5eusI00qqeaofjm', '', 1, 2, '2017-11-28 09:17:42', '2014-12-10 11:19:57', '2017-11-28 09:18:15'),
(2, 'admin', 'ngoc', 'Đỗ', '0855851854', 'bacolu123@gmail.com', '$2y$10$QswpKnR9s/0b9tHwq1ZKM.45FJMp.otNxENEnLj8pWFbrc0w1Icl6', NULL, 1, 13, '2021-09-18 07:54:52', '2021-08-28 20:30:14', '2021-09-18 07:54:52'),
(3, NULL, 'ta', 'quynh anh', '3343455', 'bacolu1234@gmail.com', '$2y$10$7rU.rKX46Zlax36to/Ppd.A8AZhRu/fa0.rZJ5UlEH1jhfVQkKDxW', NULL, 0, 3, '2021-09-18 07:50:43', '2021-09-18 05:24:30', '2021-09-18 07:50:43'),
(4, NULL, 'ta', 'quynh nhu', '334345532434', 'ngocdo44814@yahoo.com', '$2y$10$8BebyT39oSWo/TYRqAEWdOEveP4bo.Wpqbgwke4VZ/sKyBE3uvaN.', NULL, 0, 4, '2021-09-18 07:46:48', '2021-09-18 05:50:44', '2021-09-18 07:46:48'),
(8, NULL, 'do', 'hongson', '334345533r2', 'a23@gmail.com', '$2y$10$u4WlM.VN4z8w6lxIA/wcseGjrmnclqWQ6ERIQpyxKwHropIr8jF9m', NULL, 0, 0, NULL, '2021-09-18 12:59:27', '2021-09-18 12:59:27');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `productoptions`
--
ALTER TABLE `productoptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modified` (`modified`),
  ADD KEY `category_id` (`product_id`),
  ADD KEY `brand_id` (`value`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `modified` (`modified`),
  ADD KEY `name_slug` (`slug`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `active` (`active`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orderproducts`
--
ALTER TABLE `orderproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `productoptions`
--
ALTER TABLE `productoptions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
