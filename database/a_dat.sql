-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2021 lúc 09:41 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `a_dat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `id_users`, `name`, `img`, `content`, `slug`, `view`, `updated_at`, `created_at`) VALUES
(1, 1, 'Format releases a new tool that enables direct video hosting', 'https://lh3.googleusercontent.com/N7So1Hag1Fs6fsrXZdEt0aNxP8MOaTcnWfUt0DkwkjtKBXncMEvhjBAY4u3EDwsUCjEiJsEsxGPfVR1rCGYZJfkoZ52h_hzBPIctyQSCelFGq0Az5x3oaTs7UxXZvys6y0Q4vkSESw=w2400', '<p>Just because we can&#39;t get out and about like we normally would, doesn&rsquo;t mean we have to stop taking pictures. There&rsquo;s still plenty you can do, provided you&#39;re prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>\r\n\r\n<p>Most photographers love to shoot the unusual, and you don&rsquo;t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>\r\n\r\n<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>\r\n\r\n<blockquote>\r\n<h2>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</h2>\r\n</blockquote>\r\n\r\n<p>Pretend everything is new and that you haven&rsquo;t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>\r\n\r\n<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>\r\n\r\n', '#', 156, '2021-06-27 09:16:23', '2021-06-27 09:16:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `slug`, `name`) VALUES
(1, 'home', 'Home'),
(2, 'about', 'About'),
(3, 'portfolio', 'Portfolio'),
(4, 'news', 'News'),
(5, 'contact', 'Contact');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories_portfolio`
--

CREATE TABLE `categories_portfolio` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories_portfolio`
--

INSERT INTO `categories_portfolio` (`id`, `slug`, `name`) VALUES
(1, '*', 'All'),
(2, 'vimeo', 'Vimeo'),
(3, 'youtube', 'Youtube'),
(4, 'soundcloud', 'Soundcloud'),
(5, 'image', 'Image');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `information`, `content`, `status`, `updated_at`, `created_at`) VALUES
(1, 'demo-tien-datds', 'dsadasdsa', 'ddsadasdasd', 1, '2021-06-28 11:00:11', '2021-05-11 00:30:08'),
(2, 'Nguyễn Đức Vinh', '0823606709', 'Mau sim giá rẻ', 1, '2021-06-28 10:08:08', '2021-06-28 00:31:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fun_facts`
--

CREATE TABLE `fun_facts` (
  `id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `fun_facts`
--

INSERT INTO `fun_facts` (`id`, `key`, `value`) VALUES
(1, '1000', 'Projects Completed'),
(2, '1000', 'Lines of Code'),
(3, '100', 'Xin chào ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `personal`
--

INSERT INTO `personal` (`id`, `name`, `slug`, `img`) VALUES
(1, 'Facebook', 'https://www.facebook.com/PhamTienDat.Url', 'https://lh3.googleusercontent.com/hJYDzv8eR9MbM1kQzpuZvQcW6jCCShcRs-rOwp9z1Avfon2X8CSJ1b-J_UeykroWtGwf7e__bMJcrUefP9GPhcjXqHmsXhea6hnHaL_lJHDoAEXmhApK3QKxaX0-l9VkE6qJZ1TFYg=w2400'),
(2, 'Instagram', 'https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2FPhamDat.Infor%3Ffbclid%3DIwAR1f8r7cvysMPjyBKQl02JPWsDg9QGcF2aqECa_OoM29BBbVGi5hyZbeS20&h=AT2hEhi3nE0NoK7f3GASqr9nOsDksEAHM28DKYRx8RuwtiLHap832LduFFwfmoM_6MWdLHnP1XO5B92ElO1kRpfaBVjX2pQE_mgT1JU9tJBxeR4yLA0ZA5DRL0DaMJ1foMRn', 'https://lh3.googleusercontent.com/0ZvBqU9KOeUVVJ9xyeL45AxxogDCSwW5X8KE6Wt1BCdSsa3ppHJGf3Yx7049aJQJ0Sd9yz0fISowfscb1y0xa0NXjkwlnqmZ6QAKyEZ6gRBQ73RWwbkFud7iBVVf0bauNcwUmnHRAg=w2400'),
(3, 'TikTok', '#', 'https://lh3.googleusercontent.com/SXssQrFga_YnRm9sI7IwBvEsEzlR_GQQs44uItGOFnO6eM8zlVA_5bq2b5P5cShj9rrozbgIVIkFAOmF3zBgjnF7xEzeRwnZEEF5C4s--iOYhbEsJRnz2Q8-FOevOg5A9fAjaDcAFg=w2400'),
(4, 'Youtube', '#', 'https://lh3.googleusercontent.com/DhSc2Y9VmQBgnnw1OjqOb15xXLJpU2uW1z1I1tQ4daZyH2XRFrKVx6P4eghLXNum2HcpzxZ02Kimo5q1Afxqk8gqF_LEe9swY6O9YthqGD0fRbvnfPrS1DKYMPLxjj6rvSFhassuYA=w2400');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `id_categoeries` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `portfolio`
--

INSERT INTO `portfolio` (`id`, `id_categoeries`, `name`, `img`, `video`, `updated_at`, `created_at`) VALUES
(1, 2, 'Teresa Butler', 'https://lh3.googleusercontent.com/roVNIg2xdIFU1IBNRzZXFqMIGhW9aqXM6lNBkbg2cLbQGNOGIx1X_6OgExXvusvn_pJdgcPr4Y7mahGH-5qROOfrQLI9vBHaW4cn8QqBE6SdpFPY4L9Ii3Hxgo9hV-hGbe0y7l3niQ=w2400', 'https://www.youtube.com/watch?v=Amq-qlqbjYA', '2021-06-28 11:34:28', '2021-06-27 15:56:45'),
(2, 4, 'Derek Smith', 'https://lh3.googleusercontent.com/6MkHmHyzGmDbI7je5_qlg-W3QFWRsS0joCKnBH5ify2ErOGmzU1HejEv2xcf0rLdThEFW3TUYxUl7BW32sKhEYKtbDXtfJaYEfH5Dz_5S1-HiC-tNYXlPiQ1Npvx6xQwwnp6Kt3T7A=w2400', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/252739311&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true', '2021-06-27 15:56:45', '2021-06-27 15:56:45'),
(3, 3, 'Teresa Butler', 'https://lh3.googleusercontent.com/HVzRMDlXfhnXT3Ybs5RQNngFiT13BOT_F_XRZcJWUhtaZ6WobnvcZOset6wCLqzZ-TwfWB8Zqaz0HeRvOQRCbrpS5VZ1skAcwkG2_4vylydfos97eNhQ0t2SJqP7behj0XqyCljyvg=w2400', 'https://vimeo.com/312334044', '2021-06-27 15:56:45', '2021-06-27 15:56:45'),
(4, 5, 'Gloria Jenkins', 'https://lh3.googleusercontent.com/1JwUWolDahg4L4swXtsd7NmUE5X5NrJ21bQPtmpcAxO9io0bqaJ_6nA61MIDKligtkeH03ho19e_GhYzwk-6ovTt-6RueC1WbPq7qMZUrmFUz-hoUcBNvqpjkUzLhhsX21VvKCd8qw=w2400', 'https://lh3.googleusercontent.com/1JwUWolDahg4L4swXtsd7NmUE5X5NrJ21bQPtmpcAxO9io0bqaJ_6nA61MIDKligtkeH03ho19e_GhYzwk-6ovTt-6RueC1WbPq7qMZUrmFUz-hoUcBNvqpjkUzLhhsX21VvKCd8qw=w2400', '2021-06-27 15:56:45', '2021-06-27 15:56:45'),
(7, 1, 'Imagedsad', 'dsadasdsd', 'dsadasdasdsa', '2021-06-28 11:18:13', '2021-06-28 11:18:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `key_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `profile`
--

INSERT INTO `profile` (`id`, `key_name`, `value_name`) VALUES
(1, 'Birthday', '01.07.1990'),
(2, 'Age', '31'),
(3, 'Address', 'Ave 11, New York, USA'),
(4, 'Email', 'mail@gmail.com'),
(5, 'Phone', '+77 022 177 05 05'),
(6, 'Study', 'Univercity of Texas'),
(7, 'Freelance', 'Available');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug_settings` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_settings` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `name`, `slug_settings`, `name_settings`, `updated_at`, `created_at`) VALUES
(1, 'Tên profile', 'name-admin', 'Phạm Tiến Đạt', '2021-06-27 10:40:01', '2021-06-27 10:40:01'),
(2, 'Ảnh profile', 'avata', 'https://lh3.googleusercontent.com/MYAIXMcB-eXI3ZDRCabrn2Q_hm1zQ1cB-7wnfWYcpO14Hz6X5MO88sLvvr8WOdZAewqpMvbpCavi8qwOun4Du35qIXivkvCM-DeN5PsrKNgJ3fWK8w3pJrgG1Ykg1LCexnGgYgNW1g=w2400', '2021-06-27 10:40:01', '2021-06-27 10:40:01'),
(3, 'Câu chân ái cuộc đời..', 'content-demo', 'Creative Photographer based in New York and happy to travel all over Europe to capture photos.', '2021-06-27 12:01:51', '2021-06-27 12:01:51'),
(4, 'Facebook', 'facebook', 'https://www.facebook.com/PhamTienDat.Url', '2021-06-27 12:40:29', '2021-06-27 12:40:29'),
(5, 'Twitter', 'twitter', NULL, '2021-06-27 12:40:29', '2021-06-27 12:40:29'),
(6, 'Instagram', 'instagram', 'https://www.instagram.com/PhamDat.Infor/', '2021-06-27 12:40:29', '2021-06-27 12:40:29'),
(7, 'Dribbblefd', 'dribbble', NULL, '2021-06-28 08:37:40', '2021-06-27 12:40:29'),
(8, 'Tik Tok', 'tik-tok', NULL, '2021-06-27 12:40:29', '2021-06-27 12:40:29'),
(9, 'Logo title', 'faicon', 'http://127.0.0.1:8000/img/logo/logo.png', '2021-06-28 08:37:23', '2021-06-27 12:40:29'),
(10, 'Logo', 'logo', 'http://127.0.0.1:8000/img/logo/logo.png', '2021-06-27 12:40:29', '2021-06-27 12:40:29'),
(11, 'Title About', 'adriano-smith-photographer', 'Adriano Smith & Photographer\r\n', '2021-06-27 13:45:59', '2021-06-27 13:45:59'),
(12, 'Content About', 'content-about', 'Hello, I am a creative photographer based in New York and happy to travel all over Europe to capture your big day in candid and authentic photos. I will create a lasting memory of the people.', '2021-06-27 13:46:43', '2021-06-27 13:46:43'),
(13, 'Lượt xem trang', 'count_view_web', '0', '2021-06-28 12:49:34', '2021-06-28 12:49:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `key_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skill`
--

INSERT INTO `skill` (`id`, `key_name`, `value_name`) VALUES
(3, 'Wedding Photography', '95'),
(4, 'Lifestyle Photography', '80'),
(5, 'Family Photography', '90');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'Tiến Đạt', 'admin@tiendat.vn', '$2y$10$4gnRRwqCEUUqx30ty6udleMH8sr/JmWxgHpZyyU7wFS0On4OYybn6', '2021-06-27 11:31:28', '2021-06-27 11:31:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories_portfolio`
--
ALTER TABLE `categories_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `fun_facts`
--
ALTER TABLE `fun_facts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `categories_portfolio`
--
ALTER TABLE `categories_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `fun_facts`
--
ALTER TABLE `fun_facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
