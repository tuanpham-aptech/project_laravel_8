-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 01:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
--START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noithat`
--

-- --------------------------------------------------------

--
-- Table structure for table `articals`
--

CREATE TABLE `articals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ns_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ns_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ns_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ns_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ns_active` tinyint(4) NOT NULL DEFAULT 0,
  `ns_user_id` int(11) NOT NULL DEFAULT 0,
  `ns_description_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ns_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ns_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articals`
--

INSERT INTO `articals` (`id`, `ns_name`, `ns_slug`, `ns_description`, `ns_content`, `ns_active`, `ns_user_id`, `ns_description_seo`, `ns_title_seo`, `ns_image`, `created_at`, `updated_at`) VALUES
(1, 'thiết kế nội thất phòng khách', 'thiet-ke-noi-that-phong-khach', 'Thiết Kế Phòng Khách Không Gian Mở Hiện Đại, Đẹp Nhất 2022', 'Hiện nay, xu hướng thiết kế nội thất phòng khách với không gian mở đang được rất nhiều hộ gia đình lựa chọn, để mang lại một không gian đầy tính nghệ thuật và khẳng định gu thẩm mỹ của gia chủ. Hơn nữa, những mẫu thiết kế không gian mở đáp ứng nhu cầu tối đa hóa và tiện nghi hóa không gian chức năng của ngôi nhà. Dưới đây, KFA sẽ tổng hợp những mẫu thiết kế phòng khách không gian mở hiện đại, đẹp nhất 2022 để bạn tham khảo.', 1, 1, 'Thiết Kế Phòng Khách Không Gian Mở Hiện Đại, Đẹp Nhất 2022', 'Thiết Kế Phòng Khách Không Gian Mở Hiện Đại, Đẹp Nhất 2022', 'ban-an-gap.jpg', '2022-01-16 01:34:15', '2022-01-16 01:34:20'),
(2, 'Bàn ghế phòng ngủ', 'ban-ghe-phong-ngu', 'Bàn ghế phòng ngủ không cần quá đề cao tính thẩm mỹ như bàn trà phòng khách.', 'Bàn ghế phòng ngủ không cần quá đề cao tính thẩm mỹ như bàn trà phòng khách. Tuy nhiên, gia chủ cũng cần phải có kinh nghiệm lựa chọn loại bàn ghế cho phù hợp, cũng như cách bài trí ra sao để tối ưu diện tích phòng ngủ. Trong bài viết dưới đây, KFA sẽ gợi ý cho bạn 50+ bàn ghế phòng ngủ giá rẻ và HOT nhất 2022. Cùng theo dõi nhé.', 1, 1, 'Bàn ghế phòng ngủ không cần quá đề cao tính thẩm mỹ như bàn trà phòng khách.', 'Bàn ghế phòng ngủ', 'ban-ghe-phong-ngu-8.jpg', '2022-01-16 04:22:19', '2022-01-16 04:53:44'),
(3, 'Bàn ăn gấp thông minh', 'ban-an-gap-thong-minh', 'Bộ bàn ăn thông minh là vật dụng giúp tối ưu diện tích của phòng ăn, giúp ngôi nhà trở nên gọn gàng và ngăn nắp hơn.', 'Ưu điểm nổi bật của bộ bàn ăn này là khả năng chịu lực tốt cùng với thiết kế được tính toán cẩn trọng. Chất liệu được sử dụng chủ yếu là gỗ thân thiện với môi trường, không bị bay màu khi sử dụng và có khả năng chống thấm tốt, dễ dàng vệ sinh, di chuyển.', 1, 1, 'Bàn ăn gấp thông minh', 'Bàn ăn gấp thông minh', 'ban-an-thong-minh-1.png', '2022-01-16 05:18:11', '2022-01-16 05:18:11'),
(4, 'Thiết kế nội thất theo phong cách hiện đại', 'thiet-ke-noi-that-theo-phong-cach-hien-dai', 'Thiết kế nội thất theo phong cách hiện đại: Mang đến hơi thở hiện đại cho không gian sống nhờ các vật dụng đơn giản, tiện nghi và nhiều tiện ích.', 'Thiết kế nội thất phong cách cổ điển: Mặc dù xuất hiện từ lâu đời nhưng đây là phong cách vẫn luôn được ưa chuộng và không bao giờ lỗi thời. Nhiều gia chủ chọn không gian cổ điển vì sự yên tĩnh, sang trọng, quyền quý, đồng thời không kém phần thoải mái và bình yên.\r\nThiết kế nội thất phong cách mộc mạc, gần gũi với thiên nhiên: Có thể hiểu nôm na đây là xu hướng thiết kế nội thất dùng vật liệu từ thiên nhiên. Tận dụng nguồn nguyên liệu có sẵn nhằm tạo ra không gian mát mẻ, thoáng đãng và sạch sẽ.', 1, 1, 'Thiết kế nội thất theo phong cách hiện đại', 'Thiết kế nội thất theo phong cách hiện đại', 'nghe-thuat-tao-phong-khach.jpg', '2022-01-16 08:54:35', '2022-01-16 08:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_active` tinyint(4) NOT NULL DEFAULT 1,
  `c_total_product` int(11) NOT NULL DEFAULT 0,
  `c_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_active`, `c_total_product`, `c_title_seo`, `c_keyword_seo`, `created_at`, `updated_at`) VALUES
(1, 'Bàn gỗ', 'ban-go', 1, 0, 'Bàn giá rẻ', NULL, '2022-01-11 03:19:44', '2022-01-11 03:19:44'),
(3, 'Ghế đung đưa', 'ghe-dung-dua', 1, 0, 'Ghế đung đưa', NULL, '2022-01-11 03:22:24', '2022-01-11 08:50:35'),
(5, 'Đèn để bàn', 'den-de-ban', 1, 0, 'Đèn để bàn', NULL, '2022-01-11 10:55:44', '2022-01-11 10:55:44'),
(6, 'Ghế Văn Phòng', 'ghe-van-phong', 1, 0, 'Ghế Văn Phòng Chân Xoay', NULL, '2022-01-14 15:25:26', '2022-01-14 15:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `c_name`, `c_email`, `c_title`, `c_content`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'Phạm Minh Tuấn', 'tuan@uneti.edu.vn', 'Mong giảm giá nhiều hơn', 'Shop rất nhiệt tình mong đóng góp nhiều', 0, '2022-01-13 06:16:39', '2022-01-13 06:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_12_24_104933_create_categories_table', 1),
(7, '2022_01_11_091059_create_categories_table', 2),
(8, '2022_01_11_092438_create_categories_table', 3),
(9, '2022_01_11_105755_create_products_table', 4),
(10, '2022_01_12_152902_create_carts_table', 5),
(11, '2022_01_13_115030_create_contacts_table', 5),
(12, '2022_01_13_161124_create_orders_table', 6),
(13, '2022_01_13_162549_create_transactions_table', 6),
(14, '2022_01_13_211453_create_orders_table', 7),
(15, '2022_01_14_083233_alter_column_pro_pay_in_table_products', 8),
(16, '2022_01_15_054651_create_news_table', 9),
(17, '2022_01_15_220138_create_product_images_table', 10),
(18, '2022_01_16_081912_create_articals_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `or_transaction_id` int(11) NOT NULL DEFAULT 0,
  `or_product_id` int(11) NOT NULL DEFAULT 0,
  `or_qty` tinyint(4) NOT NULL DEFAULT 0,
  `or_price` int(11) NOT NULL DEFAULT 0,
  `or_sale` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 1, 2160000, 10, NULL, NULL),
(2, 4, 5, 1, 2160000, 10, NULL, NULL),
(3, 5, 6, 6, 21, 21, '2022-01-14 02:40:50', '2022-01-14 02:40:50'),
(4, 6, 4, 20, 690000, 0, '2022-01-14 03:01:17', '2022-01-14 03:01:17'),
(5, 7, 3, 1, 7200000, 40, '2022-01-14 03:28:19', '2022-01-14 03:28:19'),
(6, 8, 4, 9, 690000, 0, '2022-01-14 07:02:19', '2022-01-14 07:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_category_id` int(11) NOT NULL DEFAULT 0,
  `pro_price` int(32) NOT NULL DEFAULT 0,
  `pro_sale` int(11) NOT NULL DEFAULT 0,
  `pro_quantity` int(11) NOT NULL DEFAULT 0,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_title_seo` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_pay` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_sale`, `pro_quantity`, `pro_active`, `pro_hot`, `pro_description`, `pro_image`, `pro_keyword_seo`, `pro_title_seo`, `created_at`, `updated_at`, `pro_pay`) VALUES
(2, 'Đèn treo sang trọng Hubert', 'den-treo-sang-trong-hubert', 1, 1200000, 1, 2, 1, 0, 'Nệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc', 'pQ2mRNlGXeRVStiHsKUqh7r5yDE2JrHn8nh2caNu.jpg', NULL, 'Đèn treo sang trọng Hubert', '2022-01-11 07:26:56', '2022-01-12 03:27:35', 0),
(3, 'Ghế sofa giường kéo Roots', 'ghe-sofa-giuong-keo-roots', 3, 7200000, 40, 1, 1, 1, NULL, 'X9tprxwB6fw6NjGzJNtDGpuCG7Ii3baQoz662uPU.jpg', NULL, 'Ghế sofa giường kéo Roots', '2022-01-11 10:45:19', '2022-01-12 07:33:51', 0),
(4, 'Đèn để bàn gọn nhẹ Petite', 'den-de-ban-gon-nhe-petite', 5, 690000, 0, 20, 1, 1, NULL, 'hAiW9ZlSqS5Zy36SzPBKUEcjaYQqHs78iATBSWsq.jpg', NULL, 'Đèn để bàn gọn nhẹ Petite', '2022-01-11 10:56:52', '2022-01-15 03:26:48', 3),
(5, 'Ghế tựa lưng phòng khách S004', 'ghe-tua-lung-phong-khach-s004', 3, 2400000, 10, 0, 1, 1, 'Khung sườn: gỗ dầu (Việt Nam) đã xử lý mối mọt theo tiêu chuẩn xuất khẩu Châu Âu\r\nNệm mút: nhập khẩu từ Malaysia\r\nChỉ may: nhập khẩu từ Anh Quốc\r\nDa/ PVC/ Vải: Da Bò nhập khẩu từ Ý/ PVC nhập khẩu từ Thái Lan/ Vải nhập khẩu từ Hàn Quốc', 'sCFubaF9m5uZj2YmfpWu4RG61Prlo3oJoikRW5mp.jpg', NULL, 'Ghế tựa lưng phòng khách S004', '2022-01-11 11:00:18', '2022-01-15 03:26:02', 1),
(6, 'Ghế gỗ bập bênh Iconic', 'ghe-go-bap-benh-iconic', 3, 700000, 21, 3, 1, 1, 'Tránh để đồ quá nóng hoặc quá lạnh trực tiếp lên bề mặt gỗ, hãy dùng miếng lót bên dưới', 'xsT5EwqJZlyGD64MF0vKSOoMz288w9eXfQNHDtZh.jpg', NULL, 'Ghế gỗ bập bênh Iconic', '2022-01-11 18:25:42', '2022-01-11 18:25:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tr_user_id` int(11) NOT NULL DEFAULT 0,
  `tr_total` int(11) NOT NULL DEFAULT 0,
  `tr_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_total`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `created_at`, `updated_at`) VALUES
(1, 4, 21600000, 'Hoa quả tươi', 'Lục Yên Yên Bái', '0379679502', 1, NULL, NULL),
(2, 4, 21600000, 'Hoa quả tươi', 'Lục Yên Yên Bái', '0379679502', 0, NULL, NULL),
(3, 4, 2160000, 'Giao hàng giờ hành chính', 'Lục Yên Yên Bái', '0379679502', 0, NULL, NULL),
(4, 4, 2160000, 'Giao hàng giờ hành chính', 'Lục Yên Yên Bái', '0379679502', 1, NULL, '2022-01-15 03:26:02'),
(5, 4, 3318000, 'Giao đúng mẫu đã chọn', 'Thanh Hà Hải Dương', '0379679502', 0, NULL, NULL),
(6, 4, 13800000, 'Giao hàng tại nhà', 'Ngọc lạc Hưng yên', '0123456789', 1, NULL, '2022-01-14 16:26:19'),
(7, 5, 4320000, 'Chị iu cửa hàng', '179 Vĩnh Hưng Hoàng Mai Hà Nội', '0913217456', 0, NULL, NULL),
(8, 5, 6210000, 'Giao hàng gửi tiền nhé shop', 'Vĩnh Hưng Hà Nội', '0912217009', 1, NULL, '2022-01-14 16:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1:Admin; 2:Member',
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Phạm Văn Tuân', 'tuan.pv.782@aptechlearning.edu.vn', NULL, '$2y$10$PaRe5mQhFpmYVAKXRkx6l.bJg3sO/owVZr4wvr/FKVXRl9K4yMpyG', 1, NULL, NULL, NULL, '2022-01-11 02:05:13', '2022-01-12 03:18:13'),
(2, 'Nguyễn Thị Tỉnh Thái Bình', 'tinh1502@gmail.com', NULL, '$2y$10$vUUiUCMtw.PZtpRwApYete9sKiRD12N1GIzG9gAutEtd92tQluXGG', 2, NULL, NULL, NULL, '2022-01-12 01:51:46', '2022-01-12 03:04:53'),
(4, 'Minh Phương', 'phuong.at.hd@uneti.edu.vn', NULL, '$2y$10$XaF4uBKnooxJrFbTjZSPt.9AZTgHVNMy1yFYo3ZX3O6PL57u9.eUq', 0, NULL, NULL, NULL, '2022-01-12 03:17:15', '2022-01-13 02:39:10'),
(5, 'Huy Khang', 'khang@uneti.edu.vn', NULL, '$2y$10$J0zZUU1DdgNebV8.wLb8WOOOsGcPUO745s/dHdWRvhLGZRuqsQ/sm', 0, NULL, NULL, NULL, '2022-01-14 03:18:19', '2022-01-16 00:54:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articals`
--
ALTER TABLE `articals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articals_ns_name_unique` (`ns_name`),
  ADD KEY `articals_ns_slug_index` (`ns_slug`),
  ADD KEY `articals_ns_active_index` (`ns_active`),
  ADD KEY `articals_ns_user_id_index` (`ns_user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`),
  ADD KEY `categories_c_slug_index` (`c_slug`),
  ADD KEY `categories_c_active_index` (`c_active`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_or_transaction_id_index` (`or_transaction_id`),
  ADD KEY `orders_or_product_id_index` (`or_product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pro_name` (`pro_name`),
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_category_id_index` (`pro_category_id`),
  ADD KEY `products_pro_active_index` (`pro_active`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_user_id_index` (`tr_user_id`),
  ADD KEY `transactions_tr_status_index` (`tr_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articals`
--
ALTER TABLE `articals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
