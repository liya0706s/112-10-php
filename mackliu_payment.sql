-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-11-03 09:12:27
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `payment`
--

-- --------------------------------------------------------

--
-- 資料表結構 `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `item` varchar(12) NOT NULL,
  `amount` float(8,4) UNSIGNED NOT NULL,
  `location` varchar(16) NOT NULL,
  `note` text NOT NULL,
  `payment` varchar(10) NOT NULL,
  `item_amount` int(10) NOT NULL,
  `invoice` varchar(10) DEFAULT NULL,
  `type_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `payments`
--

INSERT INTO `payments` (`id`, `date`, `item`, `amount`, `location`, `note`, `payment`, `item_amount`, `invoice`, `type_id`) VALUES
(1, '2023-11-03', '早餐', 50.0000, '東方美', '三明治\r\n奶茶', '2', 1, '', '1'),
(2, '2023-11-03', '午餐', 90.0000, '鐵路便當', '排骨飯', '2', 1, '', '1'),
(3, '2023-10-29', '小朋友衣服', 1600.0000, 'Lative', '外套、長袖', '5', 10, 'AB-1234567', '2'),
(4, '2023-10-28', '高鐵票', 2960.0000, '高鐵官網', '高雄一日遊', '3', 2, 'CD-1234567', '4'),
(5, '2023-10-20', '化妝品', 1000.0000, '屈臣氏', '口紅、粉餅', '6', 2, 'GD-8855103', '6'),
(6, '2023-11-01', '海洋公園', 3800.0000, '花蓮海洋公園', '門票', '2', 5, 'TY-5584215', '6'),
(7, '2023-10-27', '學費', 2980.0000, '學校平台', '小孩學費', '3', 1, 'TU-8542168', '5'),
(8, '2023-10-19', '晚餐', 2000.0000, '西堤', '慶祝', '5', 1, 'ER-9958421', '1'),
(9, '2023-10-18', '美髮', 3500.0000, '日式沙龍', '染髮、燙髮', '2', 1, 'OO-1234567', '6'),
(10, '2023-10-13', '鞋子', 2600.0000, 'ABC mart', '鞋子壞掉', '6', 1, 'GC-8854125', '4'),
(11, '2023-10-16', '水費', 300.0000, '自來水公司', '這個月水費', '2', 1, 'EE-8885462', '3');

-- --------------------------------------------------------

--
-- 資料表結構 `pays`
--

CREATE TABLE `pays` (
  `id` int(10) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `pays`
--

INSERT INTO `pays` (`id`, `name`) VALUES
(1, 'line pay'),
(2, '現金'),
(3, '中國信託信用卡'),
(4, '會員點數'),
(5, '匯豐信用卡'),
(6, '國泰信用卡');

-- --------------------------------------------------------

--
-- 資料表結構 `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, '食'),
(2, '衣'),
(3, '住'),
(4, '行'),
(5, '育'),
(6, '樂');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
