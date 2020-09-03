-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2020 at 03:13 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `category_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `ad_picture` varchar(255) NOT NULL,
  `ad_video` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `product_name`, `product_price`, `category_id`, `city_id`, `ad_picture`, `ad_video`, `user_id`, `created_at`, `is_active`) VALUES
(1, 'Handfree', 20, 1, 2, 'ads38555.png', 'adsvideo87010.mp4', 1, '2020-09-03 04:44:05', 1),
(2, 'Handfree', 20, 1, 2, 'ads98709.png', 'adsvideo67815.mp4', 1, '2020-09-03 04:46:50', 1),
(3, 'Speaker', 10, 1, 3, 'ads87650.png', 'adsvideo4028.mp4', 1, '2020-09-03 04:48:40', 1),
(4, 'Handfree', 20, 1, 2, 'ads22064.png', 'adsvideo39472.mp4', 4, '2020-09-03 06:07:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `description`, `created_by`, `created_at`, `is_active`) VALUES
(1, 'Music', '', 1, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `title`, `created_by`, `created_at`, `is_active`) VALUES
(1, 'Faisalabad', 0, '0000-00-00 00:00:00', -1),
(2, 'Multan', 0, '0000-00-00 00:00:00', 1),
(3, 'Lahore', 0, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('4mcf6o6018mi9teat68k500vf9fchp62', '::1', 1599138639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133383632383b),
('3deuom4moq4ia6u7ka1piihv69a49l7q', '::1', 1599137480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133373438303b),
('n7a2b9j129nbmetqrv7bq5gif8iraahv', '::1', 1599138214, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133383231343b7573657249647c733a313a2234223b75736572547970657c733a373a2274657374696e67223b7573657246697273747c733a31373a2274657374696e6740676d61696c2e636f6d223b),
('hjhv8pk1ka3o7kc49ah9qbng5n9j1mld', '::1', 1599136122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133363131313b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('rs13s0v5lo3lffkf2gfepbv1stp69po2', '::1', 1599136084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133363038343b),
('1f0b4jaqngi4ffpipf72ev31dpf5477j', '::1', 1599133610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133333631303b),
('2sh8t0bofde0be0g080n4h8j2knqk5f3', '::1', 1599135103, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133353130333b),
('po0l09fr69bcd6te4d57rjjgi5s5hmeb', '::1', 1599132890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133323839303b),
('rt32m974jht08gthj1gtuab2d98uq5qm', '::1', 1599133220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133333232303b),
('806jcg3d0vm2ci1gb3ksq5n6t0g90jd5', '::1', 1599132233, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133323233333b),
('fs6vjiqdruvm2b1bcfipm183kiovt3cb', '::1', 1599132548, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133323534383b),
('i756n7e18gu6l98i40dr24rsilid48qf', '::1', 1599131575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133313537353b),
('gi0hricutu68oddk5iira2ou3cd0nho7', '::1', 1599131916, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133313931363b),
('ugt3p70diimo0prcu7cqud4bp5kelp8g', '::1', 1599130859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133303835393b),
('m33k7a3q8b107vmc0v0p7c07sl7cfppd', '::1', 1599131170, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393133313137303b),
('bjve3lsekp29sl5cacfv9doptnhdufei', '::1', 1599124402, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393132343430323b),
('qga1170unduq7ihsbemd483ro3ptirhj', '::1', 1599124830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393132343833303b),
('li9gncckjc8s96gt7kfvpt35kd29j1nl', '::1', 1599123680, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393132333638303b),
('7g7onm0bsjb9lg1u6httt2l9hfvssoej', '::1', 1599124094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393132343039343b),
('obr5n45cvpbpapr2btvnpalpr1ojgmc0', '::1', 1599122639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393132323633393b),
('tb5m6gtd7p9qavmbgie17gtqbcdar5hv', '::1', 1599123089, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393132333038393b),
('va8s2s669mvlmb99cpfucnt2jf514d5t', '::1', 1599119174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393131393137343b),
('t3rogk0kn0cdf3q4p80648o4tdbbbe8m', '::1', 1599121016, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393132313031363b),
('hlofuighu3oiatrn3lcapq128f53rgnj', '::1', 1599114723, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393131343732333b),
('6t240r7ijvguoucsaecjjbrulc8o30b4', '::1', 1599118499, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393131383439393b),
('7ei3h2dbdimipf4vn5qu8442nj1jvgbo', '::1', 1599109307, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393130393330373b),
('gadh5ki3tje2nbhto5vdso7pu2ckf9l7', '::1', 1599114251, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393131343235313b),
('oa27g5eh70p2na9ch859pkba9vruccb6', '::1', 1599103427, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393130333432373b),
('nn0gdm4kj8opj4i7f9q2mehceiae4usi', '::1', 1599104115, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393130343131353b),
('tfg0f3ui1abkko38iusi0p3psshvv3fl', '::1', 1599102740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393130323734303b),
('idd1g3fofgc5fuc2snjjs8qnvglgjeqh', '::1', 1599103053, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393130333035333b),
('2d1l8fqq8sjj4cjcejkhs33a6guofu40', '::1', 1599098345, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393039383334353b),
('frqetang8ftiom493fjutfhnea9jrauh', '::1', 1599097455, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393039373435353b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('o41f4kt092pemo813c5qm8do9c928fpd', '::1', 1599096717, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393039363731373b),
('6hqpbmledq9e7ajf96ucol17r7gej39p', '::1', 1599022174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393032323137343b),
('4qvtqq1ou5jiid6a20rp6eea4dvvt18p', '::1', 1599084048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393038343033303b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('872lc2gviq2bddppi4gao4aee3422m9d', '::1', 1599022005, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393032323030353b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('j1ceag01jacvmdo30v9vusdr8mi4lq8h', '::1', 1599013051, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393031333030383b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('krno35cesdomjmn98m7pvul19ol7hjcs', '::1', 1599013008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393031333030383b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('q7djef1kkfnjuik7kgondb0mdrd2tsf4', '::1', 1599012366, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393031323336363b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('gv3aidfqap57cn16vkmh8p9lr8a03h6r', '::1', 1599011890, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393031313839303b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('amdk5n7smnl0j0bed6k277f230gmrle0', '::1', 1599011568, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393031313536383b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('n76asauin7hn5fq0ok611kcriks7d2kr', '::1', 1599009660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393030393636303b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('akpkb0pgp20b2f9ie5ffkk2fmg8mqqhf', '::1', 1599007337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393030373333373b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('v3piq2gqasf38fl35rgenflui5po75if', '::1', 1599004417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393030343431373b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('ve9pks7pds2cecs14fdllrg4vfomlhgn', '::1', 1599003833, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393030333833333b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('r7fdtt0cd3lqsn26b1knj6ag30iaui7m', '::1', 1599001817, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393030313831373b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('l11rpq8qto7vc1hetgcbmgme2feg7tb4', '::1', 1599001329, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393030313332393b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('v7chde06ugpnf78vhsp2qk8qq56nonq5', '::1', 1599001027, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393030313032373b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('eft4m0oj801o60ts6cv9uu346a5ng852', '::1', 1599000718, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393030303731383b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('saof6jc1988kd5s6sfvk0khst66r3atn', '::1', 1598999840, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383939393834303b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('9c3eni1o28ulmurr5e72iuhfuai5seq9', '::1', 1598997333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383939373333333b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('ggckt38l2dspu3mel7labdu13v8qm6h8', '::1', 1598996806, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383939363830363b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('34stl5bc8r2877ki6qb0msm7ntujn58d', '::1', 1598936273, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383933363235333b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('5fpdnknoni0j4ufb4pl51bfeu60ks3lo', '::1', 1598926872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383932363837323b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b),
('5ni6olm1ie9a1flfbgr6b3btmmp781j7', '::1', 1598926880, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383932363837323b7573657249647c733a313a2231223b75736572547970657c733a353a2261646d696e223b7573657246697273747c4e3b757365724c6173747c4e3b75736572456d61696c7c733a31393a22616c69686f73706974616c40686d732e636f6d223b);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `title`, `description`, `created_by`, `created_at`, `is_active`) VALUES
(1, 'Physio Therapy', '', 1, '2020-06-14 12:09:23', -1),
(2, 'Cardiology', '', 1, '2020-06-14 15:06:30', 1),
(3, 'Physio Therapy', '', 1, '2020-06-14 18:12:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(20) NOT NULL,
  `user` int(20) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `dept_id` int(20) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user`, `phone`, `address`, `pic`, `dept_id`, `profile`) VALUES
(3, 8, '03010110101', '5wk', 'doctor_74073.jpg', 2, 'MBBS'),
(4, 9, '03043223876', '6kh', 'doctor_19808.jpg', 3, 'Surgon'),
(5, 10, '03060110405', '8tw', 'doctor_83677.jpg', 2, 'Ear Surgeon');

-- --------------------------------------------------------

--
-- Table structure for table `lab_tests`
--

CREATE TABLE `lab_tests` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `rate` double NOT NULL,
  `template` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_tests`
--

INSERT INTO `lab_tests` (`id`, `title`, `rate`, `template`, `created_at`, `is_active`) VALUES
(2, 'CBC (Manual)', 251, 'CBC_(Manual).doc', '2020-06-15 17:15:46', 1),
(3, 'CBC (Analyzer)', 400, 'CBC_(Analyzer).doc', '2020-06-15 17:21:06', -1),
(5, 'Z.N Stain', 200, 'Z_N_Stain.doc', '2020-06-15 17:26:06', -1),
(7, 'HB %', 70, 'HB__.doc', '2020-06-15 17:35:46', -1),
(8, 'Sugar Test', 150, 'Sugar_Test.doc', '2020-06-15 20:44:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`, `profile`, `created_at`, `is_active`) VALUES
(1, 'Adeel Amir', '03060110405', 'adeel98amir@gmail.com', '1234', NULL, '2020-09-01 21:36:53', -1),
(2, 'test testing', '0201101010', 'testing@gmail.com', '123', NULL, '2020-09-01 21:48:12', -1),
(3, 'test testing', '0201101010', 'testing@gmail.com', '123', NULL, '2020-09-01 21:48:52', -1),
(4, 'testing', '03043223876', 'testing@gmail.com', '12345678', NULL, '2020-09-03 05:52:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE `users_tb` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_type` varchar(255) NOT NULL COMMENT '1- admin 2- receptionist 3- doctor 4- labtechnician',
  `active_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tb`
--

INSERT INTO `users_tb` (`user_id`, `full_name`, `user_email`, `user_password`, `user_type`, `active_status`, `created_at`) VALUES
(1, 'Ali Hospital', 'admin', '5e8667a439c68f5145dd2fcbecf02209', 'admin', 1, '2020-06-06 16:33:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_tests`
--
ALTER TABLE `lab_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lab_tests`
--
ALTER TABLE `lab_tests`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
