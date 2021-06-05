-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2021 lúc 02:27 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_thu_cung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2021_01_09_190427_create_tb_breed_product', 5),
(12, '2021_01_11_084407_create_tb_product', 7),
(22, '2014_10_12_000000_create_users_table', 8),
(23, '2014_10_12_100000_create_password_resets_table', 8),
(24, '2019_08_19_000000_create_failed_jobs_table', 8),
(25, '2021_01_07_040423_create_tb_admin_table', 8),
(26, '2021_01_08_192137_creat_tb_category_product', 8),
(27, '2021_01_10_175905_create_tb_breed_product', 8),
(28, '2021_01_13_085807_create_tb_product', 8),
(29, '2021_01_14_113604_create_tb_banner', 8),
(30, '2021_01_18_150415_create_tb_bill', 9),
(31, '2021_01_18_151721_create_tb__chi__tiet_bill', 9),
(32, '2021_01_19_095952_create_tb_danhgia', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '123456789', 'a', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_banner`
--

CREATE TABLE `tb_banner` (
  `banner_id` int(10) UNSIGNED NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_note` int(11) NOT NULL,
  `banner_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_banner`
--

INSERT INTO `tb_banner` (`banner_id`, `banner_image`, `banner_note`, `banner_status`, `created_at`, `updated_at`) VALUES
(4, '1610694932banner44.jpg', 1, 1, NULL, NULL),
(5, '1610694942banner51.jpg', 1, 1, NULL, NULL),
(6, '1610694950banner7.jpg', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_bill`
--

CREATE TABLE `tb_bill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_bill`
--

INSERT INTO `tb_bill` (`id`, `idND`, `NgayLap`, `NguoiNhan`, `sdt`, `DiaChi`, `TongTien`, `TrangThai`, `created_at`, `updated_at`) VALUES
(3, 4, '2021-01-19 04:12:34', 'LOng', '123', '123', '9,500,000.00', '1', NULL, NULL),
(4, 4, '2021-01-19 11:14:37', 'LOng', '123', '123', '9,500,000.00', '1', NULL, NULL),
(8, 1, '2021-01-19 11:36:13', '123', '123', '123', '12,000,000.00', '0', NULL, NULL),
(9, 1, '2021-01-19 14:06:08', 'LONG', '123', '123', '9,500,000.00', '0', NULL, NULL),
(10, 1, '2021-01-19 14:06:53', 'LONG', '123', '123', '17,500,000.00', '1', NULL, NULL),
(11, 1, '2021-01-19 18:24:24', 'LONG', '123', '123', '12,000,000.00', '1', NULL, NULL),
(12, 1, '2021-01-19 18:31:48', 'LONG', '123', '123', '26,000,000.00', '1', NULL, NULL),
(13, 4, '2021-01-19 20:00:46', 'LONG', '123', '123', '12,000,000.00', '1', NULL, NULL),
(14, 1, '2021-01-19 20:17:59', 'LONG', '123', '123', '22.00', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_breed_product`
--

CREATE TABLE `tb_breed_product` (
  `breed_id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_breed_product`
--

INSERT INTO `tb_breed_product` (`breed_id`, `category_id`, `breed_name`, `breed_description`, `breed_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'ALASKA', 'a', 1, NULL, NULL),
(2, '1', 'HUSKY', 'a', 1, NULL, NULL),
(3, '2', 'Mèo Lông Dài', 'a', 1, NULL, NULL),
(4, '2', 'Mèo Lông Ngắn', 'a', 1, NULL, NULL),
(5, '2', 'Mèo Xiêm', 'a', 1, NULL, NULL),
(6, '1', 'Corgi', 'a', 1, NULL, NULL),
(7, '1', 'Poodle', 'a', 1, NULL, NULL),
(8, '1', 'PUG', 'a', 1, NULL, NULL),
(9, '2', 'Mèo Munchkyn', 'a', 1, NULL, NULL),
(10, '2', 'Mèo Anh', 'a', 1, NULL, NULL),
(11, '1', '123', '123', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_category_product`
--

CREATE TABLE `tb_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_descript` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_category_product`
--

INSERT INTO `tb_category_product` (`category_id`, `category_name`, `category_descript`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Chó', 'Thú cưng', 1, NULL, NULL),
(2, 'Mèo', 'Thú cưng', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chi_tiet_bill`
--

CREATE TABLE `tb_chi_tiet_bill` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `Soluong` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_chi_tiet_bill`
--

INSERT INTO `tb_chi_tiet_bill` (`MaHD`, `MaSP`, `Soluong`, `DonGia`, `created_at`, `updated_at`) VALUES
(3, 23, 1, 9500000, NULL, NULL),
(3, 23, 1, 9500000, NULL, NULL),
(4, 23, 1, 9500000, NULL, NULL),
(4, 23, 1, 9500000, NULL, NULL),
(8, 7, 1, 12000000, NULL, NULL),
(9, 23, 1, 9500000, NULL, NULL),
(10, 23, 1, 9500000, NULL, NULL),
(10, 8, 1, 8000000, NULL, NULL),
(11, 7, 1, 12000000, NULL, NULL),
(12, 7, 1, 12000000, NULL, NULL),
(12, 21, 1, 14000000, NULL, NULL),
(13, 7, 1, 12000000, NULL, NULL),
(14, 26, 1, 22, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhgia`
--

CREATE TABLE `tb_danhgia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idND` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danhgia`
--

INSERT INTO `tb_danhgia` (`id`, `idND`, `MaSP`, `NgayLap`, `NoiDung`, `created_at`, `updated_at`) VALUES
(18, 1, 7, '2021-01-19 20:06:22', 'Chó ngon, biết nghe lời,... 10đ', NULL, NULL),
(19, 4, 7, '2021-01-19 20:24:55', 'Tuyệt vời <3', NULL, NULL),
(20, 1, 26, '2021-01-19 20:26:05', 'tuyệt vời <3', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image_main` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_xuatxu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_age` int(11) NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `breed_id`, `product_name`, `product_image_main`, `product_image1`, `product_image2`, `product_image3`, `product_gender`, `product_tiem`, `product_xuatxu`, `product_age`, `product_price`, `product_description`, `product_status`, `created_at`, `updated_at`) VALUES
(7, '1', '1', 'Alaska baby tìm chủ mới', 'Alaska baby tìm chủ mới_chính_48.png', 'Alaska baby tìm chủ mới_phụ1_48.png', 'Alaska baby tìm chủ mới_phụ2_1.png', 'Alaska baby tìm chủ mới_phụ3_92.png', '1', '2', 'sinh tại Việt Nam', 3, '12000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(8, '2', '10', 'Mèo Anh Lông Ngắn Golden', 'Mèo Anh Lông Ngắn Golden thuần chủng bố mẹ nhập_chính_59.png', 'Mèo Anh Lông Ngắn Golden_phụ1_51.png', 'Mèo Anh Lông Ngắn Golden_phụ2_50.png', 'Mèo Anh Lông Ngắn Golden_phụ3_86.png', '1', '2', 'sinh tại Việt Nam', 4, '8000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(9, '1', '2', 'Husky cái màu hồng phấn', 'Husky cái 2 tháng màu hồng phấn_chính_9.png', 'Husky cái màu hồng phấn_phụ1_5.png', 'Husky cái màu hồng phấn_phụ2_23.png', 'Husky cái màu hồng phấn_phụ3_40.png', '1', '1', 'sinh tại Việt Nam', 2, '11500000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(10, '2', '10', 'Mèo Anh lông ngắn - Màu xám xanh', 'Mèo Anh lông ngắn Đực - 1 tuổi - Màu xám xanh_chính_46.png', 'Mèo Anh lông ngắn - Màu xám xanh_phụ1_23.jpg', 'Mèo Anh lông ngắn - Màu xám xanh_phụ2_93.jpg', 'Mèo Anh lông ngắn - Màu xám xanh_phụ3_80.jpg', '1', '1', 'sinh tại Việt Nam', 1, '4300000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(11, '1', '7', 'Poodle tiny toy  Màusocola', 'Poodle tiny toy  Màusocola_chính_15.png', 'Poodle tiny toy  Màusocola_phụ1_33.png', 'Poodle tiny toy  Màusocola_phụ2_80.png', 'Poodle tiny toy  Màusocola_phụ3_98.png', '0', '2', 'Xuất sứ tại mỹ', 2, '15000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(12, '1', '1', 'Chó Alaska nâu đỏ – Las', 'Chó Alaska nâu đỏ – Las_chính_83.jpg', 'Chó Alaska nâu đỏ – Las_phụ1_59.jpg', 'Chó Alaska nâu đỏ – Las_phụ2_76.jpg', 'Chó Alaska nâu đỏ – Las_phụ3_0.jpg', '1', '2', 'sinh tại Việt Nam', 3, '11000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(13, '2', '9', 'chàng Munchkin Nấm 🍄', 'chàng Munchkin mang tên Nấm 🍄_chính_92.png', 'chàng Munchkin Nấm 🍄_phụ1_83.png', 'chàng Munchkin Nấm 🍄_phụ2_27.png', 'chàng Munchkin Nấm 🍄_phụ3_12.png', '1', '1', 'sinh tại Việt Nam', 2, '7000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(14, '2', '9', 'Mèo cái muchikin bicolor', 'Mèo cái muchikin bicolor mũi hồng_chính_16.png', 'Mèo cái muchikin bicolor_phụ1_22.png', 'Mèo cái muchikin bicolor_phụ2_41.png', 'Mèo cái muchikin bicolor_phụ3_3.png', '1', '2', 'nhập khẩu từ Anh', 3, '8000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(15, '1', '6', 'Bé Corgi Tricolour cái', 'Bé Corgi Tricolour cái, 2 tháng tuổi_chính_62.png', 'Bé Corgi Tricolour cái_phụ1_58.png', 'Bé Corgi Tricolour cái_phụ2_75.png', 'Bé Corgi Tricolour cái_phụ3_16.png', '1', '1', 'sinh tại Việt Nam', 2, '5000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(16, '1', '8', 'bé pug chân lùn siêu kute', 'Còn 1 bé pug chân lùn size nhỏ siêu kute_chính_37.png', 'bé pug chân lùn siêu kute_phụ1_98.png', 'bé pug chân lùn siêu kute_phụ2_45.png', 'bé pug chân lùn siêu kute_phụ3_92.png', '1', '1', 'sinh tại Việt Nam', 4, '1000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(17, '2', '10', 'Mèo anh lông ngắn goldden', 'Mèo anh lông ngắn goldden_chính_78.png', 'Mèo anh lông ngắn goldden_phụ1_63.png', 'Mèo anh lông ngắn goldden_phụ2_44.png', 'Mèo anh lông ngắn goldden_phụ3_63.png', '0', '2', 'nhập khẩu từ Anh', 3, '17000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(18, '2', '4', 'mèo tai chụp – Pin and Tin', 'Cặp đôi mèo tai chụp, chân lùn – Pin and Tin_chính_50.jpg', 'mèo tai chụp – Pin and Tin_phụ1_54.jpg', 'mèo tai chụp – Pin and Tin_phụ2_4.jpg', 'mèo tai chụp – Pin and Tin_phụ3_71.jpg', '1', '2', 'sinh tại Việt Nam', 3, '12000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(19, '2', '9', 'Mèo Munchkin uxedo – Misty', 'Mèo Munchkin chân ngắn Tuxedo – Misty_chính_74.jpeg', 'Mèo Munchkin uxedo – Misty_phụ1_74.jpeg', 'Mèo Munchkin uxedo – Misty_phụ2_84.jpeg', 'Mèo Munchkin uxedo – Misty_phụ3_68.jpeg', '1', '2', 'nhập khẩu Liên bang Nga.', 2, '15000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(20, '1', '6', 'Chó Corgi vàng trắng – Rakan', 'Chó Corgi màu vàng trắng – Rakan_chính_85.jpg', 'Chó Corgi vàng trắng – Rakan_phụ1_39.jpg', 'Chó Corgi vàng trắng – Rakan_phụ2_59.jpg', 'Chó Corgi vàng trắng – Rakan_phụ3_51.jpg', '1', '2', 'sinh tại Việt Nam', 2, '6000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(21, '2', '3', 'MÈO SCOTTISH FOLD', 'MÈO SCOTTISH FOLD TRẮNG – PENNY_chính_47.jpg', 'MÈO SCOTTISH FOLD_phụ1_25.jpg', 'MÈO SCOTTISH FOLD_phụ2_42.jpg', 'MÈO SCOTTISH FOLD_phụ3_67.jpg', '1', '2', 'Xuất sứ tại mỹ', 3, '14000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(22, '2', '10', 'Mèo Anh xám xanh – Simba', 'Mèo Anh lông dài xám xanh – Simba_chính_90.jpeg', 'Mèo Anh xám xanh – Simba_phụ1_22.jpeg', 'Mèo Anh xám xanh – Simba_phụ2_41.jpeg', 'Mèo Anh xám xanh – Simba_phụ3_40.jpeg', '1', '2', 'nhập khẩu từ Anh', 3, '19000000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(23, '1', '6', 'Chó Cogri fluffy vàng trắng', 'Chó Cogri fluffy 2 tháng tháng tuổi, vàng trắng_chính_2.png', 'Chó Cogri fluffy vàng trắng_phụ1_97.png', 'Chó Cogri fluffy vàng trắng_phụ2_32.png', 'Chó Cogri fluffy vàng trắng_phụ3_94.png', '1', '2', 'sinh tại Việt Nam', 2, '9500000', 'Khách hàng hoàn toàn an tâm khi mua thú cưng con thuần chủng của thương hiệu chúng tôi vì:\r\n\r\n📌 Hợp đồng mua bán rõ ràng.\r\n\r\n📌Bảo hành sức khỏe dài hạn.\r\n\r\n📌Tiêm phòng, tẩy giun đầy đủ.\r\n\r\n📌Tư vấn chăm sóc, nuôi chó Phốc sóc con trọn đời.\r\n\r\n📌Bác sĩ thú y của Phòng khám Dogily Clinic thăm khám tận nhà.\r\n\r\n📌Chó con có nguồn gốc rõ ràng. Được kiểm tra nghiêm ngặt về sức khỏe mới giao cho khách hàng.\r\n\r\nTrên hệ thống của PET&&FRIEND của chúng tôi luôn có sẵn hàng trăm chú chó Phốc sóc con thuần chủng, đầy đủ màu sắc, để khách hàng lựa chọn.', 1, NULL, NULL),
(25, '1', '2', 'KEY2', 'KEY2_chính_80.jpg', 'KEY2_phụ1_62.jpg', '', '', '1', '22', '22', 22, '444', 'abc', 1, NULL, NULL),
(26, '1', '1', 'aaaa', 'aaaa_chính_12.jpg', '', 'aaaa_phụ2_22.jpg', 'aaaa_phụ3_70.jpg', '1', '2', '222', 122, '22', '22', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Văn Long', 'admin123@gmail.com', NULL, '4297f44b13955235245b2497399d7a93', 1, NULL, NULL, NULL),
(2, 'Long Viet Le', 'long@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, NULL, NULL),
(4, 'user1', 'user1@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, NULL, NULL),
(5, 'Long', 'longnguyenckltk@gmail.com', NULL, 'f5bb0c8de146c67b44babbf4e6584cc0', 1, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Chỉ mục cho bảng `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_breed_product`
--
ALTER TABLE `tb_breed_product`
  ADD PRIMARY KEY (`breed_id`);

--
-- Chỉ mục cho bảng `tb_category_product`
--
ALTER TABLE `tb_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tb_danhgia`
--
ALTER TABLE `tb_danhgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `banner_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tb_bill`
--
ALTER TABLE `tb_bill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tb_breed_product`
--
ALTER TABLE `tb_breed_product`
  MODIFY `breed_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tb_category_product`
--
ALTER TABLE `tb_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tb_danhgia`
--
ALTER TABLE `tb_danhgia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
