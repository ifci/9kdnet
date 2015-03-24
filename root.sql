-- phpMyAdmin SQL Dump
-- version 4.2.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-03-23 23:11:07
-- 服务器版本： 5.7.4-m14
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `root`
--

-- --------------------------------------------------------

--
-- 表的结构 `9kd_access`
--

CREATE TABLE IF NOT EXISTS `9kd_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `module` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='权限分配表';

--
-- 转存表中的数据 `9kd_access`
--

INSERT INTO `9kd_access` (`role_id`, `node_id`, `level`, `pid`, `module`) VALUES
(2, 8, 3, 14, ''),
(2, 14, 2, 1, ''),
(2, 10, 3, 4, ''),
(2, 4, 2, 1, ''),
(2, 7, 3, 3, ''),
(2, 3, 2, 1, ''),
(2, 6, 3, 2, ''),
(2, 5, 3, 2, ''),
(2, 2, 2, 1, ''),
(2, 1, 1, 0, ''),
(3, 14, 2, 1, ''),
(3, 13, 3, 4, ''),
(3, 12, 3, 4, ''),
(3, 11, 3, 4, ''),
(3, 10, 3, 4, ''),
(3, 4, 2, 1, ''),
(3, 9, 3, 3, ''),
(3, 8, 3, 3, ''),
(3, 7, 3, 3, ''),
(3, 3, 2, 1, ''),
(3, 6, 3, 2, ''),
(3, 5, 3, 2, ''),
(3, 2, 2, 1, ''),
(3, 1, 1, 0, ''),
(4, 7, 3, 3, ''),
(4, 3, 2, 1, ''),
(4, 6, 3, 2, ''),
(4, 5, 3, 2, ''),
(4, 2, 2, 1, ''),
(4, 1, 1, 0, ''),
(2, 9, 3, 14, ''),
(2, 15, 3, 14, ''),
(2, 16, 3, 14, ''),
(2, 17, 3, 14, ''),
(2, 18, 3, 14, ''),
(2, 19, 3, 14, ''),
(2, 20, 3, 14, ''),
(2, 21, 3, 14, ''),
(2, 22, 3, 14, ''),
(2, 23, 3, 14, ''),
(2, 24, 3, 14, ''),
(2, 25, 3, 14, ''),
(2, 26, 2, 1, ''),
(2, 27, 3, 26, ''),
(2, 28, 3, 26, ''),
(2, 29, 3, 26, ''),
(2, 30, 3, 26, ''),
(2, 31, 3, 26, '');

-- --------------------------------------------------------

--
-- 表的结构 `9kd_ad`
--

CREATE TABLE IF NOT EXISTS `9kd_ad` (
`id` smallint(5) unsigned NOT NULL,
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_img` varchar(255) NOT NULL,
  `position` char(10) NOT NULL DEFAULT '0',
  `sort` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `lang` varchar(10) NOT NULL DEFAULT 'zh-cn'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `9kd_ad`
--

INSERT INTO `9kd_ad` (`id`, `ad_name`, `ad_link`, `ad_img`, `position`, `sort`, `lang`) VALUES
(23, '首页1', '#', '550ec4b064213.png', 'index', 10, 'zh-cn'),
(24, '首页2', '#', '550ec49386908.png', 'index', 9, 'zh-cn'),
(25, '首页3', '#', '550ec47a3b8f6.png', 'index', 8, 'zh-cn');

-- --------------------------------------------------------

--
-- 表的结构 `9kd_admin`
--

CREATE TABLE IF NOT EXISTS `9kd_admin` (
`aid` int(11) NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL COMMENT '登录账号',
  `pwd` char(32) DEFAULT NULL COMMENT '登录密码',
  `status` int(11) DEFAULT '1' COMMENT '账号状态',
  `remark` varchar(255) DEFAULT '' COMMENT '备注信息',
  `find_code` char(5) DEFAULT NULL COMMENT '找回账号验证码',
  `time` int(10) DEFAULT NULL COMMENT '开通时间'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='网站后台管理员表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `9kd_admin`
--

INSERT INTO `9kd_admin` (`aid`, `nickname`, `email`, `pwd`, `status`, `remark`, `find_code`, `time`) VALUES
(1, '超级管理员', 'admin@qq.com', '37b203ec84cad35157c85c1c9cfbaf2c', 1, '我是超级管理员 哈哈~~', NULL, 1427027955);

-- --------------------------------------------------------

--
-- 表的结构 `9kd_case`
--

CREATE TABLE IF NOT EXISTS `9kd_case` (
`id` mediumint(8) NOT NULL,
  `title` varchar(200) DEFAULT NULL COMMENT '新闻标题',
  `description` mediumtext NOT NULL,
  `pic` varchar(200) DEFAULT NULL COMMENT '文章关键字',
  `jname` mediumtext NOT NULL COMMENT '文章描述',
  `link` varchar(200) NOT NULL,
  `s_date` varchar(50) NOT NULL COMMENT '入驻时间',
  `published` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  `content` text,
  `click` int(11) NOT NULL DEFAULT '0',
  `aid` smallint(3) DEFAULT NULL COMMENT '发布者UID',
  `is_recommend` int(1) NOT NULL DEFAULT '0',
  `image_id` int(11) NOT NULL DEFAULT '0',
  `lang` varchar(5) NOT NULL DEFAULT 'zh-cn'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- 表的结构 `9kd_category`
--

CREATE TABLE IF NOT EXISTS `9kd_category` (
`cid` int(5) NOT NULL,
  `pid` int(5) DEFAULT NULL COMMENT 'parentCategory上级分类',
  `name` varchar(20) DEFAULT NULL COMMENT '分类名称',
  `type` char(2) NOT NULL DEFAULT 'n',
  `lang` varchar(10) NOT NULL DEFAULT 'zh-cn'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='新闻分类表' AUTO_INCREMENT=57 ;

--
-- 转存表中的数据 `9kd_category`
--

INSERT INTO `9kd_category` (`cid`, `pid`, `name`, `type`, `lang`) VALUES
(1, 0, '信托计划', 'n', 'zh-cn'),
(2, 1, '行业新闻', 'n', 'zh-cn'),
(4, 1, '信托渠道', 'n', 'zh-cn'),
(5, 1, '行业研究', 'n', 'zh-cn'),
(3, 1, '机构动态', 'n', 'zh-cn'),
(52, 0, '分类1', 'p', 'zh-cn'),
(55, 0, '分类2', 'p', 'zh-cn'),
(54, 53, '666666666', 'n', 'zh-cn'),
(56, 0, '分类3', 'p', 'zh-cn');

-- --------------------------------------------------------

--
-- 表的结构 `9kd_field`
--

CREATE TABLE IF NOT EXISTS `9kd_field` (
`id` int(11) NOT NULL COMMENT 'ID',
  `model_id` int(11) NOT NULL COMMENT '所属模型id',
  `name` varchar(128) NOT NULL COMMENT '字段名称',
  `comment` varchar(32) NOT NULL COMMENT '字段注释',
  `type` varchar(32) NOT NULL COMMENT '字段类型',
  `length` varchar(16) NOT NULL COMMENT '字段长度',
  `value` varchar(128) NOT NULL COMMENT '字段默认值',
  `is_require` tinyint(4) DEFAULT '0' COMMENT '是否必需',
  `is_unique` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否唯一',
  `is_index` tinyint(4) DEFAULT '0' COMMENT '是否添加索引',
  `is_system` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否系统字段',
  `is_list_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT '列表中显示',
  `auto_filter` varchar(32) NOT NULL COMMENT '自动过滤函数',
  `auto_fill` varchar(32) NOT NULL COMMENT '自动完成函数',
  `fill_time` varchar(16) NOT NULL DEFAULT 'both' COMMENT '填充时机',
  `relation_model` int(11) NOT NULL COMMENT '关联的模型',
  `relation_field` varchar(128) NOT NULL COMMENT '关联的字段',
  `relation_value` varchar(128) NOT NULL COMMENT '关联显示的值',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='数据模型字段' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `9kd_images`
--

CREATE TABLE IF NOT EXISTS `9kd_images` (
`id` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL,
  `savename` varchar(100) NOT NULL,
  `savepath` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- 转存表中的数据 `9kd_images`
--

INSERT INTO `9kd_images` (`id`, `catname`, `savename`, `savepath`, `create_time`) VALUES
(40, 'news', '20150323222447_12611.jpg', '/9kdnet/Uploads/image/news/20150323/20150323222447_12611.jpg', 1427121385),
(39, 'product', '20140310074050_66596.jpg', '/newconist/Uploads/image/product/20140310/20140310074050_66596.jpg', 1394437252),
(34, 'product', '20140228021215_98055.jpg', '/newconist/Uploads/image/news/20140228/20140228021215_98055.jpg', 1394176319),
(37, 'product', '20140310073926_27245.jpg', '/newconist/Uploads/image/product/20140310/20140310073926_27245.jpg', 1394437177),
(33, 'news', '20140228021215_98055.jpg', '/newconist/Uploads/image/news/20140228/20140228021215_98055.jpg', 1394159259),
(42, 'product', '20140310074033_57603.jpg', '/newconist/Uploads/image/product/20140310/20140310074033_57603.jpg', 1394441436),
(51, 'product', '20140310073926_27245.jpg', '/newconist/Uploads/image/product/20140310/20140310073926_27245.jpg', 1395295064),
(50, 'product', '20140310074033_57603.jpg', '/newconist/Uploads/image/product/20140310/20140310074033_57603.jpg', 1395295064),
(49, 'product', '20140310074050_66596.jpg', '/newconist/Uploads/image/product/20140310/20140310074050_66596.jpg', 1395295064),
(52, 'news', '20150323223817_15020.jpg', '/9kdnet/Uploads/image/news/20150323/20150323223817_15020.jpg', 1427121517),
(53, 'news', '20150323224001_45543.jpg', '/9kdnet/Uploads/image/news/20150323/20150323224001_45543.jpg', 1427121603);

-- --------------------------------------------------------

--
-- 表的结构 `9kd_input`
--

CREATE TABLE IF NOT EXISTS `9kd_input` (
`id` int(11) NOT NULL COMMENT 'ID',
  `field_id` int(11) NOT NULL COMMENT '字段id',
  `is_show` tinyint(4) NOT NULL DEFAULT '0' COMMENT '表单域是否显示',
  `label` varchar(32) NOT NULL COMMENT '表单域标签',
  `remark` varchar(128) NOT NULL COMMENT '表单域域',
  `type` varchar(32) NOT NULL COMMENT '表单域类型',
  `width` int(11) NOT NULL DEFAULT '20' COMMENT '表单域宽度',
  `height` int(11) NOT NULL DEFAULT '8' COMMENT '表单域高度',
  `opt_value` text NOT NULL COMMENT '表单域可选值',
  `value` varchar(128) NOT NULL COMMENT '表单域默认值',
  `editor` varchar(32) NOT NULL COMMENT '编辑器类型',
  `html` text NOT NULL COMMENT '表单域html替换',
  `show_order` int(11) DEFAULT NULL COMMENT '表单域显示顺序',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='字段表单域信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `9kd_link`
--

CREATE TABLE IF NOT EXISTS `9kd_link` (
`id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `display` int(1) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `target` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- 表的结构 `9kd_member`
--

CREATE TABLE IF NOT EXISTS `9kd_member` (
`uid` int(11) NOT NULL,
  `weibo_uid` varchar(15) DEFAULT NULL COMMENT '对应的新浪微博uid',
  `tencent_uid` varchar(20) DEFAULT NULL COMMENT '腾讯微博UID',
  `email` varchar(100) DEFAULT NULL COMMENT '邮箱地址',
  `nickname` varchar(20) DEFAULT NULL COMMENT '用户昵称',
  `pwd` char(32) DEFAULT NULL COMMENT '密码',
  `reg_date` int(10) DEFAULT NULL,
  `reg_ip` char(15) DEFAULT NULL COMMENT '注册IP地址',
  `verify_status` int(1) DEFAULT '0' COMMENT '电子邮件验证标示 0未验证，1已验证',
  `verify_code` varchar(32) DEFAULT NULL COMMENT '电子邮件验证随机码',
  `verify_time` int(10) DEFAULT NULL COMMENT '邮箱验证时间',
  `verify_exp_time` int(10) DEFAULT NULL COMMENT '验证邮件过期时间',
  `find_fwd_code` varchar(32) DEFAULT NULL COMMENT '找回密码验证随机码',
  `find_pwd_time` int(10) DEFAULT NULL COMMENT '找回密码申请提交时间',
  `find_pwd_exp_time` int(10) DEFAULT NULL COMMENT '找回密码验证随机码过期时间',
  `avatar` varchar(100) DEFAULT NULL COMMENT '用户头像',
  `birthday` int(10) DEFAULT NULL COMMENT '用户生日',
  `sex` int(1) DEFAULT NULL COMMENT '0女1男',
  `address` varchar(50) DEFAULT NULL COMMENT '地址',
  `province` varchar(100) DEFAULT NULL COMMENT '省份',
  `city` varchar(100) DEFAULT NULL COMMENT '城市',
  `intr` varchar(500) DEFAULT NULL COMMENT '个人介绍',
  `mobile` varchar(11) DEFAULT NULL COMMENT '手机号码',
  `phone` varchar(30) DEFAULT NULL COMMENT '电话',
  `fax` varchar(30) DEFAULT NULL,
  `qq` int(15) DEFAULT NULL,
  `msn` varchar(100) DEFAULT NULL,
  `login_ip` varchar(15) DEFAULT NULL COMMENT '登录ip',
  `login_time` int(10) DEFAULT NULL COMMENT '登录时间'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='网站前台会员表' AUTO_INCREMENT=351 ;

-- --------------------------------------------------------

--
-- 表的结构 `9kd_message`
--

CREATE TABLE IF NOT EXISTS `9kd_message` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(32) NOT NULL,
  `moblie` char(15) NOT NULL,
  `display` int(1) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- 表的结构 `9kd_model`
--

CREATE TABLE IF NOT EXISTS `9kd_model` (
`id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(32) NOT NULL COMMENT '模型名称',
  `tbl_name` varchar(32) NOT NULL COMMENT '数据表名称',
  `menu_name` varchar(32) NOT NULL COMMENT '菜单名称',
  `is_inner` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否为内部表',
  `has_pk` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否包含主键',
  `tbl_engine` varchar(16) NOT NULL DEFAULT 'InnoDB' COMMENT '引擎类型',
  `description` text NOT NULL COMMENT '模型描述',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='数据模型信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `9kd_nav`
--

CREATE TABLE IF NOT EXISTS `9kd_nav` (
`id` mediumint(8) NOT NULL,
  `module` varchar(20) NOT NULL,
  `nav_name` varchar(255) NOT NULL,
  `parent_id` smallint(5) NOT NULL DEFAULT '0',
  `guide` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `link` varchar(225) NOT NULL,
  `lang` varchar(10) NOT NULL DEFAULT 'zh-cn' COMMENT '语言',
  `sort` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `target` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `9kd_nav`
--

INSERT INTO `9kd_nav` (`id`, `module`, `nav_name`, `parent_id`, `guide`, `type`, `link`, `lang`, `sort`, `target`) VALUES
(52, 'link', '加速工厂', 0, 0, 'top', 'http://jsgc.9koudai.net/', 'zh-cn', 6, 1),
(53, 'link', '课程介绍', 0, 0, 'top', '', 'zh-cn', 5, 0),
(54, 'link', '服务介绍', 0, 0, 'top', '', 'zh-cn', 4, 0),
(55, 'link', '学员案例', 0, 0, 'top', '', 'zh-cn', 3, 0),
(56, 'link', '课程试听', 0, 0, 'top', '', 'zh-cn', 2, 0),
(57, 'link', '九口袋咨询', 0, 0, 'top', '', 'zh-cn', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `9kd_news`
--

CREATE TABLE IF NOT EXISTS `9kd_news` (
`id` mediumint(8) NOT NULL,
  `cid` smallint(3) DEFAULT NULL COMMENT '所在分类',
  `title` varchar(200) DEFAULT NULL COMMENT '新闻标题',
  `keywords` varchar(50) DEFAULT NULL COMMENT '文章关键字',
  `description` mediumtext COMMENT '文章描述',
  `status` tinyint(1) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL COMMENT '文章摘要',
  `published` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  `content` text,
  `click` int(11) NOT NULL DEFAULT '0',
  `aid` smallint(3) DEFAULT NULL COMMENT '发布者UID',
  `is_recommend` int(1) NOT NULL DEFAULT '0',
  `image_id` int(11) NOT NULL DEFAULT '0',
  `lang` varchar(5) NOT NULL DEFAULT 'zh-cn'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `9kd_news`
--

INSERT INTO `9kd_news` (`id`, `cid`, `title`, `keywords`, `description`, `status`, `summary`, `published`, `update_time`, `content`, `click`, `aid`, `is_recommend`, `image_id`, `lang`) VALUES
(16, 2, '九口袋公司荣获2013CCTV年度最佳商业模式奖', 'gfdg', '1月9日，九口袋董事长张启明出席了在北京举行的 “致改革致梦想2013年CCTV奋斗年度峰会”', 1, '1月9日，九口袋董事长张启明出席了在北京举行的 “致改革致梦想2013年CCTV奋斗年度峰会”，而由张启明所创办的九口袋公司荣获了大会颁发的2013年度“最佳商业模式”奖，董事长张启明出席领奖。在采访中，张启明表示，他是代表九口袋全体员工领取这份殊荣的，同时也是业界同行和CCTV百余家媒体对九口袋“新媒体营销”理念的充分认可。', 1394438775, 1427121385, '<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span>1<span>月</span><span style="font-family:''Times New Roman'';">9</span><span>日，九口袋董事长张启明出席了在北京举行的&nbsp;“致改革致梦想</span><span style="font-family:''Times New Roman'';">2013</span><span>年</span><span style="font-family:''Times New Roman'';">CCTV</span><span>奋斗年度峰会”，而由<a href="http://www.9koudai.org.cn/" target="_self"><span><strong>张启明</strong></span></a>所创办的九口袋公司荣获了大会颁发的</span><span style="font-family:''Times New Roman'';">2013</span><span>年度“最佳商业模式”奖，董事长张启明出席领奖。在采访中，张启明表示，他是代表九口袋全体员工领取这份殊荣的，同时也是业界同行和</span><span style="font-family:''Times New Roman'';">CCTV</span><span>百余家媒体对九口袋“新媒体营销”理念的充分认可。</span></span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:center;background-color:#FEFEFE;">\n	<span><img src="http://demo.9koudai.cn/9k/Public/ueditor/php/upload/89791411192645.jpg" title="20140110165007875.jpg" /></span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:center;background-color:#FEFEFE;">\n	<span>九口袋荣获2013CCTV年度最佳商业模式奖</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span>作为峰会的重要组成部份，每年“最佳商业模式”奖项由评审委员会评选出了过去一年中在新技术&nbsp;、新生态&nbsp;、新模式方面做出杰出贡献的数家企业，并为他们颁发了年度商业模式大奖。</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span>伴随着这次评选结果的揭晓，九口袋在<span style="font-family:''Times New Roman'';">2013</span><span>年年终也画上了圆满了句号。</span><span style="font-family:''Times New Roman'';">2013</span><span>年对九口袋人来说是收获硕果的一年。这一年，董事长张启明从开办<a href="http://www.9koudai.org.cn/" target="_self"><span style="color:#E36C09;"><strong>九口袋网络</strong></span></a>营销培训服务以来冲破重重障碍并一举成为电子商务的一匹“黑马”。</span></span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span>求成功、渴望发展是企业以及民众共同的主旋律。九口袋也不例外。从短短的开办网络营销培训半年多时间里，九口袋成绩斐然，首先董事长张启明和其团队通过对传统企业网络转型的深刻研究，最后将应用研究成果转化为系统培训课程。其次九口袋凭借独创的“<a href="http://www.9koudai.org.cn/" target="_self"><span style="color:#E36C09;"><strong>全网营销</strong></span></a>大系统课程”通过整合传统和互联网的优势，让众多传统企业化解转型危机，实现增值盈利，最后，公司人性化的提供落地实操服务，“一站式”的解决企业运营、技术支持、营销策划等核心问题，获得行业内持续好评，成功跻身于中国电子商务网络营销品牌生力军阵营。</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span>做强、做好说易行难，需要企业领军人物实干精神尤为重要，张启明用智慧与行动饯行着电子商务的传播和指导，他开创的“<a href="http://www.9koudai.org.cn/" target="_self"><span style="color:#E36C09;"><strong>全网营销</strong></span></a>大系统课程”实现了为中小企业在互联网时代下创造财富，缔造了国内营销领域的传奇，同时也为中国网络营销培训机构引领出一条可借鉴的创新发展之路。</span>\n</p>', 31, 1, 1, 40, 'zh-cn'),
(19, 2, '张启明荣膺“2014年中国电子商务十大杰出人物”', '张启明', '近日，由中国管理科学研究院、中国国际经济技术合作促进会、《中国影响力》杂志社、全国行业影响力人物(品牌)大型活动组委会等有关单位联合举办的“2014年中国电子商务十大杰出人物”活动经过层层选拔和认证', 1, '近日，由中国管理科学研究院、中国国际经济技术合作促进会、《中国影响力》杂志社、全国行业影响力人物(品牌)大型活动组委会等有关单位联合举办的“2014年中国电子商务十大杰出人物”活动经过层层选拔和认证，来自上海的企业家九口袋董事长张启明成功入围，同时，被初选列入陪同国家领导习近平出访国外电商专家团队成员，成为上海市唯一获此殊荣的企业家。', 1427121517, NULL, '<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>近日，由中国管理科学研究院、中国国际经济技术合作促进会、《中国影响力》杂志社、全国行业影响力人物<span style="font-family:''Times New Roman'';">(</span><span>品牌</span><span style="font-family:''Times New Roman'';">)</span><span>大型活动组委会等有关单位联合举办的“</span><span style="font-family:''Times New Roman'';">2014</span><span>年中国电子商务十大杰出人物”活动经过层层选拔和认证，来自上海的企业家<span style="color:#E36C09;"><strong>九口袋</strong></span>董事长张启明成功入围，同时，被初选列入陪同国家领导习近平出访国外电商专家团队成员，成为上海市唯一获此殊荣的企业家。</span></span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span><br />\n</span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:center;background-color:#FEFEFE;">\n	<span><img src="http://demo.9koudai.cn/9k/Public/ueditor/php/upload/20140920/14111933409636.jpg" title="1066322870092460441.jpg" /></span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:center;background-color:#FEFEFE;">\n	<span>九口袋董事长张启明<br />\n</span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span><br />\n</span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<a href="http://www.zqm999.com/" target="_self"><span><strong>张启明</strong></span></a><span>，上海九口袋实业有限公司董事长、九口袋、酒口袋品牌创始人、<span style="font-family:''Times New Roman'';">2013</span><span>年</span><span style="font-family:''Times New Roman'';">CCTV</span><span>年度最佳商业模式奖获得者、著名互联网专家，号称“营销鬼才”。从一个草根走到一个让人高山仰止的巅峰杰出人物。</span></span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span><br />\n</span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>2012<span>年，创立公司以来，便以飞快的速度开始向前发展。在商业变革的互联网时代下，他最早提出了“<a href="http://www.9koudai.org.cn/" target="_self"><span><strong>全网营销</strong></span></a>”理念，影响巨大，意义深远。他将传统中小企业和<a href="http://www.9koudai.org.cn/" target="_self"><span style="color:#E36C09;"><strong>全网营销</strong></span></a>联系起来，而且以超乎想像的速度破了中小企业转型难的困局，引领着一个个传统行业迈向新的里程。在一年时间里，打造了</span><span style="font-family:''Times New Roman'';">10</span><span>几家行业营销冠军企业！横跨</span><span style="font-family:''Times New Roman'';">200</span><span>多个行业，总计提升企业网络业绩达亿元。</span></span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span><br />\n</span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>张启明带领九口袋为传统中小企业发展作出了突出贡献，改变了中小企业的营销方式，迄今已经吸引了数百家的模仿者。有报道称，九口袋有望在<span style="font-family:''Times New Roman'';">2015</span><span>年实现上市计划。</span></span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span><br />\n</span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>主办方评价张启明讲话温和，为人幽默、自信稳健，是当之无愧的“中国十大电子商务杰出人物”。去年，张启明带领九口袋荣获<span style="font-family:''Times New Roman'';">2013</span><span>年</span><span style="font-family:''Times New Roman'';">CCTV</span><span>年度最佳商业模式奖时，就让国内商业大佬第一次意识到年轻的互联网精英的创新能力不可小觑。</span></span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span><br />\n</span> \n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>点评：一个伟大的时代总会涌现一个个英雄，一个伟大的网络更有一位位时代骄子，他们改变着中国互联网，而<span style="color:#E36C09;"><strong>张启明</strong></span>和他的九口袋也正身体力行，让“中国的制造”变成世界品牌！</span> \n</p>', 0, 1, 1, 52, 'zh-cn'),
(20, 2, '为什么2013CCTV年度最佳商业模式奖是九口袋', '奋斗', '昨日，在北京梅地亚宾馆央视黄金招标大厅，“致改革致梦想——2013年CCTV《奋斗》年度峰会”胜利召开', 1, '昨日，在北京梅地亚宾馆央视黄金招标大厅，“致改革致梦想——2013年CCTV《奋斗》年度峰会”胜利召开，此次峰会汇聚了国内外政、经、学界领袖人物与全球华人精英，为改革呐喊，为市场造势，凝聚共识，打造了一场高端的思想盛宴。此次峰会颁发了央视最佳年度人物、最佳投资人、最佳商业模式奖诸多奖项。', 1427121603, NULL, '<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>昨日，在北京梅地亚宾馆央视黄金招标大厅，“致改革致梦想——<span style="font-family:''Times New Roman'';">2013</span><span>年</span><span style="font-family:''Times New Roman'';">CCTV</span><span>《奋斗》年度峰会”胜利召开，此次峰会汇聚了国内外政、经、学界领袖人物与全球华人精英，为改革呐喊，为市场造势，凝聚共识，打造了一场高端的思想盛宴。此次峰会颁发了央视最佳年度人物、最佳投资人、最佳商业模式奖诸多奖项。</span></span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:center;background-color:#FEFEFE;">\n	<span><img src="http://demo.9koudai.cn/9k/Public/ueditor/php/upload/20140920/14111940831658.jpg" title="12061294_929348.jpg" /></span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:center;background-color:#FEFEFE;">\n	<span>九口袋董事长张启明<br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>此次峰会中，可能最受大家关注的就是最佳商业模式奖获得者九口袋了，其董事长<a href="http://www.9koudai.org.cn/infr/http%EF%BC%9A/www.zqm999.com" target="_self"><span><strong>张启明</strong></span></a>又是何许人也<span style="font-family:''Times New Roman'';">?</span><span>小编在此挖掘挖掘九口袋背后故事。</span></span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>据悉，<span style="color:#E36C09;"><strong>九口袋</strong></span>是一家集培训、策划、代运营为一体的新媒体营销公司，独家首创《实战新网络新营销》总裁课程是首家将<span style="font-family:''Times New Roman'';">PC</span><span>互联网与移动互联网完美结合的高端总裁课程，它能帮助企业快速建立自媒体并开启全网营销。</span></span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:center;background-color:#FEFEFE;">\n	<span><img src="http://demo.9koudai.cn/9k/Public/ueditor/php/upload/20140920/14111941354242.jpg" title="12061295_191455.jpg" /></span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:center;background-color:#FEFEFE;">\n	<span>张启明老师在演讲中</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span style="color:#E36C09;"><strong>九口袋</strong></span><span>董事长张启明自创办九口袋以来，亲率团队全心全意专注<span style="color:#E36C09;"><strong>网络营销</strong></span>的培训，其开办初衷源于他出身传统，玩过电商，有着丰富的实战营销经验，更在业界素有“营销鬼才”之称。他和团队通过对传统企业网络转型的深刻研究，最后将应用研究成果转化为系统培训课程。张启明凭借独创的“<a href="http://www.9koudai.org.cn/" target="_self"><span style="color:#E36C09;"><strong>全网营销</strong></span></a>大系统课程”通过整合传统和互联网的优势，已让众多企业实现盈利，其中提供落地实操服务，“一站式”的解决企业运营、技术支持、营销策划等核心问题，获得行业内持续好评，此课程已被引进浙江大学<span style="font-family:''Times New Roman'';">EMBA</span><span>课堂。</span></span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>作为创始人和掌舵者，他一直用着他超强的执行力带领着团队高速的发展，在短短半年时间，已在上海、杭州、温州开设分公司，让九口袋品牌从负值飙升过亿。同时作为青年创业导师他也一直支持大学生创业，目前已开启全国各地大学创业巡回演讲，与在校大学生分享创业经验。</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span><br />\n</span>\n</p>\n<p style="color:#666666;font-family:宋体;font-size:14px;text-indent:28px;text-align:justify;background-color:#FEFEFE;">\n	<span>或许这就是<span style="color:#E36C09;"><strong>九口袋</strong></span>在他带领下获奖的原因。</span>\n</p>', 0, 1, 1, 53, 'zh-cn');

-- --------------------------------------------------------

--
-- 表的结构 `9kd_node`
--

CREATE TABLE IF NOT EXISTS `9kd_node` (
`id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='权限节点表' AUTO_INCREMENT=81 ;

--
-- 转存表中的数据 `9kd_node`
--

INSERT INTO `9kd_node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(1, 'Admin', '后台管理', 1, '网站后台管理项目', 10, 0, 1),
(2, 'Index', '管理首页', 1, '', 1, 1, 2),
(3, 'Member', '注册会员管理', 1, '', 3, 1, 2),
(4, 'Webinfo', '系统管理', 1, '', 4, 1, 2),
(5, 'index', '默认页', 1, '', 5, 2, 3),
(6, 'myInfo', '我的个人信息', 1, '', 6, 2, 3),
(7, 'index', '会员首页', 1, '', 7, 3, 3),
(8, 'index', '管理员列表', 1, '', 8, 14, 3),
(9, 'addAdmin', '添加管理员', 1, '', 9, 14, 3),
(10, 'index', '系统设置首页', 1, '', 10, 4, 3),
(11, 'setEmailConfig', '设置系统邮件', 1, '', 12, 4, 3),
(12, 'testEmailConfig', '发送测试邮件', 1, '', 0, 4, 3),
(13, 'setSafeConfig', '系统安全设置', 1, '', 0, 4, 3),
(14, 'Access', '权限管理', 1, '权限管理，为系统后台管理员设置不同的权限', 0, 1, 2),
(15, 'nodeList', '查看节点', 1, '节点列表信息', 0, 14, 3),
(16, 'roleList', '角色列表查看', 1, '角色列表查看', 0, 14, 3),
(17, 'addRole', '添加角色', 1, '', 0, 14, 3),
(18, 'editRole', '编辑角色', 1, '', 0, 14, 3),
(19, 'opNodeStatus', '便捷开启禁用节点', 1, '', 0, 14, 3),
(20, 'opRoleStatus', '便捷开启禁用角色', 1, '', 0, 14, 3),
(21, 'editNode', '编辑节点', 1, '', 0, 14, 3),
(22, 'addNode', '添加节点', 1, '', 0, 14, 3),
(23, 'addAdmin', '添加管理员', 1, '', 0, 14, 3),
(24, 'editAdmin', '编辑管理员信息', 1, '', 0, 14, 3),
(25, 'changeRole', '权限分配', 1, '', 0, 14, 3),
(26, 'News', '资讯管理', 1, '', 0, 1, 2),
(27, 'index', '新闻列表', 1, '', 0, 26, 3),
(28, 'category', '新闻分类管理', 1, '', 0, 26, 3),
(29, 'add', '发布新闻', 1, '', 0, 26, 3),
(30, 'edit', '编辑新闻', 1, '', 0, 26, 3),
(31, 'del', '删除信息', 0, '', 0, 26, 3),
(32, 'SysData', '数据库管理', 1, '包含数据库备份、还原、打包等', 0, 1, 2),
(33, 'index', '查看数据库表结构信息', 1, '', 0, 32, 3),
(34, 'backup', '备份数据库', 1, '', 0, 32, 3),
(35, 'restore', '查看已备份SQL文件', 1, '', 0, 32, 3),
(36, 'restoreData', '执行数据库还原操作', 1, '', 0, 32, 3),
(37, 'delSqlFiles', '删除SQL文件', 1, '', 0, 32, 3),
(38, 'sendSql', '邮件发送SQL文件', 1, '', 0, 32, 3),
(39, 'zipSql', '打包SQL文件', 1, '', 0, 32, 3),
(40, 'zipList', '查看已打包SQL文件', 1, '', 0, 32, 3),
(41, 'unzipSqlfile', '解压缩ZIP文件', 1, '', 0, 32, 3),
(42, 'delZipFiles', '删除zip压缩文件', 1, '', 0, 32, 3),
(43, 'downFile', '下载备份的SQL,ZIP文件', 1, '', 0, 32, 3),
(44, 'repair', '数据库优化修复', 1, '', 0, 32, 3),
(46, 'Siteinfo', '网站功能', 1, '', 0, 1, 2),
(47, 'index', '菜单列表', 1, '', 0, 46, 3),
(48, 'add_nav', '添加/编辑菜单', 1, '', 0, 46, 3),
(49, 'adindex', '轮播列表', 1, '', 0, 46, 3),
(50, 'add_ad', '添加/编辑轮播', 1, '', 0, 46, 3),
(51, 'page', '单页列表', 1, '', 0, 46, 3),
(52, 'add_page', '添加/编辑单页', 1, '', 0, 46, 3),
(53, 'tag_index', '标签列表', 1, '', 0, 46, 3),
(54, 'add_tag', '添加/编辑标签', 1, '', 0, 46, 3),
(55, 'create_tag', '模版标签生成', 1, '', 0, 46, 3),
(56, 'file_index', '文件管理', 1, '', 0, 46, 3),
(57, 'link_index', '友情链接列表', 1, '', 0, 46, 3),
(58, 'add_link', '添加/编辑友情链接', 1, '', 0, 46, 3),
(59, 'message', '留言信息列表', 1, '', 0, 46, 3),
(60, 'Product', '产品管理', 1, '', 0, 1, 2),
(61, 'delpage', '删除单页', 1, '', 0, 46, 3),
(62, 'delad', '删除轮播', 1, '', 0, 46, 3),
(63, 'dellink', '删除友情链接', 1, '', 0, 46, 3),
(64, 'delmessage', '删除留言', 1, '', 0, 46, 3),
(65, 'deltag', '删除标签', 1, '', 0, 46, 3),
(66, 'selectCat', '文章分类', 1, '', 0, 46, 3),
(67, 'index', '产品列表', 1, '', 0, 60, 3),
(68, 'edit', '编辑产品', 1, '', 0, 60, 3),
(69, 'add', '添加产品', 1, '', 0, 60, 3),
(70, 'category', '分类列表', 1, '', 0, 60, 3),
(71, 'del', '删除产品', 1, '', 0, 60, 3),
(72, 'changeAttr', '快速推荐', 1, '', 0, 60, 3),
(73, 'changeStatus', '快速审核', 0, '', 0, 60, 3),
(74, 'changePhoneStatus', '手机推荐', 1, '', 0, 60, 3),
(75, 'checkProductTitle', '标题检查', 1, '', 0, 60, 3),
(76, 'changeAttr', '快速推荐', 1, '', 0, 26, 3),
(77, 'changeStatus', '快速审核', 1, '', 0, 26, 3),
(78, 'Models', '模型管理', 1, '', 0, 1, 2),
(79, 'index', '模型列表', 1, '', 0, 78, 3),
(80, 'add', '添加模型', 1, '', 0, 78, 3);

-- --------------------------------------------------------

--
-- 表的结构 `9kd_page`
--

CREATE TABLE IF NOT EXISTS `9kd_page` (
`id` mediumint(8) unsigned NOT NULL,
  `unique_id` varchar(30) NOT NULL DEFAULT '',
  `parent_id` smallint(5) NOT NULL DEFAULT '0',
  `page_name` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `display` int(1) NOT NULL DEFAULT '0',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `lang` varchar(10) NOT NULL DEFAULT 'zh-cn'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- 表的结构 `9kd_product`
--

CREATE TABLE IF NOT EXISTS `9kd_product` (
`id` mediumint(8) NOT NULL,
  `cid` smallint(3) DEFAULT NULL COMMENT '所在分类',
  `title` varchar(200) DEFAULT NULL COMMENT '产品标题',
  `price` double(10,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `psize` varchar(32) NOT NULL,
  `image_id` varchar(255) NOT NULL COMMENT '图片',
  `keywords` varchar(50) DEFAULT NULL COMMENT '产品关键字',
  `description` mediumtext COMMENT '产品描述',
  `status` tinyint(1) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL COMMENT '产品摘要',
  `published` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  `content` text,
  `lang` varchar(10) NOT NULL DEFAULT 'zh-cn',
  `aid` smallint(3) DEFAULT NULL COMMENT '发布者UID',
  `click` int(11) NOT NULL DEFAULT '0',
  `is_recommend` int(1) NOT NULL DEFAULT '0',
  `wap_display` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品表' AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `9kd_product`
--

INSERT INTO `9kd_product` (`id`, `cid`, `title`, `price`, `psize`, `image_id`, `keywords`, `description`, `status`, `summary`, `published`, `update_time`, `content`, `lang`, `aid`, `click`, `is_recommend`, `wap_display`) VALUES
(32, 56, '添加编辑产品', 43.00, '543', '42', '', '添加编辑产品', 1, '添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品', 1394437234, 1394441436, '<span style="&quot;&quot;&quot;\\&quot;color:#333333;font-family:Verdana,&quot;&quot;&quot;" geneva,="&quot;&quot;&quot;&quot;&quot;&quot;" sans-serif;line-height:22px;background-color:#f2f2f2;\\"="&quot;&quot;&quot;&quot;&quot;&quot;">添加编辑产品</span>', 'zh-cn', 1, 3, 1, 1),
(30, 52, '添加编辑产品', 43.00, '543', '37', '', '添加编辑产品', 1, '添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品', 1394159208, 1394437177, '<span style="&quot;\\&quot;color:#333333;font-family:Verdana,&quot;" geneva,="&quot;&quot;" sans-serif;line-height:22px;background-color:#f2f2f2;\\"="&quot;&quot;">添加编辑产品</span>', 'zh-cn', 1, 1, 1, 1),
(33, 52, '添加编辑产品', 43.00, '543', '39', '', '添加编辑产品', 1, '添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品', 1394437252, 0, '<span style="&quot;\\&quot;\\\\&quot;\\\\\\\\&quot;color:#333333;font-family:Verdana,\\\\&quot;\\&quot;&quot;" geneva,="&quot;\\&quot;\\\\&quot;\\\\&quot;\\&quot;&quot;" sans-serif;line-height:22px;background-color:#f2f2f2;\\\\\\\\\\\\\\"="&quot;\\&quot;\\\\&quot;\\\\&quot;\\&quot;&quot;">添加编辑产品</span>', 'zh-cn', 1, 31, 1, 1),
(34, 55, '添加编辑产品', 43.00, '543', '49,50,51', '', '添加编辑产品', 1, '添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品添加编辑产品', 1394441422, 1395295064, '如果豆腐干豆腐干梵蒂冈', 'zh-cn', 1, 24, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `9kd_role`
--

CREATE TABLE IF NOT EXISTS `9kd_role` (
`id` smallint(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='权限角色表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `9kd_role`
--

INSERT INTO `9kd_role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(1, '超级管理员', 0, 1, '系统内置超级管理员组，不受权限分配账号限制'),
(2, '管理员', 1, 1, '拥有系统仅此于超级管理员的权限'),
(3, '领导', 1, 1, '拥有所有操作的读权限，无增加、删除、修改的权限'),
(4, '测试组', 1, 1, '测试');

-- --------------------------------------------------------

--
-- 表的结构 `9kd_role_user`
--

CREATE TABLE IF NOT EXISTS `9kd_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户角色表';

--
-- 转存表中的数据 `9kd_role_user`
--

INSERT INTO `9kd_role_user` (`role_id`, `user_id`) VALUES
(3, '4');

-- --------------------------------------------------------

--
-- 表的结构 `9kd_tag`
--

CREATE TABLE IF NOT EXISTS `9kd_tag` (
`id` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `unique_id` char(20) NOT NULL,
  `content` text NOT NULL,
  `lang` varchar(10) NOT NULL DEFAULT 'zh-cn'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `9kd_tag`
--

INSERT INTO `9kd_tag` (`id`, `name`, `unique_id`, `content`, `lang`) VALUES
(6, '关于我们', 'aboutus', '<h3> <img src="/newconist/Uploads/image/product/20140303/20140303081406_87297.jpg" width="100" height="100" align="left" alt="" /> </h3><p>  在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多个地方官热风斯蒂芬<span>在此处输入内容覆盖多<span></span></span></span></span></span></span></span></span></span></span></p>', 'zh-cn'),
(15, '首页-课程大纲', 'inkcdg', '边实战边总结的课程，一线实战的专家老师。零成本、低成本的实战技巧，最轻松、最快速的执行流程。', 'zh-cn'),
(16, '首页-解决方案', 'injjfa', '解决思路<br />\n解决模式<br />\n解决方法<br />\n解决资源<br />\n解决团队建设问题。', 'zh-cn'),
(17, '首页-受训企业', 'insxqy', '服务企业已达2675家,服务行业超过600个,服务满意率高达99%。', 'zh-cn'),
(18, '首页-课程试听', 'inkcst', '<p>\n	了解课程时间\n</p>\n<p>\n	在线试听课程\n</p>\n<p>\n	免费报名热线\n</p>', 'zh-cn'),
(19, '学前班', 'xqb', '课前扫盲，完成基础教育，为上课做好准备动作。', 'zh-cn'),
(20, '系统班', 'xtb', '系统介绍全网布局理念，案例剖析网络营销新模式。', 'zh-cn'),
(21, '落地班', 'ldb', '加速工厂专家老师一对一指导，100%保证落地执行！', 'zh-cn'),
(22, '沙龙', 'sl', '举办各类学员交流会，全面交互、增值学习。', 'zh-cn'),
(23, '专家咨询', 'zjzx', '定期举行专家研讨会，提供问题诊断，专家咨询服务。', 'zh-cn'),
(24, '资源共享', 'zygx', '提供学员交流平台，共享平台资源。', 'zh-cn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `9kd_access`
--
ALTER TABLE `9kd_access`
 ADD KEY `groupId` (`role_id`), ADD KEY `nodeId` (`node_id`);

--
-- Indexes for table `9kd_ad`
--
ALTER TABLE `9kd_ad`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_admin`
--
ALTER TABLE `9kd_admin`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `9kd_case`
--
ALTER TABLE `9kd_case`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_category`
--
ALTER TABLE `9kd_category`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `9kd_field`
--
ALTER TABLE `9kd_field`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_field_model` (`model_id`);

--
-- Indexes for table `9kd_images`
--
ALTER TABLE `9kd_images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_input`
--
ALTER TABLE `9kd_input`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_field_input` (`field_id`);

--
-- Indexes for table `9kd_link`
--
ALTER TABLE `9kd_link`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_member`
--
ALTER TABLE `9kd_member`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `9kd_message`
--
ALTER TABLE `9kd_message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_model`
--
ALTER TABLE `9kd_model`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_nav`
--
ALTER TABLE `9kd_nav`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_news`
--
ALTER TABLE `9kd_news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_node`
--
ALTER TABLE `9kd_node`
 ADD PRIMARY KEY (`id`), ADD KEY `level` (`level`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`), ADD KEY `name` (`name`);

--
-- Indexes for table `9kd_page`
--
ALTER TABLE `9kd_page`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_product`
--
ALTER TABLE `9kd_product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9kd_role`
--
ALTER TABLE `9kd_role`
 ADD PRIMARY KEY (`id`), ADD KEY `pid` (`pid`), ADD KEY `status` (`status`);

--
-- Indexes for table `9kd_role_user`
--
ALTER TABLE `9kd_role_user`
 ADD KEY `group_id` (`role_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `9kd_tag`
--
ALTER TABLE `9kd_tag`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `9kd_ad`
--
ALTER TABLE `9kd_ad`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `9kd_admin`
--
ALTER TABLE `9kd_admin`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `9kd_case`
--
ALTER TABLE `9kd_case`
MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `9kd_category`
--
ALTER TABLE `9kd_category`
MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `9kd_field`
--
ALTER TABLE `9kd_field`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';
--
-- AUTO_INCREMENT for table `9kd_images`
--
ALTER TABLE `9kd_images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `9kd_input`
--
ALTER TABLE `9kd_input`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';
--
-- AUTO_INCREMENT for table `9kd_link`
--
ALTER TABLE `9kd_link`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `9kd_member`
--
ALTER TABLE `9kd_member`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=351;
--
-- AUTO_INCREMENT for table `9kd_message`
--
ALTER TABLE `9kd_message`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `9kd_model`
--
ALTER TABLE `9kd_model`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID';
--
-- AUTO_INCREMENT for table `9kd_nav`
--
ALTER TABLE `9kd_nav`
MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `9kd_news`
--
ALTER TABLE `9kd_news`
MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `9kd_node`
--
ALTER TABLE `9kd_node`
MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `9kd_page`
--
ALTER TABLE `9kd_page`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `9kd_product`
--
ALTER TABLE `9kd_product`
MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `9kd_role`
--
ALTER TABLE `9kd_role`
MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `9kd_tag`
--
ALTER TABLE `9kd_tag`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- 限制导出的表
--

--
-- 限制表 `9kd_field`
--
ALTER TABLE `9kd_field`
ADD CONSTRAINT `9kd_field_ibfk_1` FOREIGN KEY (`model_id`) REFERENCES `9kd_model` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `9kd_input`
--
ALTER TABLE `9kd_input`
ADD CONSTRAINT `9kd_input_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `9kd_field` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
