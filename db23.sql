-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-02-20 09:35:24
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
-- 資料庫： `db23`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `story` text NOT NULL,
  `item` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about`
--

INSERT INTO `about` (`id`, `story`, `item`) VALUES
(1, '在一個充滿活力和熱情的小鎮裡，有一家名叫「W.burger」的漢堡店，它不僅僅是一家餐廳，更是一種生活方式的象徵。W.burger的故事始於一位年輕且充滿創意的廚師，他熱愛美味，對生活充滿激情。\r\n\r\n美味的起源\r\nW.burger的創始人，馬克·漢密爾頓，是一位對美食有著無窮熱愛的廚師。他在全球旅行中品嚐了各種文化的美食，但最終，他發現最令人難以忘懷的就是家鄉的味道。馬克回到家鄉，將他的熱情注入了每一個漢堡的製作過程中。\r\n\r\n新鮮與創新\r\nW.burger以新鮮和創新為品牌的核心價值。我們不僅注重使用當地新鮮食材，更堅持保持原始的味道和品質。每一個漢堡都是獨一無二的藝術品，代表著馬克對美味的堅持和對食材的尊重。\r\n\r\n社區的力量\r\nW.burger不僅僅是一家餐廳，更是社區的一部分。我們積極參與當地社區活動，支持本地農產品和當地企業。我們的員工不僅是廚師和服務員，更是社區的一份子，共同創造一個充滿活力的社區。\r\n\r\n擴張與分享\r\n隨著W.burger的成功，我們將這份熱情和美味帶給更多的地方。我們的擴張計劃不僅僅是為了開設更多分店，更是為了將W.burger的品味和品牌故事分享給更廣泛的社群。', '「W.burger」\r\n不僅僅是一頓美味的漢堡，\r\n更是一場對美味、創新和社區的熱情之旅。\r\n讓我們一同品味生活，分享美味，蓬勃生活！');

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`, `name`, `email`) VALUES
(3, 'admin', '1234', '', ''),
(4, '1234@gmail.com', '6666', '', ''),
(5, '0000', '0000', 'cat', 'dfhbfd@gmail.com'),
(6, '1234', '1234', 'bob', 'ghkmjhgk'),
(7, 'wu', '6666', 'wu', '1233');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(10) NOT NULL,
  `bottom` text DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '頁尾版權');

-- --------------------------------------------------------

--
-- 資料表結構 `drink`
--

CREATE TABLE `drink` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `price` int(10) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `drink`
--

INSERT INTO `drink` (`id`, `img`, `title`, `price`, `sh`) VALUES
(1, 'victor-rutka-4FujjkcI40g-unsplash.jpg', '楓糖OREO奶昔', 49, 1),
(2, 'pariwat-pannium-qdDQ6V7lV9Y-unsplash.jpg', '香草焦糖拿鐵', 49, 1),
(3, 'juliet-frias-WDgN0XclV_w-unsplash.jpg', '檸檬冰茶', 39, 1),
(4, 'kaffee-meister-BIeXZhg_7sw-unsplash.jpg', '冰紅茶', 29, 1),
(5, 'giovanna-gomes-IHKR_A_THW0-unsplash.jpg', '可樂', 29, 1),
(6, 'tetiana-shyshkina-4Lqjr8gu_bg-unsplash.jpg', '楓糖奶昔', 49, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `fried`
--

CREATE TABLE `fried` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `price` int(10) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `fried`
--

INSERT INTO `fried` (`id`, `img`, `title`, `price`, `sh`) VALUES
(1, '1.jpg', '金酥香脆薯片', 69, 1),
(2, '2.jpg', '香橙辣椒薯條', 59, 1),
(3, '3.jpg', '香辣炸雞嫩腿', 99, 1),
(4, '4.jpg', '海鮮脆皮春卷', 99, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `price` int(10) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `img`, `title`, `price`, `sh`) VALUES
(3, '27.jpg', '狂野蓮花堡', 149, 1),
(4, '26.jpg', '極地雙層狐堡', 159, 1),
(5, '20.jpg', '蔬食者的樂園堡', 129, 1),
(10, '24.jpg', '火山燒烤霸主堡', 169, 1),
(11, '25.jpg', '魔幻芝心漢堡', 149, 1),
(12, '29.jpg', '海洋王國特濃堡', 149, 1),
(13, '23.jpg', '楓糖招牌煙燻堡', 159, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `href` text NOT NULL,
  `sh` int(1) NOT NULL,
  `menu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`id`, `text`, `href`, `sh`, `menu_id`) VALUES
(3, '首頁', 'index.php', 1, 0),
(4, '關於我們', 'index.php?do=about', 1, 0),
(10, 'hjjhgf', '', 1, 8),
(16, '美味漢堡', 'index.php?do=images', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `mvim`
--

CREATE TABLE `mvim` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mvim`
--

INSERT INTO `mvim` (`id`, `img`, `sh`) VALUES
(6, '15.jpg', 1),
(7, '14.jpg', 1),
(8, '20.jpg', 1),
(9, '21.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `title`, `img`, `text`, `date`, `sh`) VALUES
(5, '堡樂狂歡月', 'sq-lim-3gOfEHiElKc-unsplash.jpg', '將於2月份推出「堡樂狂歡月」活動，為您帶來一場美味的漢堡盛宴！在這個狂歡月，我們特別準備了一系列驚喜活動，讓您品味到最道地的漢堡饗宴。', '2024-01-24', 1),
(6, '創意堡大挑戰', 'bilal-rana-7lMWcYsPRoA-unsplash.jpg', '推出一系列獨家創意堡，每款堡都有獨特的口味和驚喜搭配，讓您的味蕾感受前所未有的美味', '2024-01-03', 1),
(7, '堡客星期五：快樂漢堡夜', 'ali-olfian-IU0s7QYDscQ-unsplash.jpg', '勇敢者挑戰巨無霸堡，成功者將獲得免費漢堡一份，並登上「堡樂英雄榜」，成為本月榮耀之星。', '2024-01-01', 1),
(8, '美味探險：漢堡之旅', 'ali-olfian-XRWJud0wVmo-unsplash.jpg', '每週更新一張冒險地圖，引領您探索我們特製的漢堡，每一個點都是一次口味的冒險。', '2024-01-22', 1),
(9, '滋味融合：堡之祭典', 'thanos-pal-Djs02AtkOm4-unsplash.jpg', '每週我們都會推出一個限定的冒險套餐，包含當週最受歡迎的漢堡、飲品和小吃，價格優惠，絕對是您的美味之選。', '2024-01-05', 1),
(10, '漢堡狂歡派對', 'adrian-infernus-77eaFI4BV5o-unsplash.jpg', '在特別的夜晚，我們將店內打造成霓虹燈光的世界，伴隨音樂和舞台表演，為您獻上一場獨一無二的漢堡之夜。', '2024-01-21', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `no` text NOT NULL,
  `total` int(10) NOT NULL,
  `acc` text NOT NULL,
  `name` text NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` text NOT NULL,
  `tel` text NOT NULL,
  `addr` text NOT NULL,
  `cart` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`id`, `no`, `total`, `acc`, `name`, `orderdate`, `email`, `tel`, `addr`, `cart`) VALUES
(2, '20240219351324', 278, '0000', 'cat', '2024-02-19 07:25:17', 'dfhbfd@gmail.com', '095555555', 'rtuytduyt', 'a:2:{i:5;s:1:\"1\";i:3;s:1:\"1\";}'),
(3, '20240219633747', 785, '1234', 'bob', '2024-02-19 07:26:05', 'ghkmjhgk', '098888888', 'kjygdcujglk,jhglk,', 'a:2:{i:12;s:1:\"1\";i:13;s:1:\"4\";}'),
(4, '20240220642939', 467, '0000', 'cat', '2024-02-20 06:05:46', 'dfhbfd@gmail.com', '096666666', 'rtuytduyt', 'a:2:{i:10;s:1:\"1\";i:12;s:1:\"2\";}');

-- --------------------------------------------------------

--
-- 資料表結構 `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `titles`
--

INSERT INTO `titles` (`id`, `img`, `text`, `sh`) VALUES
(8, '13.jpg', '', 0),
(9, '14.jpg', '', 0),
(10, '12.jpg', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(10) NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 38);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `fried`
--
ALTER TABLE `fried`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mvim`
--
ALTER TABLE `mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `fried`
--
ALTER TABLE `fried`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mvim`
--
ALTER TABLE `mvim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
