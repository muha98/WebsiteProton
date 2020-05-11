-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 05:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proton`
--

-- --------------------------------------------------------

--
-- Table structure for table `homeartikel`
--

CREATE TABLE `homeartikel` (
  `id_artikel` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeartikel`
--

INSERT INTO `homeartikel` (`id_artikel`, `foto`, `judul`, `isi`) VALUES
(1, 'img/gambar5.jpg', 'Simulasi UNBK Tahun 2018', 'ARTIKEL 1'),
(2, 'img/gambar5.jpg', 'Simulasi UNBK Tahun 2019', 'ARTIKEL 2'),
(3, 'img/gambar5.jpg', 'Simulasi UNBK Tahun 2020', 'ARTIKEL 3');

-- --------------------------------------------------------

--
-- Table structure for table `homecarousel`
--

CREATE TABLE `homecarousel` (
  `id_carousel` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homecarousel`
--

INSERT INTO `homecarousel` (`id_carousel`, `gambar`) VALUES
(1, 'img/slide2.jpg'),
(2, 'img/slide1.jpg'),
(3, 'img/slide2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homevideo`
--

CREATE TABLE `homevideo` (
  `id_video` int(11) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homevideo`
--

INSERT INTO `homevideo` (`id_video`, `video`) VALUES
(1, 'https://www.youtube.com/embed/waqhwXWtdR4'),
(2, 'https://www.youtube.com/embed/waqhwXWtdR4'),
(3, 'https://www.youtube.com/embed/waqhwXWtdR4');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `foto`) VALUES
(1, 'img/p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `biaya` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `kategori`, `mapel`, `link`) VALUES
(1, 'SD', 'Bahasa Indonesia', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(2, 'SD', 'Bahasa Inggris', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(3, 'SD', 'IPA', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(4, 'SD', 'IPS', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(5, 'SD', 'PKN', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(6, 'SMP', 'Bahasa Indonesia', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(7, 'SMP', 'Bahasa Inggris', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(8, 'SMP', 'Matematika', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(9, 'SMP', 'IPA', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(10, 'SMP', 'IPS', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(11, 'SMP', 'PKN', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(12, 'SMP', 'PAI', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(13, 'SMA IPA', 'PKN', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(14, 'SMA IPA', 'TPS', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(15, 'SMA IPA', 'Matematika', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(16, 'SMA IPA', 'Biologi', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(17, 'SMA IPA', 'Fisika', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(18, 'SMA IPA', 'Kimia', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(19, 'SMA IPA', 'PAI', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(20, 'SMA IPS', 'PKN', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(21, 'SMA IPS', 'TPS', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(22, 'SMA IPS', 'Matematika', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(23, 'SMA IPS', 'Geografi', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(24, 'SMA IPS', 'Sejarah', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(25, 'SMA IPS', 'Ekonomi', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4'),
(26, 'SMA IPS', 'PAI', 'https://drive.google.com/drive/folders/1QnvKOx21nbd2ie4L-i06Uo4DQ75f8_A4');

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
(3, '2020_04_06_145624_tambah_is_admin', 2),
(4, '2020_04_06_172110_create_roles_table', 3),
(5, '2020_04_27_152151_add_field_socialite_to_users_table', 4);

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
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` varchar(20) NOT NULL,
  `nama_pengajar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(20) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` varchar(20) NOT NULL,
  `nama_staff` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `nama_staff`, `email`) VALUES
('141170011', 'STAFF1', 'STAFF1@gmail.com'),
('14117040', 'Yustika Ayu', 'Yustika@yahoo.com'),
('14117065', 'Titis Prawilas', 'Titis@gmail.com'),
('14117122', 'Talitha Bathari', 'Tebe@gmail.com'),
('14117133', 'Rizqun', 'Rizqun@gmail.com'),
('14117162', 'Muha', 'muha@gmail.com'),
('14117179', 'Cikal Arvi Yuliawan', 'cikal@yahoo.com'),
('14117183', 'bany', 'bany@gmail.com'),
('22', 'staff2', 'staff2@gmail.com'),
('444', 'staff4@gmail.com', 'staff4@gmail.com'),
('99', 'shofia camilla', 'shofiacamilla@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `socialite_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialite_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `socialite_id`, `socialite_name`, `photo`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'muha', 'muhasfk123@gmail.com', '', NULL, '$2y$10$yZWvz9EcHFY69XL2FqcXju9gmW3esEud1aaidYezyUo4X.X2qA8SO', NULL, '2020-04-01 20:16:41', '2020-04-01 20:16:41'),
(2, NULL, NULL, NULL, 'Rizqun Rizal Ahsani', 'rizqun27@gmail.com', '', NULL, '$2y$10$7hwIL05mngEZYKZKeyv28.toRVgn8Sd8hbcL2jSo8pWfjcEX0cRgW', NULL, '2020-04-02 04:33:07', '2020-04-02 04:33:07'),
(3, NULL, NULL, NULL, 'Ricegun', 'second_kun@yahoo.com', 'admin', NULL, '$2y$10$MHO3KRHco0DDKcGfcgRmquZAQ5QhAVNMz05us2xvAzDUle3jeJxCe', 'FPEiMD0bMLchPmFwHEiqlYYMtuk6j8DbdoFY4N7wVdbpHYcH0BGJcWzlDH6P', '2020-04-03 19:17:25', '2020-04-03 19:17:25'),
(4, NULL, NULL, NULL, 'Yustika', 'yustika123@gmail.com', '', NULL, '$2y$10$NlrbUy2g0Af9amEkkxxZ.efrffTiL.Ky/r5NrDMSrIzezRwSH3e/G', NULL, '2020-04-07 00:44:35', '2020-04-07 00:44:35'),
(5, NULL, NULL, NULL, 'Titis', 'titis@gmail.com', NULL, NULL, '$2y$10$VnS4FJa1aiU4Gd7EMSlGQ.KvqKUmqPo/af3R7WWFb0SeIxRyHBpaC', NULL, '2020-04-08 18:21:50', '2020-04-08 18:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `kategori`, `mapel`, `link`) VALUES
(1, 'SD', 'PAI', 'https://www.youtube.com/embed/J1pPATZ3HVU'),
(2, 'SD', 'IPA', 'https://www.youtube.com/embed/aUKKZ9vlft0'),
(3, 'SD', 'IPS', 'https://www.youtube.com/embed/OSv_Wzp9crg'),
(4, 'SD', 'Bahasa Indonesia', 'https://www.youtube.com/embed/AbfnA183FtU'),
(5, 'SD', 'PKN', 'https://www.youtube.com/embed/oj07JnmAR4Q'),
(6, 'SMP', 'PAI', 'https://www.youtube.com/embed/azx86hZML-g'),
(7, 'SMP', 'PKN', 'https://www.youtube.com/embed/6RT9iKlFybQ'),
(8, 'SMP', 'Bahasa Indonesia', 'https://www.youtube.com/embed/mSt3HH-Fpi4'),
(9, 'SMP', 'Bahasa Inggris', 'https://www.youtube.com/embed/t8KyzOiP1-Q'),
(10, 'SMP', 'IPA', 'https://www.youtube.com/embed/-bKH3bSk0Nc'),
(11, 'SMP', 'Matematika', 'https://www.youtube.com/embed/XLjuybLmzr0'),
(12, 'SMP', 'IPS', 'https://www.youtube.com/embed/rr72UwNsOMs'),
(13, 'SMA IPA', 'PAI', 'https://www.youtube.com/embed/a2cfgxZ5qrw'),
(14, 'SMA IPA', 'PKN', 'https://www.youtube.com/embed/2jP-OBQSzho'),
(15, 'SMA IPA', 'Biologi', 'https://www.youtube.com/embed/FGC9gL7Ta2A'),
(16, 'SMA IPA', 'Fisika', 'https://www.youtube.com/embed/hFNT_c2lqBs'),
(17, 'SMA IPA', 'Kimia', 'https://www.youtube.com/embed/EksdEntiHMg'),
(18, 'SMA IPA', 'Matematika', 'https://www.youtube.com/embed/2DjVbbc_d1w'),
(19, 'SMA IPA', 'TPS', 'https://www.youtube.com/embed/-M7y8MJgQLg'),
(20, 'SMA IPS', 'PAI', 'https://www.youtube.com/embed/a2cfgxZ5qrw'),
(21, 'SMA IPS', 'PKN', 'https://www.youtube.com/embed/2jP-OBQSzho'),
(22, 'SMA IPS', 'Geografi', 'https://www.youtube.com/embed/2zqgimfW61o'),
(23, 'SMA IPS', 'Sejarah', 'https://www.youtube.com/embed/BS0Yjb8t5Xc'),
(24, 'SMA IPS', 'Ekonomi', 'https://www.youtube.com/embed/KmOHoKzWrn8'),
(25, 'SMA IPS', 'Matematika', 'https://www.youtube.com/embed/CFfXBXEO4lc'),
(26, 'SMA IPS', 'TPS', 'https://www.youtube.com/embed/-M7y8MJgQLg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homeartikel`
--
ALTER TABLE `homeartikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `homecarousel`
--
ALTER TABLE `homecarousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `homevideo`
--
ALTER TABLE `homevideo`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `fk_kategori` (`id_kategori`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homeartikel`
--
ALTER TABLE `homeartikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homecarousel`
--
ALTER TABLE `homecarousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homevideo`
--
ALTER TABLE `homevideo`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
