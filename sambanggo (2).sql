-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 12 Jun 2023 pada 04.57
-- Versi Server: 5.7.42-0ubuntu0.18.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sambanggo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `foto`, `created_at`, `updated_at`) VALUES
(15, 'Destinasi Wisata', 'destinasi-wisata', 'kategori-images/i2gJW8D4rG57o6CIaw0bOA4VfpFU7gbeUBHEJXkw.jpg', '2023-06-11 05:16:29', '2023-06-12 00:30:40'),
(16, 'Desa Wisata', 'desa-wisata', 'kategori-images/uJPcbHeqrdNyoh4gYUD8WrTLZB3BXvoPXDWmcvqP.jpg', '2023-06-11 13:12:21', '2023-06-12 00:30:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `event_name`, `category`, `event_image`, `ket`, `event_date`, `created_at`, `updated_at`) VALUES
(9, 'SAMBANGGO HEBOH BUAH', '2', NULL, '<div>Di dukung dengan Dana Keistimewaan, Dinas Pariwisata Kulon Progo, berkolaborasi dengan Dinas Pertanian dan Pangan Kabupaten Kulon Progo dalam acara Heboh Buah di Embung Tonogoro, Banjaroyo, Kalibawang. Program Sambanggo, menjadi program untuk memfasilitasi Embung Tonogoro untuk terus berkembang menjaga kebersihan demi kenyamanan wisatawan.<br><a href=\"https://youtu.be/byF-z0_tYmo\">https://youtu.be/byF-z0_tYmo</a></div>', '2023-02-05', '2023-06-10 14:17:01', '2023-06-10 14:32:44'),
(10, 'PENTAS KISKENDHA MRAHASWARA', '3', NULL, '<div>Pentas Sendratari Sugriwo Subali yang digelar di Amphiteatre Tonogoro, Banjaroyo dalam rangkaian Post Tour ASEAN Tourism Forum di Kulon Progo<a href=\"https://youtu.be/S6EH_A-GvsE\"><br><br>https://youtu.be/S6EH_A-GvsE</a></div>', '2023-02-06', '2023-06-10 14:30:53', '2023-06-10 14:30:53'),
(11, 'WAYANG WISATA DALAM RANGKA HPN', '3', NULL, '<div>Turut memeriahkan hari Pers Nasional, Wayang Wisata edisi Bendung Khayangan mengangkat tema seputar dampak hoax bagi wisata yang bersangkutan. Dihadiri oleh jajaran Forkompimda, insan Pers Kulon Progo yang tergabung dalam Paguyuban Wartawan Kulon Progo (PWK), dan juga warga sekitar Pendoworejo.<br><a href=\"https://youtu.be/b45t8PMRNZ0\">https://youtu.be/b45t8PMRNZ0</a></div>', '2023-02-09', '2023-06-10 14:36:18', '2023-06-10 14:36:38'),
(12, 'PENYAMBUTAN AVC DI BENDUNG KHAYANGAN', '3', NULL, '<div>Pentas Atraksi Wisata Budaya Tari Angguk digelar di Bendung Khayangan, Pendoworejo, Girimulyo. Tari Angguk digelar untuk menyambut AVC (Asita Vulcano Cycling).<br><a href=\"https://youtu.be/DirgBiDyqyM\">https://youtu.be/DirgBiDyqyM</a></div>', '2023-02-18', '2023-06-10 14:45:23', '2023-06-10 14:45:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_03_064359_create_posts_table', 1),
(6, '2022_11_07_011239_create_categories_table', 1),
(7, '2022_12_19_040909_add_is_admin_to_users', 1),
(8, '2023_06_09_025650_create_events_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(5, 16, 1, 'Desa Wisata Ngargosari', 'desa-wisata-ngargosari', 'post-images/8xUmOpxdra7R7wtr2XxTLeGPpnddf96lqmF5YshU.jpg', 'Video profil desa wisata Ngargosari :https://youtu.be/qq6vbeMXi7Q', '<div>Video profil desa wisata Ngargosari :<br><a href=\"https://youtu.be/qq6vbeMXi7Q\">https://youtu.be/qq6vbeMXi7Q</a></div>', NULL, '2023-06-11 13:30:59', '2023-06-12 02:49:56'),
(6, 16, 1, 'Desa Wisata Nglinggo', 'desa-wisata-nglinggo', 'post-images/x9VFSMibuNyww0eTLsQkj2QAcyHifYiuq8C36Pj5.jpg', 'Yogyakarta merupakan salah satu kota tujuan wisata favorit wisatawan baik itu wisatawan domestic maupun mancanegara. Meskipun luas wilayah Yogyakarta yang tidak begitu luas, tidak membuat Yogyakarta k...', '<div>Yogyakarta merupakan salah satu kota tujuan wisata favorit wisatawan baik itu wisatawan domestic maupun mancanegara. Meskipun luas wilayah Yogyakarta yang tidak begitu luas, tidak membuat Yogyakarta kehilangan ide untuk mengembangkan pariwisatanya. Salah satu wisata yang paling diminati oleh para wisatawan adalah desa wisata.<br><br></div><div>Salah satu desa wisata yang menjadi favorit wisatawan adalah Desa Wisata Nglinggo. Desa yang masuk dalam wilayah Kabupaten Kulon Progo ini bisa ditempuh kurang lebih 60-90 menit dengan kendaraan bermotor dari Kota Yogyakarta.<br><br></div><div>Banyak sekali aktivitas yang bisa dilakukan saat berkunjung ke desa wisata. Selain merasakan kehidupan pedesaan yang masih tradisional, wisatawan juga bisa belajar berbagai hal langsung dari masyarakat sekitar seperti belajar membuat kuliner lokal seperti gula aren dan geblek, atau belajar kebudayaan tradisional seperti jathilan, Tari Lengger Tapeng hingga membuat topeng.<br><br></div><div>Alam di sekitar Desa Wisata Nglinggo pun tak kalah seru untuk dieksplor. Diantaranya ada perkebunan the, hutan pinus, dan satu lagi wisata alam yang cukup menantang, yaitu Curug Watu Jonggol. Dikatakan menantang karena untuk menuju curug ini, wisatawan harus melalui medan yang cukup terjal untuk sampai di lokasi. Namun semua itu akan terbayarkan dengan air terjun yang segar serta suasana yang masih asri.<br><br></div><div>Tidak jauh dari Desa Wisata Nglinggo, ada satu lokasi yang menjadi favorit para pemburu sunrise, yaitu Puncak Suroloyo. Puncak Suroloyo merupakan puncak tertinggi dari perbukitan Menoreh. Wisatawan hanya memerlukan waktu sekitar 10 menit untuk menuju Puncak Suroloyo.<br><br>Bagi wisatawan yang ingin menginap, Desa Wisata Nglinggo telah menyediakan akomodasi yang cukup lengkap. Mulai dari homestay, pendopo pertemuan, hingga paket-paket wisata yang bisa dipilih sesuai budget wisatawan.</div><div><br>Video profil desa wisata Nglinggo :<br><a href=\"https://youtu.be/DhbhuqB6zrQ\">https://youtu.be/DhbhuqB6zrQ</a></div>', NULL, '2023-06-11 13:35:05', '2023-06-12 02:53:43'),
(7, 16, 1, 'Desa Wisata Tinalah', 'desa-wisata-tinalah', 'post-images/1QigrCfI64WQ8jPQSlr1jGZG3V7bLoeH3oYyyiVq.jpg', 'Desa wisata Tinalah merupakan desa wisata yang kaya akan potensi wisata alam, edukasi dan budaya. Desa wisata ini terletak kawasan Bukit Menoreh pada ketingian 117 mdpl dengan suhu harian 25-32 dc. De...', '<div>Desa wisata Tinalah merupakan desa wisata yang kaya akan potensi wisata alam, edukasi dan budaya. Desa wisata ini terletak kawasan Bukit Menoreh pada ketingian 117 mdpl dengan suhu harian 25-32 dc. Desa wisata yang terletak di kawasan Sungai Tinalah dan Pegunungan Menoreh ini memiliki konsep penyatuan alam dan nilai-nilai budaya dengan slogan Pesona Alam dan Budaya. Nama Desa Wisata Tinalah diambil dari nama Sungai Tinalah. Desa Wisata Tinalah sering disebut dengan nama Dewi Tinalah menawarkan berbagai paket wisata diantaranya paket <em>outbond</em>, <em>camping</em>, <em>trekking </em>dan <em>river tubing</em>. Wisatawan dapat menelusuri keindahan alam dengan mendaki Puncak Kleco, menyusuri sungai Tinalah dan juga Gua Sriti.<br><br></div><div>Bagi wisatawan yang berminat untuk mempelajari sejarah, di Desa Wisata Tinalah terdapat sebuah museum yang menjadi tempat penyimpanan benda bersejarah yakni Museum Sandi Negara. Desa wisata ini berada di Jalan Persandian Km. 5. Desa Purwoharjo, Kecamatan Samigaluh, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta. Desa wisata Tinalah dapat dijadikan sebagai tempat untuk menghilangkan rasa penat, mengembalikan kesegaran, dan semangat Anda setelah kesibukan aktivitas kerja yang padat dan melelahkan. Udara yang segar menjadikan diri para wisatawan rileks dan sehat. &nbsp;<br><br></div><div>Desa Wisata Tinalah dapat ditempuh dengan segala jenis kendaraan pribadi, mobil, motor, dan bus.<br>Terdapat paket wisata yang ditawarkan di Desa Wisata Tinalah : Menginap di Joglo Wiguna dan Omahku, menginap bersama alam, menginap di rumah Joglo, <em>out bound</em>, <em>camping area</em>, makrab Jogja, Tinalah Tubing, <em>family</em> dan <em>community gathering</em>, Tinalah <em>Trekking</em>, susur Sungai Tinalah, Joglo <em>Meeting Room</em>, <em>Live in</em>, wisata alam di Puncak Kleco.<br><br></div><div><br>Video profil desa wisata Tinalah :<br><a href=\"https://youtu.be/GbD6eH6sZKQ?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/GbD6eH6sZKQ?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:04:43', '2023-06-12 02:56:49'),
(8, 16, 1, 'Desa Wisata Gerbosari', 'desa-wisata-gerbosari', 'post-images/9wm9lbhz2ZdDFUyLfZBJDCoUKrPK5XCupt3vWO9R.jpg', 'Video profil desa wisata Gerbosari :https://youtu.be/_rillEzEmaA', '<div>Video profil desa wisata Gerbosari :<br><a href=\"https://youtu.be/_rillEzEmaA\">https://youtu.be/_rillEzEmaA</a></div>', NULL, '2023-06-11 14:07:52', '2023-06-12 02:48:42'),
(9, 16, 1, 'Desa Wisata Banjaroyo', 'desa-wisata-banjaroyo', 'post-images/aGcGYFk3jLWOoIaIH4a88PJqZoUlFygmIK1wb6X1.jpg', 'Dewa Bara atau Desa Wisata Banjaroyo adalah sebuah desa wisata di lereng perbukitan Menoreh, 8 km sebelah timur Candi Borobudur atau 24 km sebelah barat kota Yogjakarta. Berkunjung ke Desa Wisata Banj...', '<div>Dewa Bara atau Desa Wisata Banjaroyo adalah sebuah desa wisata di lereng perbukitan Menoreh, 8 km sebelah timur Candi Borobudur atau 24 km sebelah barat kota Yogjakarta. Berkunjung ke Desa Wisata Banjaroya yang terletak di Kecamatan Kalibawang, Kabupaten Kulon Progo memberikan pengalaman tinggal bersama penduduk desa dalam kehidupan sehari-hari yang sederhana dan bersahaja. Sendangsono adalah salah satu objek wisata ziarah yang berada di desa wisata tersebat. Pengunjung Desa Wisata Banjaroyo bisa menikmati kegiatan bersepeda keliling pedesaan menuju Embung Tonegoro, Bendung Ancol, makam Nyi Ageng Serang, trekking ke Menoreh, live-in di pedusunan, belajar seni tradisi, pertanian dan peternakan dan membuat makanan tradisional. Pada bulan tertentu di saat musim durian, di desa ini diadakan Festival Durian, bertempat di Rest Area Banjaroya. Durian Menoreh Kuning merupakan durian ungguan desa ini.<br><br>Video profil desa wisata Banjaroyo :<br><a href=\"https://youtu.be/WoqQt-F1L3A?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/WoqQt-F1L3A?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:09:14', '2023-06-12 02:57:55'),
(10, 16, 1, 'Desa Wisata Banjararum', 'desa-wisata-banjararum', 'post-images/Z5fypR6MCV8OwwZfDssNGTsvRBGylSe1mnIkHFhd.jpg', 'Video profil desa wisata Banjararum :https://youtu.be/95f0so1bhYI?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB', '<div>Video profil desa wisata Banjararum :<br><a href=\"https://youtu.be/95f0so1bhYI?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/95f0so1bhYI?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:11:10', '2023-06-12 02:48:07'),
(11, 16, 1, 'Desa Wisata Hargotirto', 'desa-wisata-hargotirto', 'post-images/2DBR8t30nK631tE1iS7Woi51RR6uuyL7aFWesHdM.jpg', 'Video profil desa wisata Hargotirto :https://youtu.be/WwZ8GnFrcFU?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB', '<div>Video profil desa wisata Hargotirto :<br><a href=\"https://youtu.be/WwZ8GnFrcFU?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/WwZ8GnFrcFU?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:13:55', '2023-06-12 02:47:49'),
(12, 16, 1, 'Desa Wisata Sermo', 'desa-wisata-sermo', 'post-images/8Qr7WpHTfLTZDA2PLYDk0RLVZJ4NPdzQppgamlXI.jpg', 'Desa Wisata Sermo merupakan salah satu wisata yang berada di Perbukitan Menoreh yang ada ada di Kulon Progo, Daerah Istimewa Yogyakarta. Untuk sampai disana, wisatawan membutuhkan waktu sekitar 35 men...', '<div>Desa Wisata Sermo merupakan salah satu wisata yang berada di Perbukitan Menoreh yang ada ada di Kulon Progo, Daerah Istimewa Yogyakarta. Untuk sampai disana, wisatawan membutuhkan waktu sekitar 35 menit perjalanan menggunakan kendaraan bermotor dari Kota Wates, Kulon Progo.<br><br></div><div>Daya tarik utama dari desa ini adalah Waduk Sermo yang merupakan satu-satunya waduk yang ada di Provinsi Yogyakarta. Keberadaan waduk ini tidak hanya penting bagi pengairan di sekitar waduk, tetapi juga menjadi salah satu wisata yang cukup diperhatikan di Kabupaten Kulon Progo.<br><br></div><div>Banyak sekali aktivitas yang bisa dilakukan para pengunjung di area Waduk Sermo ini. Tidak hanya menikmati keindahan waduk dengan mengelilingi waduk menggunakan perahu, wisatawan bisa menikmati asrinya alam Waduk Sermo dengan menyusuri jalan setapak yang ada di sekeliling Waduk Sermo baik dengan berjalan kaki maupun bersepeda.<br><br></div><div>Selain itu, saat pada musim kemarau, pengunjung juga bisa memanfaatkan area Waduk Sermo untuk berkemah maupun untuk outbound. Apalagi dengan lokasinya yang jauh dari hiruk pikuk kebisingan perkotaan dan udaranya yang masih sejuk dan bersih tentu membuat Waduk Sermo menjadi pilihan pas untuk berlibur dari kepenatan sehari-hari.<br><br>Bagi wisatawan yang ingin menikmati keindahan alam Waduk Sermo lebih lama, pengelola menyediakan homestay-homestay yang terletak di sekitar waduk. Disini wisatawan akan diajak berinteraksi langsung dengan masyarakat sekitar sembari belajar membuat berbagai kuliner khas Kulon Progo seperti membuat gula jawa, ikan crispy, serta makanan tradisional seperti geblek, tape, dan apem.<br><br></div><div><br>Video profil desa wisata Sermo :<br><a href=\"https://youtu.be/oMGz9DsNV9Q?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/oMGz9DsNV9Q?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:16:32', '2023-06-12 02:55:22'),
(13, 16, 1, 'Desa Wisata Kalibiru', 'desa-wisata-kalibiru', 'post-images/XjlJPxchMJOdN6HBstsWVJRQegPTOcQL23mAU2Ge.jpg', 'Para pelancong tentu saja tidak asing mendengar wisata Kalibiru yang berada di Kulon Progo, Yogyakarta. Wisata yang terkenal dengan lanskap hamparan hijau pegunungan dan Waduk Sermo ini berada di Perb...', '<div>Para pelancong tentu saja tidak asing mendengar wisata Kalibiru yang berada di Kulon Progo, Yogyakarta. Wisata yang terkenal dengan lanskap hamparan hijau pegunungan dan Waduk Sermo ini berada di Perbukitan Menoreh yang memang memiliki kondisi alam yang masih sangat asri dan sejuk<br><br></div><div>Awal mulanya, Kalibiru merupakan hutan lindung yang dulunya banyak terjadi pembalakan liar sehingga membuat hutan menjadi tandus dan gersang. Melihat kondisi hutan yang memprihatinkan, masyarakat sekitar berinisiatif untuk membuat hutan tersebut hidup kembali. Pada tahun 2008, hutan di Kalibiru resmi dikelola oleh masyarkat dengan adanya Izin Pemanfaatan Hutan Kemasyarakatan.<br><br></div><div>Desa Wisata Kalibiru berada di daerah yang cukup tinggi, sekitar 450mdpl sehingga saat cuaca sedang cerah, pengunjung bisa melihat pemandangan Gunung Merapi, Waduk Sermo, dan Jajaran Pantai Selatan. Udaranya yang masih bersih dan sejuk tentu juga menjadi nilai lebih bagi para pengunjung yang ingin melepas penat dari kesibukan sehari-hari.<br><br></div><div>Tidak hanya pemandangan indahnya saja yang bisa dinikmati para wisatawan, Desa Wisata Kalibiru juga kini telah menyediakan beberapa pilihan aktivitas wisata yang menarik seperti, flying fox, outbond, dan jalur tracking.<br><br></div><div>Selain itu, fasilitas dan akomodasi yang ada disini juga sudah memadai. Diantaranya area parkir, mushola, toilet, gardu pandang, pendopo/joglo, pondok wisata, tempat makan, hingga perpustakaan.</div><div><br><br>Video profil desa wisata Kalibiru :<br><a href=\"https://youtu.be/0T_2RJJYq-g?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/0T_2RJJYq-g?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:18:52', '2023-06-12 02:52:28'),
(14, 16, 1, 'Desa Wisata Tuksono', 'desa-wisata-tuksono', 'post-images/LknnYqXYYPFEM1DPTfqtONGjIMMAN60jWqo6cf8m.jpg', 'Video profil desa wisata Tuksono :https://youtu.be/a0wgrqs42E0?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB', '<div>Video profil desa wisata Tuksono :<br><a href=\"https://youtu.be/a0wgrqs42E0?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/a0wgrqs42E0?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:24:08', '2023-06-12 02:46:54'),
(15, 16, 1, 'Desa Wisata Sukoreno', 'desa-wisata-sukoreno', 'post-images/PwJcrg82e5U3EOqQIJqH5kHO4wRHBNatBYI8YP4E.jpg', 'Video profil desa wisata Sukoreno :https://youtu.be/KlYAAwT6p9I?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB', '<div>Video profil desa wisata Sukoreno :<br><a href=\"https://youtu.be/KlYAAwT6p9I?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/KlYAAwT6p9I?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:25:43', '2023-06-12 02:46:37'),
(16, 16, 1, 'Desa Wisata Sawah Surjan', 'desa-wisata-sawah-surjan', 'post-images/37QNOpX4rlBkFNu1RUK02msSDS9QJLvoLWnQbv8n.jpg', 'Video profil desa wisata Sawah Surjan :https://youtu.be/-mPbdMzFLA4?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB', '<div>Video profil desa wisata Sawah Surjan :<br><a href=\"https://youtu.be/-mPbdMzFLA4?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/-mPbdMzFLA4?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:28:03', '2023-06-12 02:44:54'),
(17, 16, 1, 'Desa Wisata Banjarasri', 'desa-wisata-banjarasri', 'post-images/ZsbTikKAsHObGgY8y5lYbzQsxrq21FT7A9UX527w.jpg', 'Desa Wisata Banjarsari atau Dewi Asri mempunyai slogan \"Pesona Alam dan Budaya Menoreh\" berjarak 30 km dari Yogyakarta dan 19 km dari Borobudur. Pengelola dan masyarakat Dewi Asri mengembangkan paket...', '<div>Desa Wisata Banjarsari atau Dewi Asri mempunyai slogan \"Pesona Alam dan Budaya Menoreh\" berjarak 30 km dari Yogyakarta dan 19 km dari Borobudur. Pengelola dan masyarakat Dewi Asri mengembangkan paket wisata: bersahabat dengan Alam, belajar menjadi petani, bermain di desa, aneka permainan banyu, teknologi tepat guna, memancing, wisata sejarah. Kerajinan ATBM meruakan salah satu produk yang terkenal dari desa ini. Desa Wisata Banjarsari yang juga dikenal dengan nama \"Boro\" siap menerima para tamu dengan beragam potensi, atraksi dan pengalaman pedesaan, kehidupan di kaki Menoreh dan sejarahnya.<br><br>Video profil desa wisata Banjarasri :<br><a href=\"https://youtu.be/sVNvV4w7o10?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/sVNvV4w7o10?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:34:32', '2023-06-12 02:58:30'),
(18, 16, 1, 'Desa Wisata Sidoharjo', 'desa-wisata-sidoharjo', 'post-images/nHyFrnqHW6vKJA4wxobAaNJUjScbLxXeEy87Tv4n.jpg', 'Desa Wisata Sidoharjo memiliki pemandangan yang indah dan alami dengan Bukit Menoreh sebagai latar belakang dan daya tarik wisatanya. Satu hal yang menarik di Siduharjo adalah kera ekor panjang yang b...', '<div>Desa Wisata Sidoharjo memiliki pemandangan yang indah dan alami dengan Bukit Menoreh sebagai latar belakang dan daya tarik wisatanya. Satu hal yang menarik di Siduharjo adalah kera ekor panjang yang berkembang biak secara alami di hutan Menoreh, di sekitar Air Terjun Sidoharjo dan Gunung Kendil. Seni dan budaya berkembang dengan baik di sana dana di jaga kelestariannya. Di Sidoharjo, sejalan dengan kehidupan sehari - hari sebagian besar warga sebagai petani. Bio Menoreh kopi, berbagai produk makanan lokal adalah daya tarik tersendiri untuk menikmati paket wisata di Desa Wisata Sidoharjo. Kopi Moka Menoreh merupakan salah satu daya tarik wisata kuliner di Desa ini.<br><br>Video profil desa wisata Sidoharjo :<br><a href=\"https://youtu.be/4gbnONjvMEk?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/4gbnONjvMEk?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:36:02', '2023-06-12 02:59:48'),
(19, 16, 1, 'Desa Wisata Sidorejo', 'desa-wisata-sidorejo', 'post-images/sjlPstqwlIC7N919kwOVOmuS1qvi0sj7R9egkrvW.jpg', 'Desa Wisata Sidorejo merupakan pedesaan yang berbatasan dengan Sungai Progo di kecamatan Lendah, Kulon Progo bagian tenggara. Di Sidorejo terdapat bendungan Sungai Progo untuk kepentingan irigasi pert...', '<div>Desa Wisata Sidorejo merupakan pedesaan yang berbatasan dengan Sungai Progo di kecamatan Lendah, Kulon Progo bagian tenggara. Di Sidorejo terdapat bendungan Sungai Progo untuk kepentingan irigasi pertanian yang terkenal dengan sebutan Bendung Sapon. Di pinggir Bendung Sapon dibangun sebuah taman yag jadi tempat asyik untuk nongkrong sambil menikmati bentang alam Sungai Progo yang indah, sejuk dan meanrik. Wisatawan dapat menikmati petualangan, outbond, wisata desa dan seni budaya, belajar membatik, kuliner dan kerajinan. <br><br>Video profil desa wisata Sidorejo :<br><a href=\"https://youtu.be/BwgXM8QTaMc?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/BwgXM8QTaMc?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:38:18', '2023-06-12 03:00:59'),
(20, 16, 1, 'Desa Wisata Gulurejo', 'desa-wisata-gulurejo', 'post-images/4ipXcjIWuL3YldGnox23ubXi8cdF6Xw8XMI28VSY.jpg', 'Video profil desa wisata Gulurejo :https://youtu.be/nJXYhAozKGY?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB', '<div>Video profil desa wisata Gulurejo :<br><a href=\"https://youtu.be/nJXYhAozKGY?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/nJXYhAozKGY?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:38:48', '2023-06-12 02:42:14'),
(21, 16, 1, 'Desa Wisata Jatirejo', 'desa-wisata-jatirejo', 'post-images/4Akj26f46Wys9FHjyQ1i7o59UXcPD7hSIxpsvLaD.jpg', 'Video profil desa wisata Jatirejo :https://youtu.be/BaVGP6PV24A?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB', '<div>Video profil desa wisata Jatirejo :<br><a href=\"https://youtu.be/BaVGP6PV24A?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/BaVGP6PV24A?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:42:07', '2023-06-12 02:37:10'),
(22, 16, 1, 'Desa Wisata Hargomulyo', 'desa-wisata-hargomulyo', 'post-images/amiN349rqvZ8WBSFOTQMsGBabbzFq6Q3pMkBlcch.jpg', 'Desa Wisata Hargomulyo merupakan desa wisata yang terletak di ujung barat Daerah Istimewa Yogyakarta, tepatnya di Kalurahan Hargomulyo, Kapanewon Kokap, Kab. Kulon Progo, atau kurang lebih 3 km dari Y...', '<div>Desa Wisata Hargomulyo merupakan desa wisata yang terletak di ujung barat Daerah Istimewa Yogyakarta, tepatnya di Kalurahan Hargomulyo, Kapanewon Kokap, Kab. Kulon Progo, atau kurang lebih 3 km dari Yogyakarta International Airport. Kenampakan bentang alam yang terdiri dari dataran rendah dan perbukitan, serta potensi budaya yang masih terjaga, sangat potensial untuk dikembangkan untuk desa wisata. Beragam atraksi dapat dinikmati wisatawan, terlebih kemudahan akses yang tidak jauh dari beberapa sarpras umum. Selain itu, keramahan penduduk akan menjadi kesan tersendiri yang menjadi kenangan tak terlupakan.<br>&nbsp;<br>Video profil desa wisata Hargomulyo :<br><a href=\"https://youtu.be/ltlTCf3XL7Q?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/ltlTCf3XL7Q?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:44:18', '2023-06-12 02:51:36'),
(23, 16, 1, 'Desa Wisata Hargorejo', 'desa-wisata-hargorejo', 'post-images/RT1Y7DWr7fCQElnSkjFTiHRG5ynVrm43BsadTv4I.jpg', 'Video profil desa wisata Hargorejo :https://youtu.be/3UC2DpEjaqA?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB', '<div>Video profil desa wisata Hargorejo :<br><a href=\"https://youtu.be/3UC2DpEjaqA?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/3UC2DpEjaqA?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:47:37', '2023-06-12 02:35:05'),
(24, 16, 1, 'Desa Wisata Glagah', 'desa-wisata-glagah', 'post-images/ugehHbmtClMtCdPq6izitKMewOweNScSL1izJR9y.jpg', 'Pantai Glagah merupakan pantai indah dengan hamparan pasir hitam yang luas sekaligus berlaguna. Di pantai ini terdapat kawasan gumuk pasir dengan rumput grinting dan laguna Glagah yang sangat luas ter...', '<div>Pantai Glagah merupakan pantai indah dengan hamparan pasir hitam yang luas sekaligus berlaguna. Di pantai ini terdapat kawasan gumuk pasir dengan rumput grinting dan laguna Glagah yang sangat luas terhampar untuk aktivitas perahu wisata, olah raga kano, kayak, berenang atau memancing. Selain itu juga ada agrowisata buah naga, melon, semangka dan cabai yang dikelola oleh masyarakat.<br><br></div><div>Kawasan Glagah secara rutin juga dipakai untuk event motocross, festival layang-layang dan pesta kembang api tahun baru. Pantai Glagah menjadi Muara Sungai Serang yang sekaligus pintu masuk ke Pelabuhan Ikan Tanjung Adi Karta. Sisi barat Sungai Serang menjadi Camping Ground dan Dermaga Wisata<br><br></div><div>Pengunjung yang akan tinggal lama atau ingin mengadakan kegiatan gathering, rapat, pesta bisa memanfaatkan usaha penginapan atau hotel yang terdapat banyak di sekitar Pantai Glagah.<br><br></div><div>Lokasi Pantai Glagah berada di Kecamatan Temon, Kulon Progo kira-kira 10 Km dari kota Wates dan kurang lebih 2 km dari jalan raya Jogja – Jakarta.&nbsp;<br><br></div><div>Video profil desa wisata Glagah :<br><a href=\"https://youtu.be/i_3ePDrQdCg?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/i_3ePDrQdCg?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:51:49', '2023-06-12 03:03:03'),
(25, 16, 1, 'Desa Wisata Jatimulyo', 'desa-wisata-jatimulyo', 'post-images/sFTQno8stbSEpyHFfHFS5z9lnWQn9Ey9fRtEDJNw.jpg', 'Desa wisata Jatimulyo terletak di ketinggian 500-800 mdpl di kawasan Pegunungan Menoreh, tepatnya di Kecamatan Girimulyo, Kabupaten Kulon Progo. Desa Wisata Jatimulyo merupakan salah satu desa yang ma...', '<div>Desa wisata Jatimulyo terletak di ketinggian 500-800 mdpl di kawasan Pegunungan Menoreh, tepatnya di Kecamatan Girimulyo, Kabupaten Kulon Progo. Desa Wisata Jatimulyo merupakan salah satu desa yang masih menganut kebudayaan jawa yang kuat. Setiap bulan Sapar diadakan Merti Dusun Jatimulyo suatu upacara adat yang sarat dengan kearifan lokal. Untuk menuju Desa Wisata Jatimulyo dibutuhkan waktu 45 menit dari pusat kota Wates. Wisatawan dapat menggunakan kendaraan pribadi maupun kendaraan rental untuk menuju ke Desa Wisata Jatimulyo.<br><br></div><div>Desa wisata Jatimulyo menawarkan berbagai wisata budaya dan wisata alam untuk wisatawan. Wisatawan dapat mencoba susur gua Kiskendo dan gua Sumitra. Selain itu, wisatawan dapat menyaksikan sendratari Sugriwa Subali yang merupakan legenda khas gua Kiskendo. Obyek wisata yang terdapat di Desa Wisata Jatimulyo yakni Gua Kiskendo, Gua Sumitra, Curug Setawing, Grojogan Sewu, Watu Blencong, Gunung Lanang, Ekowisata Taman Sungai Mudal, Kembangsoka, Kedung Pedut, dan Watu Bolong. Selain itu, Wisatawan dapat bermalam sembari menikmati nuansa alam desa Jatimulyo di Omah Watu Blencong dan <em>homestay-homestay</em> milik warga.<br><br></div><div>Desa wisata Jatimulyo juga menyediakan paket wisata yang dapat dipesan untuk wisatawan rombongan, maupun wisatawan tunggal. Paket wisata tersebut diantaranya, Paket <em>Live In</em>, Paket Atraksi yang terbagi menjadi Paket Budaya dan Paket Outbound, Paket Jelajah Wisata Jatimulyo, Paket One Day Tour (<em>Bird Watching</em>, budidaya madu lanceng, pembuatan gula jawa, edukasi kopi,<em> trekking</em> ke Kembangsoka atau Ekowisata Sungai Mudal) , dan Paket <em>Camping Ground</em>.<br><br></div><div><br>Video profil desa wisata Jatimulyo :<br><a href=\"https://youtu.be/G_fEx34kbsI?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/G_fEx34kbsI?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 14:59:34', '2023-06-12 02:56:10'),
(26, 16, 1, 'Desa Wisata Purwosari', 'desa-wisata-purwosari', 'post-images/xkO892cMdgZ9wzuRusnFTxn5soBfi0Jr7YAVCAN1.jpg', 'Desa Wisata Purwosari Kecamatan Grimulya Kabupaten Kulon Progo menawarkan wisata alam yang berupa&nbsp; Wahana Ayunan langit watujaran dengan sensasi berayun di atas ketinggian 850mdpl dengan pemandan...', '<div>Desa Wisata Purwosari Kecamatan Grimulya Kabupaten Kulon Progo menawarkan wisata alam yang berupa&nbsp; Wahana <strong>Ayunan langit watujaran</strong> dengan sensasi berayun di atas ketinggian 850mdpl dengan pemandangan eksotik yang menawan ,susur<strong> goa Kidang kencono</strong> dan sungai (curug dan kedung). Desa ini dapat di capat dari Yogyakarta melalui Jalan Godean baik menggunakan kendaraan roda dua maupun roda empat selama kurang lebih 1 jam.Anda dapat memilih objek yang Anda suka atau mencoba keduanya.<br><br></div><div>Objek Wisata Desa Purwosari<br>Ayunan Langit Watujaran,Gua Kidang Kendang, Curug Glimpang, Kedung Ratmi, Kedung Benho, Curug Gandhu, Penyerbuan Salak, Mmerah Susu Kambing Peranakan Etawa, Membuat Gula Aren, Workshop Kesenian angguk,dan homestay bagi tamu yang menginap<br><br></div><div>Video profil desa wisata Purwosari :<br><a href=\"https://youtu.be/weZ2YlDUihI?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB\">https://youtu.be/weZ2YlDUihI?list=PLUYBMtZsJ-ZT7ioq8jduzvTmnIPcU_mjB</a></div>', NULL, '2023-06-11 15:04:11', '2023-06-11 15:06:24'),
(27, 16, 1, 'Desa Wisata Pendoworejo', 'desa-wisata-pendoworejo', NULL, 'Pendoworejo', '<div>Pendoworejo</div>', NULL, '2023-06-12 02:45:55', '2023-06-12 02:52:50'),
(28, 16, 1, 'Desa Wisata Banaran', 'desa-wisata-banaran', NULL, 'Banaran', '<div>Banaran</div>', NULL, '2023-06-12 02:46:12', '2023-06-12 02:46:12'),
(29, 15, 1, 'Destinasi Wisata Glagah', 'destinasi-wisata-glagah', 'post-images/fwkMEWD2NitSaef0msVZYwNuETIyqQXYBnvzGnli.jpg', 'Destinasi Wisata Glagah', '<div>Destinasi Wisata Glagah</div>', NULL, '2023-06-12 03:31:00', '2023-06-12 03:31:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_type`) VALUES
(1, 'admin', 'admin', 'ekoselter@gmail.com', NULL, '$2y$10$dXHGqNGPf/a/fjCwc9iVSeJ2xqIdtfPvOsK2IPEezDdvgRwJzTVTe', NULL, '2023-06-08 20:41:13', '2023-06-08 20:41:13', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
