-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2023 lúc 04:12 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Laptop Dell'),
(3, 'Lenovo Thinkpad'),
(4, 'Laptop HP'),
(6, 'Laptop Samsung'),
(7, 'Surface'),
(8, 'Laptop đồ họa'),
(9, 'Laptop Gaming'),
(10, 'Linh kiện máy tính'),
(11, 'Laptop LG'),
(12, 'Laptop Asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `cus_id` bigint(20) UNSIGNED NOT NULL,
  `cus_name` text DEFAULT NULL,
  `email` text NOT NULL,
  `password` text DEFAULT NULL,
  `cus_phone` text DEFAULT NULL,
  `cus_address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `email`, `password`, `cus_phone`, `cus_address`) VALUES
(1, 'Thaddeus Mueller 2', 'edgardo.upton@gibson.com', '$2y$10$6ESCl3dL23uj1luuIQqOUe4x1uW7B7R3Or1biS/QC3HMJkj22zXyW', '123123', '667 Krajcik Land Apt. 979New Carmenburgh, RI 51267-6837'),
(2, 'Hadley Bergstrom PhD', 'cremin.malachi@goyette.com', '$2y$10$pTyUlqB8pnjcZ0cYO/hQaOXdS6nmUMHZRRvCxJMARIo3EcFNmd85e', '248.603.5332', '438 Tyler Dam\nSouth Flossiemouth, CT 66188'),
(3, 'Santa Braun', 'paucek.marcelo@gmail.com', '$2y$10$tCmtIR8OtF6zj/nDpkiVsOz.qPenmq9PjSa4v/QTOCZkX1DAjK7y.', '925.301.4813', '3677 Jacobs Pines\nEast Forrest, MI 84538'),
(4, 'Lennie Blanda', 'watsica.chanelle@spencer.com', '$2y$10$m/aqh3WftSt9XWucI7IdEunesghJk8qyvoUavadgbyo66E5fm3onG', '(614) 760-7887', '7783 Mina Ramp\nBogisichborough, SC 64562'),
(5, 'Felicita Mueller', 'rosendo.reichel@senger.com', '$2y$10$KjBKXZyOkLM5bJuMbmjqFecNP2.mImyjh6RnylOXIevmqWN5iY8BK', '424.932.3226', '1661 Grace Coves Apt. 034\nMarcfort, PA 17057'),
(15, 'Ta Van Long', 'longvan1173@gmail.com', '$2y$10$m2qLqAIoZLUJqD6PNjf60.W0NnDPTRSdovTnIdfpWqiQ1.cjm6HYO', '0384723250', 'Hà Nội'),
(16, 'Nguyen Van A', 'longlong37@gmail.com', '$2y$10$d6abQbWEbwFYEP/csCO5Zuv8iy8oBvNklPS1Kjy3xyLDqCUSGrTCe', '0384723250', 'Ngọc Thụy, Long Biên, Hà Nội'),
(19, 'Nhu Son', 'test1111@gmail.com', '$2y$10$d6abQbWEbwFYEP/csCO5Zuv8iy8oBvNklPS1Kjy3xyLDqCUSGrTCe', '0384723250', 'Ngọc Thụy, Long Biên, Hà Nội'),
(20, 'Luc Van Tien', 'luczanthien@gmail.com', '$2y$10$LLSZeH6oFW6b6l0a/aOQauvmca3LqQ45OICqPXdsEPqo5VO4FRj86', '0384723250', 'Ha Noi, Viet Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `code` text NOT NULL,
  `order_date` text NOT NULL,
  `status` text NOT NULL,
  `total_price` float NOT NULL,
  `staff_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cus_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`order_id`, `code`, `order_date`, `status`, `total_price`, `staff_id`, `cus_id`) VALUES
(6, 'DH1698419351', '2023-10-27 15:09:11', 'Đã hủy', 115000000, 2, 15),
(7, 'DH1698419860', '2023-10-27 15:17:40', 'Chờ lấy hàng', 45000000, 2, 16),
(10, 'DH1698471726', '2023-10-28 05:42:06', 'Đang giao', 40000000, NULL, 19),
(11, 'DH1698471998', '2023-10-28 05:46:38', 'Đã giao', 25000000, NULL, 1),
(12, 'DH1698472058', '2023-10-28 05:47:38', 'Đã hủy', 20000000, NULL, 20),
(13, 'DH1698503433', '2023-10-28 14:30:33', 'Đã giao', 25000000, 2, 15),
(14, 'DH1698509625', '2023-10-28 16:13:45', 'Chờ xác nhận', 25000000, NULL, 16),
(15, 'DH1698590436', '2023-10-29 14:40:36', 'Đã hủy', 69000000, 2, 15),
(16, 'DH1698590473', '2023-10-29 14:41:13', 'Chờ lấy hàng', 1400000, 2, 15),
(17, 'DH1698590592', '2023-10-29 14:43:12', 'Đã giao', 70900000, 2, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `quantity` text NOT NULL,
  `price` float NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `version_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`quantity`, `price`, `order_id`, `version_id`) VALUES
('3', 75000000, 6, 2),
('2', 40000000, 6, 1),
('1', 25000000, 7, 2),
('1', 20000000, 7, 1),
('2', 40000000, 10, 1),
('1', 25000000, 11, 2),
('1', 20000000, 12, 1),
('1', 25000000, 13, 2),
('1', 25000000, 14, 2),
('1', 21000000, 15, 15),
('1', 48000000, 15, 6),
('1', 900000, 16, 13),
('1', 500000, 16, 14),
('2', 70000000, 17, 11),
('1', 900000, 17, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `prd_id` bigint(20) UNSIGNED NOT NULL,
  `prd_name` text NOT NULL,
  `prd_images` text NOT NULL,
  `sub_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`prd_id`, `prd_name`, `prd_images`, `sub_id`) VALUES
(4, 'Dell latitude 7400 2 in 1', 'latitude4.jfif,latitude3.jfif,latitude2.jfif,latitude1.jfif,latitude.jfif', 1),
(5, 'Dell latitude 7400 2 in 1', 'latitude4.jfif,latitude3.jfif,latitude2.jfif,latitude1.jfif,latitude.jfif', 1),
(9, 'Thinkpad X1 Carbon Gen 11', 'precision4.jpg,precision3.jpg,precision2.jpg,precision1.jpg,precision.jpg', 7),
(10, 'Thinkpad X1 Carbon Gen 11', 'precision4.jpg,precision3.jpg,precision2.jpg,precision1.jpg,precision.jpg', 7),
(11, 'HP EliteBook x360 1020 G2', 'elite4.jfif,elite3.jfif,elite2.jfif,elite1.jfif,elite.jfif', 12),
(13, 'Samsung Galaxy book 3 Pro 360', 'galaxy4.png,galaxy3.png,galaxy2.png,galaxy1.png,galaxy.png', 26),
(14, 'Samsung Galaxy book 3 Pro 360', 'galaxy4.png,galaxy3.png,galaxy2.png,galaxy1.png,galaxy.png', 26),
(15, 'Ram Laptop 8GB bus 1600MHz DDR3L', 'ramelite.jpg', 24),
(16, 'RAM Laptop Kingmax', 'ramelite3.jpg,ramelite2.jpg,ramelite1.jpg,ramelite.jpg', 24),
(17, 'RAM Laptop Kingmax', 'ramelite3.jpg,ramelite2.jpg,ramelite1.jpg,ramelite.jpg', 24),
(18, 'Laptop Asus Gaming TUF 706HCB', 'tuf.png', 20),
(20, 'Surface Pro 9 5G LTE SQ3', 'surface3.png,surface2.png,surface1.png,surface.png', 16),
(21, 'Surface Pro 9 5G LTE SQ3', 'surface3.png,surface2.png,surface1.png,surface.png', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `staff_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `staff_phone` text NOT NULL,
  `staff_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `email`, `password`, `staff_phone`, `staff_address`) VALUES
(2, 'Augustus Ferry', 'jerrold99@hotmail.com', '$2y$10$hr2uKNTzhRGPF4jo/3qgvuGzfA6syW/0Z4Jym7vwf8ZCsKK2bEFZ2', '0384723250', '98096 Dewayne Forks Apt. 192East Maria, SD 25721-1841'),
(3, 'Adah Wiegand', 'douglas82@gmail.com', '$2y$10$bteolk6qlwTuJpNGeK607OKiuQ7JOw1cIg7.x6rt0Yh5pOFJ5Job6', '(651) 497-1196', '8012 Hannah Trail\nFosterfort, MN 46816-5698'),
(4, 'Gennaro Senger PhD', 'gleason.lavada@connelly.org', '$2y$10$w0Rhc3bJ/x2E4WV91KO8CuA.G0opJizKEh8CNDLy35lgtCNQw3/WC', '+1.539.930.0205', '778 Carlos Rest\nWest Julia, WV 98811-7611'),
(5, 'Dr. Nola Dickens', 'mabshire@yahoo.com', '$2y$10$HhIn.M.hplHpgNxqxme7X.M9.NNxZd7c4aDkfSrfMuqPRQsbaLF.6', '+14752866671', '8729 Kuhic Mountain Suite 681\nEast Javonport, TN 06018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_id` bigint(20) UNSIGNED NOT NULL,
  `sub_name` text NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subcategory`
--

INSERT INTO `subcategory` (`sub_id`, `sub_name`, `cat_id`) VALUES
(1, 'Dell Latitude', 1),
(4, 'Dell XPS', 1),
(5, 'Dell Vostro', 1),
(6, 'Dell inspiron', 1),
(7, 'Thinkpad X1 series', 3),
(8, 'Thinkpad X series', 3),
(9, 'Thinkpad E series', 3),
(10, 'Thinkpad T series', 3),
(11, 'Thinkpad Workstation P series', 3),
(12, 'HP ELITEBOOK', 4),
(13, 'HP ENVY', 4),
(14, 'HP PROBOOK', 4),
(16, 'Surface Pro', 7),
(17, 'Surface Laptop', 7),
(18, 'Surface Go', 7),
(19, 'Laptop Dell Precision', 8),
(20, 'Laptop Asus Gaming', 9),
(21, 'Laptop Dell Gaming', 9),
(22, 'Laptop Lenovo Gaming', 9),
(23, 'Laptop HP Gaming', 9),
(24, 'Ram Laptop', 10),
(25, 'Ổ Cứng Laptop', 10),
(26, 'Galaxy Book', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `version`
--

CREATE TABLE `version` (
  `version_id` bigint(20) UNSIGNED NOT NULL,
  `version_name` text NOT NULL,
  `prd_id` bigint(20) UNSIGNED NOT NULL,
  `version_details` text NOT NULL,
  `old_price` float NOT NULL,
  `current_price` float NOT NULL,
  `version_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `version`
--

INSERT INTO `version` (`version_id`, `version_name`, `prd_id`, `version_details`, `old_price`, `current_price`, `version_status`) VALUES
(1, 'Core i7 13650HX, RAM 16GB, SSD 1TB, NVIDIA GeForce RTX 4050 6GB, Màn 15.6’’ FHD', 4, 'RAM: 16GB DDR5 4800MHz, Max 32GB SDRAM; Ổ cứng: 512GB, M.2, PCIe NVMe, SSD; Màn hình: 15.6\" FHD (1920x1080) 165Hz, 3ms, sRGB-100%, ComfortViewPlus, NVIDIA G-SYNC+DDS Display; CPU: Core i7 1360P (12 cores, 16 threads, 3.70 GHz - 5.00 GHz, 18MB Cache); VGA: Intel Iris Xe Graphics; Pin: 52 WHr lithium-polymer; Tình trạng: Mới 100%, Nhập khẩu', 30000000, 20000000, 'Còn hàng'),
(2, 'Core i7 1360P, RAM 16GB, SSD 512GB, Intel Iris Xe Graphics, Màn 14\'\' 2.2K, LTE 4G', 5, 'RAM: 16GB DDR5 4800MHz, Max 32GB SDRAM; Ổ cứng: SSD 512GB, M.2 2280, Gen 4 PCIe x4 NVMe; Màn hình: 15.6\" FHD (1920x1080) 165Hz, 3ms, sRGB-100%, ComfortViewPlus, NVIDIA G-SYNC+DDS Display; CPU: Core i7 13650HX (14 cores, 20 threads, up to 4.90 GHz Turbo Boost Max, 24 MB Cache); VGA: NVIDIA GeForce RTX 4050 6GB; Pin: 4-cell, 60 WHr Lithium-ion; Tình trạng: Mới 100%, Nguyên Seal, Nhập khẩu', 40000000, 25000000, 'Còn hàng'),
(6, 'Core i7 1360P, RAM 32GB, SSD 512GB, Intel Iris Xe Graphics, Màn 14\'\' 2.2K, LTE 4G', 9, 'RAM: 32GB LPDDR5 6400MHz Onboard; Ổ cứng: SSD 512GB, M.2 2280, Gen 4 PCIe x4 NVMe; Màn hình: 14\" 2.2K (2240 x 1400) IPS, 300 nits, 100% sRGB, antiglare; CPU: Core i7 1360P (12 cores, 16 threads, 3.70 GHz - 5.00 GHz, 18MB Cache); VGA: Intel Iris Xe Graphics; Pin: 57 Whr; Tình trạng: Mới 100%, Nguyên Seal, Nhập khẩu', 59000000, 48000000, 'Còn hàng'),
(7, 'Core i7 1360P, RAM 32GB, SSD 1TB, Intel Iris Xe Graphics, Màn 14\'\' 2.8K OLED, LTE 4G', 10, 'RAM: 32GB LPDDR5 6400MHz Onboard; Ổ cứng: SSD 1TB, M.2 2280, Gen 4 PCIe NVMe; Màn hình: 14\" 2.8K OLED (2880 x 1800) 400 nits, 100% DCI P3, Eyesafe®certified low blue light, antiglare, antireflective, antismudge; CPU: Core i7 1360P (12 cores, 16 threads, 3.70 GHz - 5.00 GHz, 18MB Cache); VGA: Intel Iris Xe Graphics; Pin: 57 WHr; Tình trạng: Mới 100%, Nguyên Seal, Nhập khẩu', 63000000, 52000000, 'Còn hàng'),
(8, 'Core i5-7300U, RAM 8GB, SSD 256GB, VGA Intel HD Graphics 620, 12,5 inch FHD Touch', 11, 'RAM: 8GB DDR4 Bus 2133MHz; Ổ cứng: 256GB, M.2, PCIe NVMe, SSD; Màn hình: 12.5\" FHD (1920x1080) IPS eDP ultra-slim LED-backlit Touch with Corning Gorilla Glass 4; CPU: Intel Core i5-7300U Processor ( 2 cores, 4 threads, 2.6 GHz up to 3.5 GHz, 3MB Cache); VGA: Intel HD Graphics 620; Pin: 4 Cells; Tình trạng: Like new 99%, Nhập khẩu', 16800000, 11500000, 'Còn hàng'),
(10, 'Core i7 1360P, RAM 16GB, SSD 512GB, Intel Iris Graphics, Màn 16’’ 3K AMOLED', 13, 'RAM: 16GB DDR5 6400MHz onboard; Ổ cứng: 512GB, M.2, PCIe NVMe, SSD; Màn hình: 16\" Dynamic AMOLED 2X, 3K (2880 x 1800), 16:10, 120Hz, 120% DCI-P3; CPU: Core i7 1360P (12 cores, 16 threads, 3.70 GHz - 5.00 GHz, 18MB Cache); VGA: Intel Iris Xe Graphics; Pin: 73Wh; Tình trạng: Mới 100%, Nguyên Seal, Nhập khẩu', 50000000, 41000000, 'Còn hàng'),
(11, 'Core i7 1360P, RAM 16GB, SSD 512GB, Intel Iris Xe Graphics, Màn 14\'\' 3K AMOLED', 14, 'RAM: 16GB LPDDR5 5200MHz; Ổ cứng: 512GB, M.2, PCIe NVMe, SSD; Màn hình: 14\" 3K (2880 x 1800 pixels) AMOLED, 120Hz, 16:10, HDR, Non-touch; CPU: Core i7 1360P (12 cores, 16 threads, 3.70 GHz - 5.00 GHz, 18MB Cache); VGA: Intel Iris Xe Graphics; Pin: 63 Whr; Tình trạng: Mới 100%, Nhập khẩu', 43000000, 35000000, 'Còn hàng'),
(12, 'mới', 15, 'Dung lượng: 8GB; Loại LK: DDR3L; Tốc độ: 1600MHz', 1200000, 1050000, 'Còn hàng'),
(13, '16GB Kingmax 2666MHz', 16, 'Dung lượng: 16GB; Loại LK: DDR4; Tốc độ: 2666MHz', 1000000, 900000, 'Còn hàng'),
(14, '8GB Kingmax 2666MHz', 17, 'Dung lượng: 8GB; Loại LK: DDR4; Tốc độ: 2666MHz', 800000, 500000, 'Còn hàng'),
(15, 'Core i7 13650HX, RAM 16GB, SSD 1TB, NVIDIA GeForce RTX 4050 6GB, Màn 15.6’’ FHD', 18, 'RAM: 16GB DDR5 4800MHz, Max 32GB SDRAM; Ổ cứng: 1TB SSD M.2 2280 PCIe; Màn hình: 15.6\" FHD (1920x1080) 165Hz, 3ms, sRGB-100%, ComfortViewPlus, NVIDIA G-SYNC+DDS Display; CPU: Core i7 13650HX (14 cores, 20 threads, up to 4.90 GHz Turbo Boost Max, 24 MB Cache); VGA: NVIDIA GeForce RTX 4050 6GB; Pin: 6 Cell 86WHrs; Tình trạng: Mới 100%, Nguyên Seal, Nhập khẩu', 30000000, 21000000, 'Hết hàng'),
(17, 'Core i5 1235U, RAM 8GB, SSD 128GB, Intel Iris Xe Graphics, Màn 13’’ 267 PPI 120Hz', 20, 'RAM: 8GB LPDDR4x 4267MHz; Ổ cứng: 128GB, M.2, PCIe NVMe, SSD; Màn hình: 13\" PixelSense™ Flow Display 2880 X 1920 (267 PPI), Touch, 120Hz, 3:2; CPU: Core i5 1235U (10 Cores, 12 Threads, 1.30 GHz - 4.40 GHz, 12MB Cache); VGA: Intel Iris Xe Graphics; Pin: Up to 19 hours of typical device usage; Tình trạng: Mới 100%, Nhập khẩu, Chưa bao gồm phím', 52000000, 28000000, 'Còn hàng'),
(18, 'Core i5 1235U, RAM 8GB, SSD 256GB, Intel Iris Xe Graphics, Màn 13’’ 267 PPI 120Hz', 21, 'RAM: 8GB LPDDR4x 4267MHz; Ổ cứng: 256GB, M.2, PCIe NVMe, SSD; Màn hình: 13\" PixelSense™ Flow Display 2880 X 1920 (267 PPI), Touch, 120Hz, 3:2; CPU: Core i5 1235U (10 Cores, 12 Threads, 1.30 GHz - 4.40 GHz, 12MB Cache); VGA: Intel Iris Xe Graphics; Pin: Up to 19 hours of typical device usage; Tình trạng: Mới 100%, Nhập khẩu, Chưa bao gồm phím', 52000000, 33000000, 'Còn hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_staff_id_foreign` (`staff_id`),
  ADD KEY `order_cus_id_foreign` (`cus_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `order_detail_order_id_foreign` (`order_id`),
  ADD KEY `order_detail_version_id_foreign` (`version_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `product_sub_id_foreign` (`sub_id`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Chỉ mục cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `subcategory_cat_id_foreign` (`cat_id`);

--
-- Chỉ mục cho bảng `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`version_id`),
  ADD KEY `version_prd_id_foreign` (`prd_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `version`
--
ALTER TABLE `version`
  MODIFY `version_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_cus_id_foreign` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`),
  ADD CONSTRAINT `order_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `order_detail_version_id_foreign` FOREIGN KEY (`version_id`) REFERENCES `version` (`version_id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_sub_id_foreign` FOREIGN KEY (`sub_id`) REFERENCES `subcategory` (`sub_id`);

--
-- Các ràng buộc cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Các ràng buộc cho bảng `version`
--
ALTER TABLE `version`
  ADD CONSTRAINT `version_prd_id_foreign` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
