-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2020 lúc 05:28 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan-1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `amenitles`
--

CREATE TABLE `amenitles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `amenitles`
--

INSERT INTO `amenitles` (`id`, `name`, `logo_url`) VALUES
(1, 'Pool', NULL),
(2, 'Indoor Pool', NULL),
(3, 'Free WiFi', NULL),
(4, 'Pet-friendly', NULL),
(5, 'Airport shuttle', NULL),
(6, 'Meeting rooms', NULL),
(7, 'Spa', NULL),
(8, '30m to the beach', NULL),
(9, 'Cocktail Bar', NULL),
(10, 'Room Service', NULL),
(11, 'Laser Tag Arena', NULL),
(12, 'Gym', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image_url`, `image`) VALUES
(6, 'This is a blog post title', 'Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum,', 'https://preview.themeforest.net/', 'public/images/5ea5169771590-blog1.jpg'),
(7, 'Tin tức Blog 2', 'Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum,', 'https://preview.themeforest.net/', 'public/images/5ea516b7a052a-blog2.jpg'),
(8, 'Tin Tức Blogs 3', 'Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum,', 'https://preview.themeforest.net/', 'public/images/5ea516df8016d-blog3.jpg'),
(9, 'Tin Tức Blogs 4', 'Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam vestibulum,', 'https://preview.themeforest.net/', 'public/images/5ea516f3d7cc3-blog4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `checkin_date` datetime DEFAULT NULL,
  `checkout_date` datetime DEFAULT NULL,
  `room_types` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `reply_by` int(11) DEFAULT NULL,
  `reply_message` varchar(255) DEFAULT NULL,
  `reply_users` int(11) DEFAULT NULL,
  `reply_date` datetime DEFAULT NULL,
  `checked_in` varchar(255) DEFAULT NULL,
  `check_in_date` datetime DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`id`, `customer_name`, `phone_number`, `email`, `checkin_date`, `checkout_date`, `room_types`, `status`, `reply_by`, `reply_message`, `reply_users`, `reply_date`, `checked_in`, `check_in_date`, `message`) VALUES
(54, 'Công nga', NULL, 'cong2672000@gmail.com', '2020-04-29 00:00:00', '2020-05-21 00:00:00', 5, 1, 1, 'oke', NULL, NULL, NULL, NULL, NULL),
(55, 'Công nga', NULL, 'cong2672000@gmail.com', '2020-04-30 00:00:00', '2020-05-13 00:00:00', 11, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Công nga', NULL, 'cong2672000@gmail.com', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 5, NULL, 1, NULL, NULL, NULL, NULL, NULL, '1245'),
(60, 'Công nga', NULL, 'cong2672000@gmail.com', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 5, NULL, NULL, NULL, 1, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `messages` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `reply_by` int(11) DEFAULT NULL,
  `reply_for` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `subject`, `messages`, `status`, `reply_by`, `reply_for`) VALUES
(20, 'Nguyễn Công Nga', NULL, 'cong2672000@gmail.com', 'Phản hồi phòng', 'Phản hồi về phòng', 1, 1, '1245'),
(21, 'ngancph09279', NULL, 'cong2672000@gmail.com', '123', '4124', 1, 1, '124555'),
(22, 'Nguyễn Công Nga', NULL, 'cong2672000@gmail.com', 'Thử xem được không', '14124', 1, 1, '5555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`) VALUES
(1, 'Thành viên', 1),
(2, 'Quản trị viên', 1),
(3, 'Supper admin', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_galleries`
--

CREATE TABLE `room_galleries` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_service`
--

CREATE TABLE `room_service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_service_xref`
--

CREATE TABLE `room_service_xref` (
  `room_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_types`
--

CREATE TABLE `room_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `about` varchar(255) DEFAULT NULL,
  `maximum_guest` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `room_types`
--

INSERT INTO `room_types` (`id`, `name`, `price`, `about`, `maximum_guest`, `status`, `feature_image`) VALUES
(5, 'Phòng 2 người A', 124, '', '2 Người', '1', 'public/images/5ea488d1409bf-room_big5.jpg'),
(6, 'Phòng 2 người B', 12, '', '2 Người', '1', 'public/images/5ea48851be7f3-room_big2.jpg'),
(7, 'Phòng 2 người C', 99, '', '2 Người', '1', 'public/images/5ea4885db28bb-room_big3.jpg'),
(9, 'Phòng 2 người D', 99, '', '2 Người', NULL, 'public/images/5ea48869c1ce3-room_big4.jpg'),
(11, 'Phòng 3 người A', 99, '', '3 người', '', 'public/images/5ea4889517141-room_small2.jpg'),
(13, 'Phòng 3 người B', 99, '', '3 người', '', 'public/images/5ea4888708222-room_small3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `slide_text` varchar(255) DEFAULT NULL,
  `slide_content` varchar(255) DEFAULT NULL,
  `readmore_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `img_url`, `slide_text`, `slide_content`, `readmore_url`) VALUES
(3, 'public/images/5ea5231c5b9ce-fullwidth1.jpg', 'Welcome to SixtyOne Hotel', 'Welcome to the SixtyOne Hotel php Template!. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue', 'index.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `status`, `avatar`, `phone_number`, `role_id`) VALUES
(1, 'cong2672000@gmail.com', 'Công nga', '$2y$10$BvvJmD83xLrnhh/wW0W3dOO9F/KlUDlW6o0z3dr12MzV2nPCduHBi', NULL, 'public/images/5e82d60c6b0d9-45779673_2280361015576966_7812005247487836160_n.jpg', 398815594, 3),
(4, 'cong@gmail.com', 'Nguyễn Công Nga', '$2y$10$BvvJmD83xLrnhh/wW0W3dOO9F/KlUDlW6o0z3dr12MzV2nPCduHBi', NULL, 'public/images/5e82d5ea7cc7f-45779673_2280361015576966_7812005247487836160_n.jpg', 0, 3),
(7, 'thienth@gmail.com', 'Thanh Thảo', '$2y$10$5bRZeq/6C9vzwzOOlZCztubqUJiEhI1Kjyu/eIwG/Clk5PW9bBIgq', NULL, 'public/images/5e87395228dc0-c583a4405f7aa424fd6b.jpg', 0, 2),
(8, 'neymar@gmail.com', 'Neymar', '$2y$10$kYORbX.TYEDQx.mHrmUnfeVPtkfYmFNAFwgcKeF17UDkTv8ReZFXS', NULL, 'public/images/5e873a1086538-c583a4405f7aa424fd6b.jpg', 0, 3),
(9, 'phongml@gmail.com', 'Nguyễn khắc phong', '$2y$10$n6a24nEocHaCwyFlaKvDGuVdNAn5Q/OosjS.PP9oTKyvwbXf3Bl6.', NULL, 'public/images/5e8807b558d3d-32191113_2065323283690593_2003253977570869248_n.jpg', 0, 2),
(10, 'nganc@gmail.com', 'Nguyễn Công Nga', '$2y$10$tZloSyShRFbGbCU5vH9JLO1KtkrgkF13W2HRfcVf8ZT5lceLuBzgm', NULL, 'public/images/5e946aa635624-45549827_2278271845785883_6587589880480530432_n.jpg', 398815594, 1),
(11, 'cong202002@gmail.com', 'Nguyễn Công Nga', '$2y$10$qz.UB4YLnF7TOZYgM/VKduKWpyQs/ObAmN0zTOflnI7i18KWE4uuC', NULL, NULL, 398815594, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `web_settings`
--

CREATE TABLE `web_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `map_url` varchar(255) DEFAULT NULL,
  `background_img` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `introduce_content` varchar(255) DEFAULT NULL,
  `intro_room` varchar(255) DEFAULT NULL,
  `intro_service` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `google_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `web_settings`
--

INSERT INTO `web_settings` (`id`, `name`, `status`, `logo`, `phone_number`, `address`, `map_url`, `background_img`, `email`, `introduce_content`, `intro_room`, `intro_service`, `facebook_url`, `google_url`, `twitter_url`) VALUES
(3, NULL, NULL, 'public/images/5e9ae32f0580e-logo.png', 398815594, 'Tây Tựu - Từ Liêm - Hà Nội', '', 'public/images/5e9ae2c188e59-fullwidth1.jpg', 'ngancph09279@gmail.com', 'Welcome to SixtyOne Hotel!', 'OUR FAMOUS ROOMS', NULL, 'https://www.facebook.com/ncnga2000', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `amenitles`
--
ALTER TABLE `amenitles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_by` (`reply_by`),
  ADD KEY `room_types` (`room_types`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_by` (`reply_by`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `room_galleries`
--
ALTER TABLE `room_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Chỉ mục cho bảng `room_service`
--
ALTER TABLE `room_service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `room_service_xref`
--
ALTER TABLE `room_service_xref`
  ADD PRIMARY KEY (`room_id`,`services_id`),
  ADD KEY `services_id` (`services_id`);

--
-- Chỉ mục cho bảng `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `amenitles`
--
ALTER TABLE `amenitles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`reply_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`room_types`) REFERENCES `room_types` (`id`);

--
-- Các ràng buộc cho bảng `room_galleries`
--
ALTER TABLE `room_galleries`
  ADD CONSTRAINT `room_galleries_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room_types` (`id`);

--
-- Các ràng buộc cho bảng `room_service_xref`
--
ALTER TABLE `room_service_xref`
  ADD CONSTRAINT `room_service_xref_ibfk_2` FOREIGN KEY (`services_id`) REFERENCES `room_service` (`id`),
  ADD CONSTRAINT `room_service_xref_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room_types` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
