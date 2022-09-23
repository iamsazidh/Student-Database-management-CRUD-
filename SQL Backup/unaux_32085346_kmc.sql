-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.byetcluster.com
-- Generation Time: Sep 23, 2022 at 06:09 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_32085346_kmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `k-31`
--

CREATE TABLE `k-31` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `e_name` varchar(200) NOT NULL,
  `b_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `father_e_name` varchar(200) NOT NULL,
  `father_b_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `father_nid` varchar(200) NOT NULL,
  `mother_e_name` varchar(200) NOT NULL,
  `mother_b_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mother_nid` varchar(200) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `ad_roll` varchar(200) NOT NULL,
  `ad_num` varchar(200) NOT NULL,
  `ad_total_number` varchar(200) NOT NULL,
  `ad_merit` int(11) NOT NULL,
  `quota` varchar(200) NOT NULL,
  `birth_reg_num` varchar(200) NOT NULL,
  `national_num` varchar(200) NOT NULL,
  `ssc_ins` varchar(200) NOT NULL,
  `ssc_num_4th` varchar(200) NOT NULL,
  `ssc_num` varchar(200) NOT NULL,
  `ssc_pas_year` varchar(200) NOT NULL,
  `ssc_board` varchar(200) NOT NULL,
  `ssc_center` varchar(200) NOT NULL,
  `ssc_roll` varchar(200) NOT NULL,
  `ssc_reg_num` varchar(200) NOT NULL,
  `ssc_scholar` varchar(200) NOT NULL,
  `hsc_ins` varchar(200) NOT NULL,
  `hsc_num_4th` varchar(200) NOT NULL,
  `hsc_num` varchar(200) NOT NULL,
  `hsc_pas_year` varchar(200) NOT NULL,
  `hsc_board` varchar(200) NOT NULL,
  `hsc_center` varchar(200) NOT NULL,
  `hsc_roll` varchar(200) NOT NULL,
  `hsc_reg_num` varchar(200) NOT NULL,
  `hsc_scholar` varchar(200) NOT NULL,
  `per_add_village` varchar(200) NOT NULL,
  `per_add_post` varchar(200) NOT NULL,
  `per_add_gpo` varchar(200) NOT NULL,
  `per_add_upozilla` varchar(200) NOT NULL,
  `per_add_zilla` varchar(200) NOT NULL,
  `pre_add_village` varchar(200) NOT NULL,
  `pre_add_post` varchar(200) NOT NULL,
  `pre_add_gpo` varchar(200) NOT NULL,
  `pre_add_upozilla` varchar(200) NOT NULL,
  `pre_add_zilla` varchar(200) NOT NULL,
  `gurdian_s_rel` varchar(200) NOT NULL,
  `gur_name` varchar(200) NOT NULL,
  `mob_num` varchar(200) NOT NULL,
  `gur_mob_num` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `father_ocu` varchar(200) NOT NULL,
  `father_sal` varchar(200) NOT NULL,
  `per_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sub_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ad_date` date NOT NULL,
  `ip_address` varchar(250) NOT NULL,
  `device address` text NOT NULL,
  `session` varchar(200) NOT NULL,
  `height` varchar(200) NOT NULL,
  `gurdian_f_rel` varchar(200) NOT NULL,
  `gur_add` varchar(200) NOT NULL,
  `gur_sal` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k-31`
--

INSERT INTO `k-31` (`id`, `roll`, `e_name`, `b_name`, `father_e_name`, `father_b_name`, `father_nid`, `mother_e_name`, `mother_b_name`, `mother_nid`, `birth_date`, `gender`, `blood_group`, `religion`, `ad_roll`, `ad_num`, `ad_total_number`, `ad_merit`, `quota`, `birth_reg_num`, `national_num`, `ssc_ins`, `ssc_num_4th`, `ssc_num`, `ssc_pas_year`, `ssc_board`, `ssc_center`, `ssc_roll`, `ssc_reg_num`, `ssc_scholar`, `hsc_ins`, `hsc_num_4th`, `hsc_num`, `hsc_pas_year`, `hsc_board`, `hsc_center`, `hsc_roll`, `hsc_reg_num`, `hsc_scholar`, `per_add_village`, `per_add_post`, `per_add_gpo`, `per_add_upozilla`, `per_add_zilla`, `pre_add_village`, `pre_add_post`, `pre_add_gpo`, `pre_add_upozilla`, `pre_add_zilla`, `gurdian_s_rel`, `gur_name`, `mob_num`, `gur_mob_num`, `email`, `father_ocu`, `father_sal`, `per_id`, `password`, `sub_time`, `ad_date`, `ip_address`, `device address`, `session`, `height`, `gurdian_f_rel`, `gur_add`, `gur_sal`) VALUES
(14, 0, 'ADMIN', 'à¦à¦¡à¦®à¦¿à¦¨', '', '', '', '', '', '', '2069-12-31', '', '	', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-07-24 13:27:05', '2069-12-31', 'User IP - 116.58.201.106', 'Mozilla/5.0 (Linux; Android 9; Redmi 6A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `k-31-foreigner`
--

CREATE TABLE `k-31-foreigner` (
  `id` int(11) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `e_name` varchar(200) NOT NULL,
  `father_e_name` varchar(200) NOT NULL,
  `mother_e_name` varchar(200) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `quota` varchar(200) NOT NULL,
  `national_num` varchar(200) NOT NULL,
  `ssc_ins` varchar(200) NOT NULL,
  `ssc_num` varchar(200) NOT NULL,
  `ssc_pas_year` varchar(200) NOT NULL,
  `ssc_roll` varchar(200) NOT NULL,
  `ssc_reg_num` varchar(200) NOT NULL,
  `hsc_ins` varchar(200) NOT NULL,
  `hsc_num` varchar(200) NOT NULL,
  `hsc_pas_year` varchar(200) NOT NULL,
  `hsc_roll` varchar(200) NOT NULL,
  `hsc_reg_num` varchar(200) NOT NULL,
  `ssc_deg` varchar(200) NOT NULL,
  `hsc_deg` varchar(200) NOT NULL,
  `gur_name` varchar(200) NOT NULL,
  `mob_num` varchar(200) NOT NULL,
  `gur_mob_num` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `father_ocu` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sub_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ad_date` date NOT NULL,
  `ip_address` varchar(250) NOT NULL,
  `device address` text NOT NULL,
  `session` varchar(200) NOT NULL,
  `height` varchar(200) NOT NULL,
  `gurdian_f_rel` varchar(200) NOT NULL,
  `gur_add` varchar(200) NOT NULL,
  `mother_ocu` varchar(200) NOT NULL,
  `pre_add` text NOT NULL,
  `per_add` text NOT NULL,
  `passport_no` varchar(200) NOT NULL,
  `date_issue` date NOT NULL,
  `date_expiry` date NOT NULL,
  `visa_no` varchar(200) NOT NULL,
  `arrival_date` date NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k-31-foreigner`
--

INSERT INTO `k-31-foreigner` (`id`, `roll`, `e_name`, `father_e_name`, `mother_e_name`, `birth_date`, `gender`, `blood_group`, `religion`, `quota`, `national_num`, `ssc_ins`, `ssc_num`, `ssc_pas_year`, `ssc_roll`, `ssc_reg_num`, `hsc_ins`, `hsc_num`, `hsc_pas_year`, `hsc_roll`, `hsc_reg_num`, `ssc_deg`, `hsc_deg`, `gur_name`, `mob_num`, `gur_mob_num`, `email`, `father_ocu`, `password`, `sub_time`, `ad_date`, `ip_address`, `device address`, `session`, `height`, `gurdian_f_rel`, `gur_add`, `mother_ocu`, `pre_add`, `per_add`, `passport_no`, `date_issue`, `date_expiry`, `visa_no`, `arrival_date`, `country`) VALUES
(3, '', 'ADMIN', '', '', '2069-12-31', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '2069-12-31', 'User IP - 103.164.51.244', 'Mozilla/5.0 (Linux; Android 11; SM-T295) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '', '', '', '', '', '', '', '', '2069-12-31', '2069-12-31', '', '2069-12-31', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `k-31`
--
ALTER TABLE `k-31`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `k-31-foreigner`
--
ALTER TABLE `k-31-foreigner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `k-31`
--
ALTER TABLE `k-31`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `k-31-foreigner`
--
ALTER TABLE `k-31-foreigner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
