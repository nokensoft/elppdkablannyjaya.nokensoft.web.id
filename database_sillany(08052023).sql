-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 11:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silppd_janzen`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `katakunci` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distrik_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kepala_desa` varchar(255) DEFAULT NULL,
  `foto_kepala_desa` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto_kantor` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id`, `distrik_id`, `nama_desa`, `nama_kepala_desa`, `foto_kepala_desa`, `alamat`, `telp`, `email`, `foto_kantor`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kelurahan Bokon', '', NULL, 'Lanny Jaya.', '082112341234', 'kullrich@lowe.com', NULL, 'kelurahan-bokon', NULL, NULL),
(2, 2, 'Aniwo', '', NULL, 'Lanny Jaya.', '082112341234', 'bret.mante@hotmail.com', NULL, 'aniwo', NULL, NULL),
(3, 3, 'Dimba', '', NULL, 'Lanny Jaya.', '082112341234', 'adah.kerluke@breitenberg.com', NULL, 'dimba', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `distriks`
--

CREATE TABLE `distriks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_distrik` varchar(255) NOT NULL,
  `ibu_kota_distrik` varchar(255) NOT NULL,
  `nama_kepala_distrik` varchar(255) DEFAULT NULL,
  `foto_kepala_distrik` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto_kantor` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distriks`
--

INSERT INTO `distriks` (`id`, `nama_distrik`, `ibu_kota_distrik`, `nama_kepala_distrik`, `foto_kepala_distrik`, `alamat`, `telp`, `email`, `foto_kantor`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tiom', 'Bokon', 'Miter Wanimbo', NULL, 'Lanny Jaya.', '082112341234', 'rgrady@ferry.com', NULL, NULL, NULL, NULL),
(2, 'Pirime', 'Umbanume', 'Mael Wanimbo, AMd', NULL, 'Lanny Jaya.', '082112341234', 'lynch.ansley@yost.com', NULL, NULL, NULL, NULL),
(3, 'Dimba', 'Dimba', 'Yuluerius Kogoya, S.Sos', NULL, 'Lanny Jaya.', '082112341234', 'bart88@yahoo.com', NULL, NULL, NULL, NULL),
(4, 'Gamelia', 'Gamelia', 'Uragame Muni', NULL, 'Lanny Jaya.', '082112341234', 'lenore.koelpin@white.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dprds`
--

CREATE TABLE `dprds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `ttl` varchar(255) DEFAULT NULL,
  `nama_partai` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dprds`
--

INSERT INTO `dprds` (`id`, `nama_lengkap`, `jabatan`, `nik`, `alamat`, `ttl`, `nama_partai`, `pendidikan`, `foto`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tanus Kogoya', 'Ketua DPR', '1234567891', 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.', 'tempat lahir, tt/bb/yyyy', 'nama partai', 'tingkatan pendidikan', NULL, NULL, NULL, NULL),
(2, 'Wondien Yikwa', 'Wakil Ketua', '1234567892', 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.', 'tempat lahir, tt/bb/yyyy', 'nama partai', 'tingkatan pendidikan', NULL, NULL, NULL, NULL),
(3, 'nama lengkap', 'jabatan', '1234567893', 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.', 'tempat lahir, tt/bb/yyyy', 'nama partai', 'tingkatan pendidikan', NULL, NULL, NULL, NULL),
(4, 'nama lengkap', 'jabatan', '1234567894', 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.', 'tempat lahir, tt/bb/yyyy', 'nama partai', 'tingkatan pendidikan', NULL, NULL, NULL, NULL),
(5, 'nama lengkap', 'jabatan', '1234567895', 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.', 'tempat lahir, tt/bb/yyyy', 'nama partai', 'tingkatan pendidikan', NULL, NULL, NULL, NULL),
(6, 'nama lengkap', 'jabatan', '1234567896', 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.', 'tempat lahir, tt/bb/yyyy', 'nama partai', 'tingkatan pendidikan', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `katakunci` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `alamat_file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambars`
--

CREATE TABLE `gambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `alamat_file` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gambars`
--

INSERT INTO `gambars` (`id`, `nama_file`, `alamat_file`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Logo Pemerintah Daerah Kabupaten Lanny Jaya', 'default-logo.png', 'ZxDCZujbIFWe0710.1', NULL, NULL),
(2, 'Favicon', 'favicon.png', 'ZxDCZujbIFWe0710.2', NULL, NULL),
(3, 'Foto Kepala Daerah', 'default-user1.png', 'ZxDCZujbIFWe0710.3', NULL, NULL),
(4, 'Foto Wakil Kepala Daerah', 'default-user2.png', 'ZxDCZujbIFWe0710.4', NULL, NULL),
(5, 'Foto Sekretaris Daerah', 'default-user3.png', 'ZxDCZujbIFWe0710.5', NULL, NULL),
(6, 'Logo Small Dark', 'default-logo.png', 'ZxDCZujbIFWe0710.5', NULL, NULL),
(7, 'Logo Large Dark', 'default-logo.png', 'ZxDCZujbIFWe0710.6', NULL, NULL),
(8, 'Logo Small Light', 'default-logo.png', 'ZxDCZujbIFWe0710.7', NULL, NULL),
(9, 'Logo Large Light', 'default-logo.png', 'ZxDCZujbIFWe0710.7', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gambar_artikels`
--

CREATE TABLE `gambar_artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `artikel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `halamen`
--

CREATE TABLE `halamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `katakunci` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ikks`
--

CREATE TABLE `ikks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `urusan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `no_ikk` varchar(255) DEFAULT NULL,
  `ikk` varchar(255) DEFAULT NULL,
  `rumus` varchar(255) DEFAULT NULL,
  `ket_jml1` varchar(255) DEFAULT NULL,
  `jml1` varchar(255) DEFAULT NULL,
  `ket_jml2` varchar(255) DEFAULT NULL,
  `jml2` varchar(255) DEFAULT NULL,
  `capaian_kinerja` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` enum('review','revisi','approved') DEFAULT 'review',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ikks`
--

INSERT INTO `ikks` (`id`, `user_id`, `urusan_id`, `no_ikk`, `ikk`, `rumus`, `ket_jml1`, `jml1`, `ket_jml2`, `jml2`, `capaian_kinerja`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '1.c.7', 'Tingkat Kemantapan Jalan Kabupaten ', 'Panjang jalan kabupaten dalam kondisi mantap (baik dan sedang) ------------------------------------------------------------ x 100 % Panjang seluruh jalan kabupaten di daerah tersebut ', 'Panjang jalan kabupaten dalam kondisi mantap (baik dan sedang)', '11.927', 'Panjang seluruh jalan kabupaten di daerah tersebut', '235', '', 'Dinas Pekerjaan Umum', 'review', NULL, NULL),
(2, 3, 1, '1.a.2', 'Persentase RS Rujukan tingkat Kabupaten yang terakreditasi', 'Jumlah RS Rujukan yang terakreditasi ---------------------------- x 100 % 1/1) x 100 % Jumlah RS di Kabupaten Lanny Jaya', 'Jumlah RS Rujukan yang terakreditasi', '1', 'Jumlah anak usia 7-12 tahun Kabupaten Lanny Jaya', '1', '', 'Dinas Kesehatan', 'review', NULL, NULL),
(3, 3, 1, '1.a.1', 'Rasio daya tampung RS terhadap jumlah penduduk', 'Jumlah daya tampung rumah sakit rujukan ------------------ x 100 % (247/201.835) x 100 % = 0,005 Jumlah Penduduk Kabupaten Lanny Jaya', 'Jumlah daya tampung rumah sakit rujukan', '247', 'Jumlah Penduduk Kabupaten Lanny Jaya', '201875', '', 'Dinas Kesehatan', 'review', NULL, NULL),
(4, 2, 3, '1.a.1', 'Tingkat Partisipasi warga negara usia 5-6 tahun yang berpartisipasi dalam PAUD', 'Jumlah anak usia 5 - 6 tahun yang sudah tamat atau sedang belajar disatuan PAUD ----------------------- x 100 % (7.012/10.456) x 100 % = 67,06 Jumlah anak usia 5 – 6 tahun Kabupaten Lanny Jaya', 'Jumlah anak usia 5 - 6 tahun yang sudah tamat atau sedang belajar disatuan PAUD ', '7012', 'Jumlah anak usia 5 – 6 tahun Kabupaten Lanny Jaya', '10456', '', 'Dinas Pendidikan dan Dinas Kependuduk an & Capil', 'review', NULL, NULL),
(5, 3, 2, '1.a.2', 'Tingkat Partisipasi warga negara usia 7-12 tahun yang berpartisipasi dalam Pendidikan Dasar', 'Jumlah anak usia 7-12 tahun yang sudah tamat atau sedang belajar di Sekolah Dasar (SD, MI dan bentuk lain yang sederajat) ---------------------- x 100 % (13.979/15.359) x 100 % = 91,01 Jumlah anak usia 7-12 tahun Kabupaten Lanny Jaya', 'Jumlah anak usia 7-12 tahun yang sudah tamat atau sedang belajar di Sekolah Dasar (SD, MI dan bentuk  lain yang sederajat)', '13979', 'Jumlah anak usia 7-12 tahun Kabupaten Lanny Jaya', '15359', '', 'Dinas Pendidikan dan Dinas Kependuduk an & Capil', 'review', NULL, NULL),
(6, NULL, 4, '1.b.1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'review', '2023-05-07 23:04:25', '2023-05-07 23:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `alamat_file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `nama_file`, `alamat_file`, `created_at`, `updated_at`) VALUES
(1, 'Logo Pemerintah Daerah Kabupaten Lanny Jaya', 'file/pengaturan/logo_pemerintah_daerah_lanny_jaya.png', NULL, NULL),
(2, 'Favicon', 'file/pengaturan/favicon.png', NULL, NULL),
(3, 'Foto Kepala Daerah', 'file/pengaturan/user-biru.png', NULL, NULL),
(4, 'Foto Wakil Kepala Daerah', 'file/pengaturan/user-merah.png', NULL, NULL),
(5, 'Foto Sekretaris Daerah', 'file/pengaturan/user-orange.png', NULL, NULL),
(6, 'Nama File', 'file/pengaturan/image2.png', NULL, NULL),
(7, 'Nama File', 'file/pengaturan/image1.png', NULL, NULL),
(8, 'Nama File', 'file/pengaturan/image2.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `katakunci` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `subjek` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lppd_pelaporan`
--

CREATE TABLE `lppd_pelaporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `cover_file` varchar(255) DEFAULT NULL,
  `babi` varchar(255) DEFAULT NULL,
  `babi_file` varchar(255) DEFAULT NULL,
  `babii` varchar(255) DEFAULT NULL,
  `babii_file` varchar(255) DEFAULT NULL,
  `babiii` varchar(255) DEFAULT NULL,
  `babiii_file` varchar(255) DEFAULT NULL,
  `babiv` varchar(255) DEFAULT NULL,
  `babiv_file` varchar(255) DEFAULT NULL,
  `babv` varchar(255) DEFAULT NULL,
  `babv_file` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `lampiran_file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lppd_pelaporan`
--

INSERT INTO `lppd_pelaporan` (`id`, `tahun`, `cover`, `cover_file`, `babi`, `babi_file`, `babii`, `babii_file`, `babiii`, `babiii_file`, `babiv`, `babiv_file`, `babv`, `babv_file`, `lampiran`, `lampiran_file`, `created_at`, `updated_at`) VALUES
(1, '2023', 'COVER', '', 'BAB I', '', 'BAB II', '', 'BAB III', '', 'BAB IV', '', 'BAB V', '', 'LAMPIRAN', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `katakunci` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(138, '2023_04_12_160615_distrik', 1),
(139, '2023_04_12_170949_desa', 1),
(414, '2023_05_05_032119_images', 2),
(1027, '2014_10_12_000000_create_users_table', 3),
(1028, '2014_10_12_100000_create_password_resets_table', 3),
(1029, '2019_08_19_000000_create_failed_jobs_table', 3),
(1030, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(1031, '2023_01_28_003629_create_permission_tables', 3),
(1032, '2023_01_28_005118_create_products_table', 3),
(1033, '2023_01_29_002058_create_sliders_table', 3),
(1034, '2023_02_02_032946_create_kategoris_table', 3),
(1035, '2023_02_02_040431_create_artikels_table', 3),
(1036, '2023_02_02_145115_create_gambar_artikels_table', 3),
(1037, '2023_02_03_151535_create_halamen_table', 3),
(1038, '2023_02_03_151554_create_banners_table', 3),
(1039, '2023_02_03_151657_create_albums_table', 3),
(1040, '2023_02_03_151707_create_fotos_table', 3),
(1041, '2023_02_03_151717_create_videos_table', 3),
(1042, '2023_02_03_151803_create_kontaks_table', 3),
(1043, '2023_02_03_151831_create_metas_table', 3),
(1044, '2023_02_03_153554_create_sistems_table', 3),
(1045, '2023_02_03_154009_create_people_table', 3),
(1046, '2023_02_03_223106_create_rekanans_table', 3),
(1047, '2023_02_03_223831_create_faqs_table', 3),
(1048, '2023_04_13_013118_pelaporan', 3),
(1049, '2023_04_13_081311_pengaturan', 3),
(1050, '2023_04_21_182852_profildaerah', 3),
(1051, '2023_04_23_194516_create_perangkat_daerahs_table', 3),
(1052, '2023_04_24_165026_create_ikks_table', 3),
(1053, '2023_04_25_102256_create_dprds_table', 3),
(1054, '2023_05_01_114851_create_distriks_table', 3),
(1055, '2023_05_01_114956_create_desas_table', 3),
(1056, '2023_05_05_032119_gambar', 3),
(1057, '2023_05_07_145203_urusans_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_situs` varchar(255) DEFAULT NULL,
  `deskripsi_situs` varchar(255) DEFAULT NULL,
  `logo_sm_light` varchar(255) DEFAULT NULL,
  `logo_sm_dark` varchar(255) DEFAULT NULL,
  `logo_lg_light` varchar(255) DEFAULT NULL,
  `logo_lg_dark` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `termsconditions` varchar(255) DEFAULT NULL,
  `footerinformation` varchar(255) DEFAULT NULL,
  `tentang_aplikasi` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `judul_situs`, `deskripsi_situs`, `logo_sm_light`, `logo_sm_dark`, `logo_lg_light`, `logo_lg_dark`, `favicon`, `termsconditions`, `footerinformation`, `tentang_aplikasi`, `created_at`, `updated_at`) VALUES
(1, 'SILANNY', 'Sistem Informasi Laporan Penyelenggaraan Pengelolaan Daerah', 'logo-small-light.png', 'logo-small-dark.png', 'logo-large-light.png', 'logo-large-dark.png', 'favicon.png', '', '2023 © SISTEM INFORMASI LAPORAN PENYELENGGARAAN PEMERINTAH DAERAH, KABUPATEN LANNY JAYA.', '<p>Aplikas SIPPID Kabupaten Lanny Jaya dibuat untuk mempermudah Pemerintah Kabupaten Lanny Jaya dalam mengumpulan dan mengelola LPPD secara online.</p> <p>Sistem ini digunakan oleh Pemerintah Daerah Kabupaten Lanny Jaya dengan sistem basis data (database) yang terpusat agar memudahkan petugas dan pejabat dalam mengelola data. Dengan sistem basis data secara online dan terpusat, membuat proses penyampaikan laporan kinerja lebih efisien dan konsisten. Selain itu, data tersebut juga mudah diakses dari mana saja dan kapan saja.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `devisi` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perangkat_daerahs`
--

CREATE TABLE `perangkat_daerahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `tipe_kantor` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jumlah_pegawai` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `nama_pimpinan` varchar(255) DEFAULT NULL,
  `foto_gedung` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perangkat_daerahs`
--

INSERT INTO `perangkat_daerahs` (`id`, `nama_organisasi`, `tipe_kantor`, `alamat`, `jumlah_pegawai`, `status`, `nama_pimpinan`, `foto_gedung`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Dinas Kesehatan', NULL, 'Tiom, Lanny Jaya', NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(2, 'Dinas Pendidikan dan Kebudayaan', NULL, 'Tiom, Lanny Jaya', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(3, 'Dinas Pekerjaan Umum', NULL, 'Tiom, Lanny Jaya', NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profildaerah`
--

CREATE TABLE `profildaerah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemda_namainstansi` varchar(255) DEFAULT NULL,
  `pemda_lambang` varchar(255) DEFAULT NULL,
  `pemda_peta` varchar(255) DEFAULT NULL,
  `kepala_nama` varchar(255) DEFAULT NULL,
  `kepala_nik` varchar(255) DEFAULT NULL,
  `kepala_tgl_lahir` varchar(255) DEFAULT NULL,
  `kepala_tgl_pelantikan` varchar(255) DEFAULT NULL,
  `kepala_no_sk` varchar(255) DEFAULT NULL,
  `kepala_file_sk` varchar(255) DEFAULT NULL,
  `kepala_asal_partai` varchar(255) DEFAULT NULL,
  `kepala_visi_misi` varchar(255) DEFAULT NULL,
  `kepala_riwayat` varchar(255) DEFAULT NULL,
  `kepala_foto` varchar(255) DEFAULT NULL,
  `wakil_nama` varchar(255) DEFAULT NULL,
  `wakil_nik` varchar(255) DEFAULT NULL,
  `wakil_tgl_lahir` varchar(255) DEFAULT NULL,
  `wakil_tgl_pelantikan` varchar(255) DEFAULT NULL,
  `wakil_no_sk` varchar(255) DEFAULT NULL,
  `wakil_file_sk` varchar(255) DEFAULT NULL,
  `wakil_asal_partai` varchar(255) DEFAULT NULL,
  `wakil_visi_misi` varchar(255) DEFAULT NULL,
  `wakil_riwayat` varchar(255) DEFAULT NULL,
  `wakil_foto` varchar(255) DEFAULT NULL,
  `sekretaris_nama` varchar(255) DEFAULT NULL,
  `sekretaris_nik` varchar(255) DEFAULT NULL,
  `sekretaris_nip` varchar(255) DEFAULT NULL,
  `sekretaris_telp` varchar(255) DEFAULT NULL,
  `sekretaris_pangkat` varchar(255) DEFAULT NULL,
  `sekretaris_golongan` varchar(255) DEFAULT NULL,
  `sekretaris_tgl_lahir` varchar(255) DEFAULT NULL,
  `sekretaris_no_sk` varchar(255) DEFAULT NULL,
  `sekretaris_file_sk` varchar(255) DEFAULT NULL,
  `sekretaris_tmt` varchar(255) DEFAULT NULL,
  `sekretaris_foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profildaerah`
--

INSERT INTO `profildaerah` (`id`, `pemda_namainstansi`, `pemda_lambang`, `pemda_peta`, `kepala_nama`, `kepala_nik`, `kepala_tgl_lahir`, `kepala_tgl_pelantikan`, `kepala_no_sk`, `kepala_file_sk`, `kepala_asal_partai`, `kepala_visi_misi`, `kepala_riwayat`, `kepala_foto`, `wakil_nama`, `wakil_nik`, `wakil_tgl_lahir`, `wakil_tgl_pelantikan`, `wakil_no_sk`, `wakil_file_sk`, `wakil_asal_partai`, `wakil_visi_misi`, `wakil_riwayat`, `wakil_foto`, `sekretaris_nama`, `sekretaris_nik`, `sekretaris_nip`, `sekretaris_telp`, `sekretaris_pangkat`, `sekretaris_golongan`, `sekretaris_tgl_lahir`, `sekretaris_no_sk`, `sekretaris_file_sk`, `sekretaris_tmt`, `sekretaris_foto`, `created_at`, `updated_at`) VALUES
(1, 'Pemerintah Kabupaten Lanny Jaya', 'default.png', 'default.png', 'kepala_nama', 'kepala_nik', 'kepala_tgl_lahir', 'kepala_tgl_pelantikan', 'kepala_no_sk', 'kepala_file_sk', 'kepala_asal_partai', 'kepala_visi_misi', 'kepala_riwayat', 'default.png', 'wakil_nama', 'wakil_nik', 'wakil_tgl_lahir', 'wakil_tgl_pelantikan', 'wakil_no_sk', 'wakil_file_sk', 'wakil_asal_partai', 'wakil_visi_misi', 'wakil_riwayat', 'default.png', 'sekretaris_nama', 'sekretaris_nik', 'sekretaris_nip', 'sekretaris_telp', 'sekretaris_pangkat', 'sekretaris_golongan', 'sekretaris_tgl_lahir', 'sekretaris_no_sk', 'sekretaris_file_sk', 'sekretaris_tmt', 'default.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distrik_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kepala_desa` varchar(255) DEFAULT NULL,
  `foto_kepala_desa` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto_kantor` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_desa`
--

INSERT INTO `profil_desa` (`id`, `distrik_id`, `nama_desa`, `nama_kepala_desa`, `foto_kepala_desa`, `alamat`, `telp`, `email`, `foto_kantor`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kelurahan Bokon', '', NULL, 'Lanny Jaya.', '082112341234', 'maegan.mraz@lueilwitz.com', NULL, NULL, NULL, NULL),
(2, 2, 'Aniwo', '', NULL, 'Lanny Jaya.', '082112341234', 'jaylen27@hotmail.com', NULL, NULL, NULL, NULL),
(3, 3, 'Dimba', '', NULL, 'Lanny Jaya.', '082112341234', 'hbosco@yahoo.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profil_distrik`
--

CREATE TABLE `profil_distrik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_distrik` varchar(255) NOT NULL,
  `ibu_kota_distrik` varchar(255) NOT NULL,
  `nama_kepala_distrik` varchar(255) DEFAULT NULL,
  `foto_kepala_distrik` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto_kantor` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_distrik`
--

INSERT INTO `profil_distrik` (`id`, `nama_distrik`, `ibu_kota_distrik`, `nama_kepala_distrik`, `foto_kepala_distrik`, `alamat`, `telp`, `email`, `foto_kantor`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tiom', 'Bokon', 'Miter Wanimbo', NULL, 'Lanny Jaya.', '082112341234', 'flo.hamill@yahoo.com', NULL, NULL, NULL, NULL),
(2, 'Pirime', 'Umbanume', 'Mael Wanimbo, AMd', NULL, 'Lanny Jaya.', '082112341234', 'ruthie23@gmail.com', NULL, NULL, NULL, NULL),
(3, 'Dimba', 'Dimba', 'Yuluerius Kogoya, S.Sos', NULL, 'Lanny Jaya.', '082112341234', 'stone.windler@yahoo.com', NULL, NULL, NULL, NULL),
(4, 'Gamelia', 'Gamelia', 'Uragame Muni', NULL, 'Lanny Jaya.', '082112341234', 'irving55@hotmail.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rekanans`
--

CREATE TABLE `rekanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', 'web', '2023-05-07 22:35:11', '2023-05-07 22:35:11'),
(2, 'opd', 'Perangkat Daerah', 'web', '2023-05-07 22:35:11', '2023-05-07 22:35:11'),
(3, 'supervisor', 'Supervisor', 'web', '2023-05-07 22:35:11', '2023-05-07 22:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sistems`
--

CREATE TABLE `sistems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemilik` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urusans`
--

CREATE TABLE `urusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_urusan` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `urusans`
--

INSERT INTO `urusans` (`id`, `judul_urusan`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kesehatan', 'kesehatan', NULL, NULL),
(2, 'Pekerjaan Umum', 'pekerjaan-umum', NULL, NULL),
(3, 'Pendidikan', 'pendidikan', NULL, NULL),
(4, 'Perumahan Rakyat', 'perumahan-rakyat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_desc` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `job_desc`, `email`, `email_verified_at`, `password`, `avatar`, `slug`, `last_seen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'admin@lannyjayakab.go.id', NULL, '$2y$10$Wxl3oZMkUwa92LrVNMiKx.VJ4rEvXP31yBByRu.CtySFlWLD8y8ju', 'assets/images/avatars/user.png', 'admin', '2023-05-07 23:48:49', NULL, '2023-05-07 22:35:11', '2023-05-07 23:48:49'),
(2, 'Dinas Pendidikan', NULL, 'dinaspendidikan@lannyjayakab.go.id', NULL, '$2y$10$rBLSDvow4r9fKtzplNSiD.dsKacEQQlRUJ.JEmh8pQ3l5Rj4leZi2', 'assets/images/avatars/user2.png', 'dinas-pendidikan', NULL, NULL, '2023-05-07 22:35:11', '2023-05-07 22:35:11'),
(3, 'Dinas Kesehatan', NULL, 'dinaskesehatan@lannyjayakab.go.id', NULL, '$2y$10$UhyF6qMOkBkwUKmNS/xCFOry04RLcTrsvbMOPpaEtbIlQPF9HauMy', 'assets/images/avatars/user3.png', 'dinas-kesehatan', NULL, NULL, '2023-05-07 22:35:11', '2023-05-07 22:35:11'),
(4, 'Dinas Pekerjaan Umum', NULL, 'dinaspu@lannyjayakab.go.id', NULL, '$2y$10$/C/YJ6EpW9ilTSsnSOSoS.VxOrU8Hn82iLYc08C1yiAkZhe3LYj92', 'assets/images/avatars/user3.png', 'dinas-pekerjaan-umum', NULL, NULL, '2023-05-07 22:35:11', '2023-05-07 22:35:11'),
(5, 'Supervisor', NULL, 'supervisor@lannyjayakab.go.id', NULL, '$2y$10$ufSxtWjs5vSEi19T8J3NcOntkp2oeJ.QeiFjf7AnjLE0/p.HqPrRG', 'assets/images/avatars/user3.png', 'supervisor', NULL, NULL, '2023-05-07 22:35:11', '2023-05-07 22:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `embed` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distriks`
--
ALTER TABLE `distriks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dprds`
--
ALTER TABLE `dprds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fotos_album_id_foreign` (`album_id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar_artikels`
--
ALTER TABLE `gambar_artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambar_artikels_artikel_id_foreign` (`artikel_id`);

--
-- Indexes for table `halamen`
--
ALTER TABLE `halamen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ikks`
--
ALTER TABLE `ikks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ikks_user_id_foreign` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lppd_pelaporan`
--
ALTER TABLE `lppd_pelaporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `people_no_unique` (`no`),
  ADD UNIQUE KEY `people_email_unique` (`email`),
  ADD UNIQUE KEY `people_phone_unique` (`phone`);

--
-- Indexes for table `perangkat_daerahs`
--
ALTER TABLE `perangkat_daerahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perangkat_daerahs_user_id_foreign` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profildaerah`
--
ALTER TABLE `profildaerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_distrik`
--
ALTER TABLE `profil_distrik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekanans`
--
ALTER TABLE `rekanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sistems`
--
ALTER TABLE `sistems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urusans`
--
ALTER TABLE `urusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distriks`
--
ALTER TABLE `distriks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dprds`
--
ALTER TABLE `dprds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gambar_artikels`
--
ALTER TABLE `gambar_artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `halamen`
--
ALTER TABLE `halamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ikks`
--
ALTER TABLE `ikks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lppd_pelaporan`
--
ALTER TABLE `lppd_pelaporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1058;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perangkat_daerahs`
--
ALTER TABLE `perangkat_daerahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profildaerah`
--
ALTER TABLE `profildaerah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil_distrik`
--
ALTER TABLE `profil_distrik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rekanans`
--
ALTER TABLE `rekanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sistems`
--
ALTER TABLE `sistems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urusans`
--
ALTER TABLE `urusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gambar_artikels`
--
ALTER TABLE `gambar_artikels`
  ADD CONSTRAINT `gambar_artikels_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ikks`
--
ALTER TABLE `ikks`
  ADD CONSTRAINT `ikks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `perangkat_daerahs`
--
ALTER TABLE `perangkat_daerahs`
  ADD CONSTRAINT `perangkat_daerahs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
