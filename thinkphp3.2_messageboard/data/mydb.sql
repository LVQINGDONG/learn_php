-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 07 月 10 日 06:34
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- 表的结构 `info_admin`
--

CREATE TABLE IF NOT EXISTS `info_admin` (
  `aid` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) NOT NULL,
  `apwd` char(32) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `info_admin`
--

INSERT INTO `info_admin` (`aid`, `aname`, `apwd`) VALUES
(1, 'admin', '12345'),
(2, 'haha', '000000'),
(3, '李白', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `info_class`
--

CREATE TABLE IF NOT EXISTS `info_class` (
  `class_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `class_name` varchar(50) NOT NULL,
  `major_id` int(5) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `info_class`
--

INSERT INTO `info_class` (`class_id`, `class_name`, `major_id`) VALUES
(1, '16软件技术一班', 1),
(2, '16大数据一班', 3),
(3, '16信息技术一班', 4),
(4, '16移动开发一班', 5),
(5, '17网页设计一班', 6),
(6, '15计算机网络二班', 7),
(7, '17计算机应用一班', 8),
(8, '16计算机应用一班', 8),
(9, '16软件技术二班', 1);

-- --------------------------------------------------------

--
-- 表的结构 `info_major`
--

CREATE TABLE IF NOT EXISTS `info_major` (
  `major_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `major_name` varchar(20) NOT NULL,
  PRIMARY KEY (`major_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `info_major`
--

INSERT INTO `info_major` (`major_id`, `major_name`) VALUES
(1, '软件技术'),
(2, '计算机科学'),
(3, '数据库应用'),
(4, '信息技术'),
(5, '移动应用开发'),
(6, '网站设计'),
(7, '计算机网络'),
(8, '计算机应用');

-- --------------------------------------------------------

--
-- 表的结构 `info_message`
--

CREATE TABLE IF NOT EXISTS `info_message` (
  `m_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `m_title` varchar(50) NOT NULL,
  `m_content` text NOT NULL,
  `m_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发表时间',
  `m_replay` varchar(50) DEFAULT NULL,
  `student_id` int(5) unsigned NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `info_message`
--

INSERT INTO `info_message` (`m_id`, `m_title`, `m_content`, `m_date`, `m_replay`, `student_id`) VALUES
(1, '请假', '生病了，明天请假', '2018-07-09 14:13:58', '好的', 1),
(2, '改密码', '我的密码忘记了', '2018-07-09 14:14:34', '', 2),
(3, '放假', '五一放几天假', '2018-07-09 14:32:17', '3天', 3),
(6, '补课', '周六补课吗', '2018-07-10 14:27:41', '需要', 4),
(7, '考试', '期末考什么', '2018-07-10 14:28:11', '不告诉你', 2),
(8, '改密码', '密码改成123456', '2018-07-10 14:29:57', '好的', 10),
(9, '补考', '英语补考什么时候', '2018-07-10 14:30:38', '周三', 14),
(10, '寻物启事', '我的校园卡丢了', '2018-07-10 14:31:34', NULL, 12);

-- --------------------------------------------------------

--
-- 表的结构 `info_student`
--

CREATE TABLE IF NOT EXISTS `info_student` (
  `student_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `student_number` int(20) unsigned NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_gender` enum('女','男') NOT NULL DEFAULT '男',
  `student_birthday` date NOT NULL,
  `student_img` varchar(100) DEFAULT NULL,
  `class_id` int(5) unsigned NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `info_student`
--

INSERT INTO `info_student` (`student_id`, `student_number`, `student_name`, `student_gender`, `student_birthday`, `student_img`, `class_id`) VALUES
(1, 1601001, '李白', '男', '1997-10-02', '/web/Public/images/t1.jpg', 1),
(2, 1601002, '李黑', '男', '1998-11-06', '/web/Public/images/t2.jpg', 1),
(3, 1603001, 'jane', '女', '1998-02-03', '/web/Public/images/t3.jpg', 2),
(4, 1604001, '小兰', '女', '1998-10-20', '/web/Public/images/t4.jpg', 3),
(6, 1601003, '梅西', '男', '1999-10-08', '/web/Public/images/t4.jpg', 1),
(7, 1601004, '老张', '男', '1997-10-04', '/web/Public/images/t2.jpg', 1),
(8, 1601005, '小智', '男', '1999-01-10', '/web/Public/images/t1.jpg', 1),
(9, 1601006, '小龙', '男', '1996-10-03', '/web/Public/images/t3.jpg', 1),
(10, 1601007, '小红', '女', '1998-01-01', '/web/Public/images/t2.jpg', 1),
(11, 1602001, '张飞', '男', '1996-10-02', '/web/Public/images/t4.jpg', 9),
(12, 1602002, '貂蝉', '女', '1996-10-03', '/web/Public/images/t1.jpg', 9),
(13, 1602003, '吕布', '男', '1996-05-06', '/web/Public/images/t4.jpg', 9),
(14, 1602004, '刘备', '男', '1997-10-04', '/web/Public/images/t3.jpg', 9),
(15, 1602005, '赵云', '男', '1999-01-10', '/web/Public/images/t4.jpg', 9),
(16, 1603002, '小赵', '男', '1995-10-14', '/web/Public/images/t2.jpg', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
