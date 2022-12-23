-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2022-11-25 13:55:38
-- 服务器版本： 10.4.27-MariaDB
-- PHP 版本： 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `liliang`
--

-- --------------------------------------------------------

--
-- 表的结构 `dingdan`
--

CREATE TABLE `dingdan` (
  `id` int(11) NOT NULL,
  `spid` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 转存表中的数据 `dingdan`
--

INSERT INTO `dingdan` (`id`, `spid`, `num`, `user`, `time`, `flag`) VALUES
(24, 18, 1, 'admin', '2022-11-25 13:21:31', 1),
(25, 23, 1, 'admin', '2022-11-25 13:29:52', 0);

-- --------------------------------------------------------

--
-- 表的结构 `sp`
--

CREATE TABLE `sp` (
  `spid` int(10) UNSIGNED NOT NULL,
  `spname` varchar(100) NOT NULL,
  `spprice` float UNSIGNED NOT NULL,
  `spjianjie` varchar(400) DEFAULT NULL,
  `sptp` varchar(100) DEFAULT NULL,
  `haoping` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 转存表中的数据 `sp`
--

INSERT INTO `sp` (`spid`, `spname`, `spprice`, `spjianjie`, `sptp`, `haoping`) VALUES
(1, 'Redmi Note 12 5G', 1199, '三星 OLED 护眼屏｜骁龙 5G 芯｜5000mAh 电量  小米自营', 'sp1.webp', 40),
(18, 'Redmi Note 12 Pro', 1899, 'IMX766 防抖相机｜OLED 柔性直屏｜67W 闪充', 'sp2.webp', 30),
(19, 'Redmi Note 12 Pro+', 2599, '2亿超清防抖相机｜OLED 柔性直屏', 'sp3.webp', 20),
(20, 'Redmi Note 11 5G', 1099, '双卡双5G | X轴线性马达 | 5000mAh 大电量 | 33W快充 | 立体声双扬声器 | 天玑810处理器 | 90Hz变速高刷屏', 'sp4.webp', 30),
(21, 'Redmi K50', 2099, '天玑8100｜67W快充｜5500mAh大电池｜2K超清直屏｜像素加倍｜清晰加倍｜VC液冷散热', 'sp5.webp', 20),
(22, 'Redmi Note 11T Pro系列', 1569, '天玑8100｜144Hz高配LCD屏幕｜6400万像素｜VC液冷散热', 'sp6.webp', 40),
(23, 'Xiaomi 12S Pro', 5099, '骁龙8+ 旗舰处理器 | 徕卡光学镜头 | 徕卡原生双画质 | 大师镜头包 | 全场景疾速抓拍 | 5000万三主摄 | 2K AMOLED屏', 'sp7.webp', 40),
(24, 'Redmi K50 至尊版', 2799, '骁龙8+「狂暴调校」｜ 定制 1.5K 旗舰直屏 ｜ 120W神仙秒充丨1 亿像素光学防抖相机｜ 电竞级 VC 散热 | 屏下指纹', 'sp8.webp', 50);

-- --------------------------------------------------------

--
-- 表的结构 `usertable`
--

CREATE TABLE `usertable` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpwd` varchar(50) NOT NULL,
  `reuserpwd` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `money` float DEFAULT NULL,
  `jifen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 转存表中的数据 `usertable`
--

INSERT INTO `usertable` (`uid`, `username`, `userpwd`, `reuserpwd`, `flag`, `money`, `jifen`) VALUES
(3, 'admin', 'password', 'password', 1, 10000000000000, 2147483647);

--
-- 转储表的索引
--

--
-- 表的索引 `dingdan`
--
ALTER TABLE `dingdan`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`spid`);

--
-- 表的索引 `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`uid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `dingdan`
--
ALTER TABLE `dingdan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 使用表AUTO_INCREMENT `sp`
--
ALTER TABLE `sp`
  MODIFY `spid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用表AUTO_INCREMENT `usertable`
--
ALTER TABLE `usertable`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
