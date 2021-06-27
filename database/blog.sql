-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 27, 2021 lúc 08:06 PM
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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
