-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 12:16 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpll`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `no_agen` int(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `kontak` text NOT NULL,
  `fasilitas` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`no_agen`, `nama`, `kategori`, `kontak`, `fasilitas`, `alamat`) VALUES
(300, 'Naruto', 'Bola', '082254024990', 'Memandu tur di Semarang sebanyak 100 Turis / Wisatawan ke berbagai wisata diantaranya adalah Goa Kreo, Lawang Sewu, Sam Poo Kong, Dusun Semilir.\r\nKeunggulan saya dalam berbahasa bukan hanya dalam bahasa inggris dan indonesia saja melainkan adalah dapat bercakap beberapa bahasa luar negeri diantaranya china, inggris, spanyol, france dan arab.', 'Jalan Jendral Sudirman Gg. Rambai No. 49 Bulustalan, Semarang Selatan'),
(316, 'Sasuke', 'Voli', '089123124124', 'Memandu tur di Semarang sebanyak 100 Turis / Wisatawan ke berbagai wisata diantaranya adalah Goa Kreo, Lawang Sewu, Sam Poo Kong, Dusun Semilir.\r\nKeunggulan saya dalam berbahasa bukan hanya dalam bahasa inggris dan indonesia saja melainkan adalah dapat bercakap beberapa bahasa luar negeri diantaranya china, inggris, spanyol, france dan arab.', 'Jl, Pemuda no 42'),
(318, 'Sakura', 'Badminton', '0891312412422', 'Memandu tur di Semarang sebanyak 100 Turis / Wisatawan ke berbagai wisata diantaranya adalah Goa Kreo, Lawang Sewu, Sam Poo Kong, Dusun Semilir.\r\nKeunggulan saya dalam berbahasa bukan hanya dalam bahasa inggris dan indonesia saja melainkan adalah dapat bercakap beberapa bahasa luar negeri diantaranya china, inggris, spanyol, france dan arab.', 'Jl. Lemah gempal 1 No. 49'),
(320, 'Saefudin', 'Basket', '12312412212', 'Memandu tur di Semarang sebanyak 100 Turis / Wisatawan ke berbagai wisata diantaranya adalah Goa Kreo, Lawang Sewu, Sam Poo Kong, Dusun Semilir.\r\nKeunggulan saya dalam berbahasa bukan hanya dalam bahasa inggris dan indonesia saja melainkan adalah dapat bercakap beberapa bahasa luar negeri diantaranya china, inggris, spanyol, france dan arab.', 'Jl.Lemah Gempal 2');

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `nama`, `kode`) VALUES
(1, 'Wahyu', 'tampan1234321'),
(2, 'Tampan', 'rochman1234321');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `no_pesan` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kontak` varchar(30) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `agen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`no_pesan`, `nama`, `kontak`, `waktu`, `tanggal`, `agen`) VALUES
(201, 'Wahyu', '089', 'sore', '', ''),
(202, 'Sholihin', '081', 'pagi', '', ''),
(203, 'Kiky', '000', 'gelap', '', ''),
(205, 'Anya Geraldine', '089', '08.00-10.00', '', 'anjaayy'),
(208, 'Pak PWL', '089', '08.00-10.00', '19', ''),
(209, 'Pevita', '089', '08.00-10.00', '1908', 'awuk'),
(210, 'pevita', '089', '08.00-10.00', 'uhuk', 'ehem'),
(211, 'Aw Karin', '089', '08.00-10.00', '19', 'anjay'),
(212, 'Wahyu Tampan', '+62 895 326 920 220', '08.00-10.00', '3 juli', 'Basketku'),
(213, 'Mahasiswa Tampan', '+62 895 326 920 220', '11.00-13.00', '3 juli', 'Lapangan Basket Udinus'),
(214, 'Tampan Tulus Harapan', '+62 895 326 920 220', '2021-01-07', '3 juli', 'Lapangan Basket Undip Pelebura'),
(215, 'Wahyu', '089', '', '', 'Sampookong'),
(216, 'Wahyuu', '089', '2021-01-08', '', 'sampokong'),
(217, 'Wahyu Tampan', '19', '', 'Tue/Jan/2021', 'Kota Tua'),
(218, 'Wahyu Tampan bet', '0899', '2021-01-08', 'Tue/Jan/2021', 'Kota tua');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(128) NOT NULL,
  `cabang` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `cabang`, `isi`, `gambar`) VALUES
(100, 'Lawang Sewu', '<p><strong>Lawang Sewu</strong>&nbsp;adalah salah satu&nbsp;<em>landmark&nbsp;</em>Kota Semarang. Dibangun pada 1904, bangunan cagar budaya dengan arsitektur khas Belanda ini berusia lebih dari 100 tahun. Bangunan yang juga pernah&nbsp;digunakan sebagai kantor pusat Perusahaan Kereta Api Hindia Belanda.</p>\r\n\r\n<p>Setelah kemerdekaan kemudian digunakan sebagai kantor Djawatan Kereta Api RI dan kini dikelola PT KAI. Dimanfaatkan sebagai obyek pariwisata mulai tahun 2005, Lawang Sewu mengundang tingginya antusisme wisatawan. Jumlah pengunjung selama tahun 2018 mencapai ratusan ribu orang.</p>\r\n\r\n<h2>Harga Tiket Masuk Lawang Sewu</h2>\r\n\r\n<p>Pengunjung yang berwisata ke bangunan bergaya arsitektur Belanda ini akan dikenakan tiket masuk. Harga tiket masuk ke area ini cukup murah.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\"><strong>Harga Tiket Masuk Lawang Sewu</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dewasa</td>\r\n			<td>Rp10.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Anak-anak atau Pelajar</td>\r\n			<td>Rp5.000</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/goa-kreo-semarang/\" rel=\"noopener noreferrer\" target=\"_blank\">Goa Kreo Semarang Tiket &amp; 7 Daya Tarik Utama</a></p>\r\n\r\n<h2>Jam Buka Lawang Sewu</h2>\r\n\r\n<p>Wisatawan bisa berkunjung ke sini setiap hari. Obyek wisata ini buka mulai dari pagi hingga malam hari.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\"><strong>Jam Buka</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Senin &ndash; Minggu</td>\r\n			<td>Pk. 07.00 &ndash; 21.00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>Daya Tarik Wisata Lawang Sewu</h2>\r\n\r\n<p><img alt=\"letak strategis lawang sewu di jalan pemuda simpang lima semarang jawa tengah\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/letak-strategis-Lawang-Sewu-aldiiriz-e1556165685945-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Lawang Sewu terletak di Simpang Lima yang sangat strategis sehingga memudahkan akses bagi wisatawan.<br />\r\nFoto : Instagram/aldiiriz</p>\r\n\r\n<p>Lawang Sewu yang berada di Simpang Lima Semarang, berdiri berdampingan dengan Gereja Katedral Belanda, Museum Mandala Bhakti, dan Wisma Perdamaian. Di tengah-tengah Wilhelminaplein (Taman Wilhelmina) tempat berdirinya Tugu Muda.</p>\r\n\r\n<p>Pembangunan dilakukan pada masa Hindia Belanda berlangsung tahun 1904-1907 untuk&nbsp;<em>Het hoofdkantor van de Nederlands-Indische Spoorweg Maatschappij</em>&nbsp;(Kantor Pusat Administrasi Kereta Api &ndash; NIS). Arsiteknya adalah Prof. Jacob F. Klinkhamer (TH Delft) dan B.J. Quendag.</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/taman-rekreasi-marina-semarang-4-aktivitas-top/\" rel=\"noopener noreferrer\" target=\"_blank\">Taman REKREASI MARINA Semarang &amp; 4 Aktivitas Top</a></p>\r\n\r\n<h3>1. Seribu Pintu</h3>\r\n\r\n<p><img alt=\"jajaran pintu lawang sewu semarang jawa tengah\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/pintu-pintu-Lawang-Sewu-ferizal90-e1556165445788-640x402.jpg\" style=\"height:402px; width:640px\" /></p>\r\n\r\n<p>Favorit setiap wisatawan pengunjung Lawang Sewu adalah berfoto dengan latar jajaran pintu yang seolah tanpa ujung. Foto : Instagram/&nbsp;<a href=\"http://instagram.com/ferizal90\" rel=\"noopener noreferrer\" target=\"_blank\">ferizal90</a></p>\r\n\r\n<p>Lawang sewu memiliki 3 bangunan utama dengan gedung berbentuk huruf U. Namun bangunan utama yang ketiga tidak begitu besar sehingga cenderung berbentuk huruf L. Dengan corak arsitektur khas Belanda, bangunan ini punya daya tarik yang kuat. Setiap orang yang datang ke Jawa Tengah akan menyempatkan mampir dan berfoto dengan latar jajaran pintu yang seolah tanpa ujung ini.</p>\r\n\r\n<p>Kompleks bangunan ini dikenal masyarakat dengan sebutan &ldquo;Lawang Sewu&rdquo; atau pintu seribu karena jumlah pintu dan jendelanya sangat banyak. Sedangkan jumlah persis sebenarnya hanya 928 pintu dan jendela. Banyaknya jumlah pintu dan jendela tak lepas dari iklim Indonesia yang tropis, untuk memperlancar sirkulasi udara.</p>\r\n\r\n<h3>2. Keunikan Arsitektur</h3>\r\n\r\n<p><img alt=\"teras utama gedung bagian dalam\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/gedung-bagian-dalam-Lawang-Sewu-frizki101-e1556165551672-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Keunikan arsitektur pada setiap gedung Lawang Sewu. Foto : Instagram/<a href=\"http://instagram.com/frizki101\" rel=\"noopener noreferrer\" target=\"_blank\">frizki101</a></p>\r\n\r\n<p>Dari sisi arsitektur, keunikannya adalah bahwa gedung ini dibangun tanpa menggunakan semen. Gedung ini dibangun dengan bligor atau pese, istilah lokal dari campuran pasir, kapur, dan bata merah. Penggunaan bligor menjadi alasan tidak ditemukannya retakan di Lawang Sewu. Bligor membuat bagian dalam ruang lebih sejuk.</p>\r\n\r\n<p>Konstruksinya tanpa besi untuk menghindari tekanan berat. Atapnya berbentuk melengkung setengah lingkaran tiap setengah meter untuk mengurangi tekanan. Struktur atap dari bata disusun miring seperti struktur jembatan.</p>\r\n\r\n<p>Hanya gedung B yang dibangun paling akhir tahun 1916 menggunakan besi dan material lokal karena Perang Dunia I di Eropa. Saat pengiriman barang dari Belanda lambat, diprioritaskan penggunaan barang lokal. Bata, genting, kaca, hingga ubin, menggunakan buatan Semarang dan sekitarnya.</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/kampung-pelangi-semarang/\" rel=\"noopener noreferrer\" target=\"_blank\">KAMPUNG PELANGI Semarang Tiket &amp; 5 Pesona Artistik</a></p>\r\n\r\n<h3>3. Diorama</h3>\r\n\r\n<p>Dua bangunan utama berisi diorama dan berbagai macam benda-benda bersejarah tentang kereta api indonesia. Di sini pengunjung dapat melihat museum, galeri, serta peta-peta dan foto-foto zaman dulu . Diorama ini menjadi penggambaran Semarang sebagai pusat kereta terbesar di Indonesia dan jurusan kereta api pertama, Semarang &ndash; Temanggung.</p>\r\n\r\n<p>Tujuan pembuatan kantor Kereta Api ini pada dasarnya untuk transportasi bahan mentah perdagangan Hindia Belanda. Kebutuhan tersebut berasal dari perkebunan paksa (<em>cultuur stelsel</em>) yang berasal dari daerah penghasil gula, kopi dan tembakau.</p>\r\n\r\n<p>Ruang pameran ini berada di lantai satu sedangkan lantai dua digunakan sebagai kantor Divisi Heritage dan Arsitektur PT KAI.</p>\r\n\r\n<h3>4. Kaca Mozaik</h3>\r\n\r\n<p><img alt=\"kaca patri mozaik\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/nyntiamonica-e1556165606432-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Kaca Mozaik yang penuh filosofi ini menjadi salah satu spot yang menarik wisatawan Lawang Sewu. Foto : Instagram/<a href=\"http://instagram.com/nyntiamonica\" rel=\"noopener noreferrer\" target=\"_blank\">nyntiamonica</a></p>\r\n\r\n<p>Salah satu lokasi favorit untuk berfoto saat ke obyek wisata ini adalah dinding kaca patri berukuran tinggi 9 meter. Kaca patri mozaik ini berada di dalam gedung utama. Kaca yang terbagi menjadi empat panel besar ini mencerminkan eksploitasi besar-besaran hasil alam Indonesia.</p>\r\n\r\n<p>Pada panel tengah-bawah berjajar Dewi Fortuna dengan baju merah, roda bersayap lambang kereta api, dan Dewi Sri. Panel di atasnya adalah tumbuhan dan hewan yang menggambarkan Nusantara kaya akan hasil bumi. Ditambah simbol kota-kota dagang Batavia, Surabaya, dan Semarang.</p>\r\n\r\n<p>Sedangkan simbol kota-kota dagang Belanda, yakni Amsterdam, Rotterdam, dan Den Haag, berderet di panel kiri. Dan panel sebelah kanan menampilkan ratu-ratu Belanda.</p>\r\n\r\n<h3>5. Ruang Bawah Tanah</h3>\r\n\r\n<p><img alt=\"Runag bawah tanah\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/Ruang-Bawah-Tanah-Lawang-Sewu-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Ruang bawah tanah yang pada masa belanda merupakan ruang drainase pendingin dan menjadi ruang penjara pada saat era pendudukan Jepang.</p>\r\n\r\n<p>Lawang Sewu dilengkapi juga dengan ruang bawah tanah. Pengunjung diperbolehkan ke ruang bawah tanah tak lain agar dapat mengetahui kecerdasan arsitektur zaman dulu.</p>\r\n\r\n<p>Lantai bawah tanah ini pernah menjadi penjara bagi para pejuang kemerdekaan. Hal ini sering menghembuskan aura mistis tentang ruangan gedung ini. Fungsinya sebenarnya dari ruang tersebut adalah sebagai drainase, saluran air. Itulah mengapa ruang bawah tanah Lawang Sewu ini lembap, berlangit-langit rendah, dan gelap.</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/goa-kreo-semarang/\" rel=\"noopener noreferrer\" target=\"_blank\">Goa Kreo Semarang Tiket &amp; 7 Daya Tarik Utama</a></p>\r\n\r\n<h2>Kontak Dan Lokasi Lawang Sewu</h2>\r\n\r\n<p>Bangunan tua bersejarah ini&nbsp;<a href=\"https://goo.gl/maps/6richgx3GAhVXCE79\" rel=\"noopener noreferrer\" target=\"_blank\">berlokasi di Jl. Pemuda, Sekayu, Semarang Tengah</a>, Kota Semarang, Jawa Tengah 50132. Infromasi lebih lanjut silakan menghubungi nomor telepon 0243542015</p>\r\n', ''),
(101, 'Sam Poo Kong', '<p><strong>Klenteng Sam Poo Kong</strong>&nbsp;merupakan tempat bersejarah dengan keindahan bangunan berseni kerajaan China. Luasnya sekitar 3,5 hektare.&nbsp;Klenteng tersebut memiliki sejarah perkembangan Islam yang disebarkan Laksamana Zheng He.</p>\r\n\r\n<p>Antara tahun 1405 hingga 1433, Laksamana Zheng He (Ceng Ho) melakukan ekspedisi di Nusantara. Ia seorang pelaut dan penjelajah Tiongkok yang terlahir dengan nama Ma San Bao. Itulah alasan tempat petilasannya menggunakan nama Sam Poo Kong.</p>\r\n\r\n<h2>Harga Tiket Masuk Klenteng Sam Poo Kong</h2>\r\n\r\n<p>Wisatawan yang ingin melihat keindahan klenteng ini akan dikenakan biaya tiket yang cukup murah. Tiket dibedakan berdasarkan usia pengunjung.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"text-align:center\"><strong>Harga Tiket Masuk Klenteng Sam Poo Kong</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><strong>Jenis Tiket</strong></td>\r\n			<td style=\"text-align:center\"><strong>Tiket Umum</strong></td>\r\n			<td style=\"text-align:center\"><strong>Tiket Terusan</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"text-align:center\">Senin &ndash; Jumat</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Dewasa</td>\r\n			<td style=\"text-align:center\">Rp8.000</td>\r\n			<td style=\"text-align:center\">Rp28.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Anak</td>\r\n			<td style=\"text-align:center\">Rp5.000</td>\r\n			<td style=\"text-align:center\">Rp15.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Foreign Adult</td>\r\n			<td style=\"text-align:center\">Rp10.000</td>\r\n			<td style=\"text-align:center\">Rp40.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Foreign Kid</td>\r\n			<td style=\"text-align:center\">Rp8.000</td>\r\n			<td style=\"text-align:center\">Rp25.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\" style=\"text-align:center\">Sabtu &ndash; Minggu &amp; Libur Nasional</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Dewasa</td>\r\n			<td style=\"text-align:center\">Rp12.000</td>\r\n			<td style=\"text-align:center\">Rp30.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Anak</td>\r\n			<td style=\"text-align:center\">Rp8.000</td>\r\n			<td style=\"text-align:center\">Rp15.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Foreign Adult</td>\r\n			<td style=\"text-align:center\">Rp15.000</td>\r\n			<td style=\"text-align:center\">Rp45.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Foreign Kid</td>\r\n			<td style=\"text-align:center\">Rp10.000</td>\r\n			<td style=\"text-align:center\">Rp30.000</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Untuk tiket umum mencakup: Area Patung Zheng He (Cheng Ho) dan bangunan panggung. Sedangkan untuk tiket terusan sudah termasuk Area Patung Zheng He (Cheng Ho), bagungan panggung, Seluruh Area Klenteng, Rilief dan Akar Rantai. Bagi pengunjung yang datang untuk berdoa tiket masuk akan dikembalikan sesuai dengan syarat dan ketentuan yang berlaku.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/lawang-sewu-semarang/\" rel=\"bookmark\" title=\"Lawang Sewu Semarang Tiket &amp; 5 Daya Tarik Utama Mei 2019\">Lawang Sewu Semarang Tiket &amp; 5 Daya Tarik Utama</a></p>\r\n\r\n<h2>Jam Buka Sam Poo Kong</h2>\r\n\r\n<p>Untuk kegiatan wisata, klenteng dibuka mulai dari pagi hingga malam hari. Buka setiap hari kecuali hari Minggu.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\"><strong>Jam Operasional Sam Poo Kong</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Senin &ndash; Sabtu</td>\r\n			<td>08.00 &ndash; 20.00 WIB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>Daya Tarik Wisata Klenteng Sam Poo Kong</h2>\r\n\r\n<p>Terdapat empat klenteng di Sam Poo Kong. Diantaranya Klenteng Dewa Bumi, Klenteng Juru Mudi, Klenteng Sam Poo Tay Djien, dan Klenteng Kyai Jangkar. Di samping itu, berikut bagian-bagian menarik dari Sam Poo Kong :</p>\r\n\r\n<h3>1. Keunikan Arsitektur Klenteng Sam Poo Kong</h3>\r\n\r\n<p><img alt=\"Suasana malam klenteng sam po kong\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/Klenteng-Sam-Po-Kong-Malam-Hari-Resa-Ardianto-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Suasana malam di Klenteng Sam Poo Kong menjadi daya tarik tersendiri. Foto: Google Maps/Resa Ardianto</p>\r\n\r\n<p>Kelenteng Sam Poo Kong memiliki percampuran corak China dan Jawa. Bangunannya mirip rumah Joglo yang tidak menggunakan sekat dinding. Desain atap limasan tumpuk menurun khas rumah Jawa dengan penopang konstruksi balok tanpa kuda-kuda. Beberapa bagian klenteng memiliki pahatan batu menyerupai candi-candi Jawa.</p>\r\n\r\n<p>Unsur China terlihat dari nuansa merah yang punya arti keberuntungan. Terdapat juga ornamen relief naga, burung&nbsp;<em>hong</em>, dan kura-kura pada tiang struktur dan di alas patung. Ujung atap meruncing naik sesuai karakter orang China yang selalu bersemangat.</p>\r\n\r\n<p>Menariknya, kelenteng ini juga punya unsur Islam. Zeng He sendiri dipercaya menganut agama Islam. Ini terlihat pada penataan altar gua batu sehingga umat yang beribadah menghadap barat laut. Dalam kepercayaan Muslim, barat laut berarti menghadap ke Mekkah. Corak Islam juga terlihat pada bagian langit-langit berwarna hijau dan keberadaan beduk.</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/saloka-park-semarang/\" rel=\"bookmark\" title=\"SALOKA PARK Semarang Tiket &amp; 7 Wahana Top Mei 2019\">SALOKA PARK Semarang Tiket &amp; 7 Wahana Top</a></p>\r\n\r\n<h3>2. Tempat Pemujaan Dewa Bumi</h3>\r\n\r\n<p>Dewa Bumi merupakan dewa rezeki dan berkah. Kelahiran Dewa Bumi dirayakan setiap tanggal 2, bulan 2 kalender Tionghoa. Sementara setiap tanggal 15 bulan 8 kalendar Tionghoa dirayakan sebagai hari ucapan terima kasih untuk Dewa Bumi. Umat akan memberikan kue rembulan sebagai ucapan syukur rezeki sepanjang tahun kemarin.</p>\r\n\r\n<h3>3. Makam Kyai Juru Mudi</h3>\r\n\r\n<p>Di belakang meja altar, nisan makam Wang Jing Hong terukir tulisan Makam Kjai Djoeroemoedi. Tinggi makam 1,5 meter dan dikelilingi kelambu.</p>\r\n\r\n<p>Wang Jing Hong adalah nahkoda (juru mudi) Laksamana Zeng He. Kedatangannya karena sakit menjadi asal muasal Klenteng Sam Poo Kong. Ia harus beristirahat di Semarang untuk mendapat pengobatan. Setelah sembuh, ia memilih tetap tinggal di Semarang hingga tutup usia.</p>\r\n\r\n<p>Wang Jing Hong meninggal pada usia 87 tahun dan dimakamkan di samping gua Sam Poo Kong. Makam tersebut dikenal dengan sebutan Makam Kyai Juru Mudi. Makam ini diziarahi khususnya setiap malam Selasa Kliwon dan malam Jumat Kliwon.</p>\r\n\r\n<h3>4. Tempat Pemujaan Sam Poo Kong / Sam Poo Tay Djien</h3>\r\n\r\n<p><img alt=\"arsitektur gedung klenteng ibadah sam poo kong semarang jawa tengah\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/gedung-klenteng-Sam-Poo-Kong-wisata.sampookong-e1556505961949-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Uniknya daya tarik seni arsitektur dan keagamaan Klenteng Sam Poo Kong.<br />\r\nFoto : Instagram/<a href=\"http://instagram.com/wisata.sampookong\" rel=\"noopener noreferrer\" target=\"_blank\">wisata.sampookong</a></p>\r\n\r\n<p>Inilah tempat utama bagi umat sembahyang pada Sam Poo Kong. Dinding luarnya dihiasi relief perjalanan Laksamana Zheng He selama 30 tahun di abad ke-15. Bebatuan yang digunakan untuk relief ini berasal dari Tiongkok. Sementara ukirannya dikerjakan seniman Bali.</p>\r\n\r\n<p>Ada dua patung kecil simbol kedatangan Zheng He ke Semarang. Patung pertama berwajah hitam dari cendana, melambangkan kedatangan pertama Zheng He tahun 1406. Patung kedua berwajah merah dari porselen, melambangkan kedatangan kedua Zheng He tahun 1416.</p>\r\n\r\n<p>Sementara itu ada satu patung besar Sam Poo Kong di tengah-tengah dari emas dan perunggu. Patung besar ini hanya sekedar simbol. Yang memiliki nilai penting justru dua patung yang berukuran kecil.</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/taman-wisata-kopeng-semarang/\" rel=\"bookmark\" title=\"Taman Wisata KOPENG Tiket &amp; 6 Aktivitas Seru Mei 2019\">Taman Wisata KOPENG Tiket &amp; 6 Aktivitas Seru</a></p>\r\n\r\n<h3>5. Gua Gedung Batu</h3>\r\n\r\n<p>Lokasi utama klenteng ini ada pada Gua Batu. Gua Gedung Batu berada di ruang bawah klenteng. Dipercaya menjadi tempat petilasan/ruang sembahyang Laksamana Zheng He.</p>\r\n\r\n<p>Gua tidak bisa diakses banyak orang. Ada pembatas berupa jeruji besi. Yang terlihat dari luar hanya patung Zeng He di tengah ruangannya.</p>\r\n\r\n<p>Di dalam Gedung Batu terdapat sumur berisi mata air yang dianggap suci. Air ini tidak boleh digunakan untuk sumpah, perceraian atau air minum. Pengunjung diperbolehkan mengambil air dari sumur dengan asistensi.</p>\r\n\r\n<h3>6. Patung Zheng Ho di Klenteng Sam Poo Kong</h3>\r\n\r\n<p><img alt=\"patung laksamana zeng he setinggi 10,7 meter\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/patung-Laksamana-Zeng-He-wisata.sampookong-e1556506262531-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Patung Laksamana Zeng He setinggi 10,7 meter di pelataran Sam Poo Kong. Foto : Instagram/wisata.sampookong</p>\r\n\r\n<p>Patung ini memiliki tinggi 10,7 meter. Patung perunggu ini lebih tinggi dibanding patung serupa di Malaysia.</p>\r\n\r\n<p>Keberadaan Zeng He membuat klenteng dikunjungi peziarah dari penganut Tridharma maupun pemeluk Islam. Karena ia turut menyebarkan Islam selama ekspedisinya di nusantara.</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/kampung-pelangi-semarang/\" rel=\"bookmark\" title=\"KAMPUNG PELANGI Semarang Tiket &amp; 5 Pesona Artistik\">KAMPUNG PELANGI Semarang Tiket &amp; 5 Pesona Artistik</a></p>\r\n\r\n<h3>7. Makam Kyai Djangkar, Tempat Pemujaan Kong Hu Cu &amp; Rumah Arwah Hoo Ping</h3>\r\n\r\n<p>Di gedung ini ada tiga tempat pemujaan. Di sisi paling kiri ada Makam Kyai Djangkar. Dipercaya, di sinilah letak jangkar sekoci jatuh ketika armada Zheng He pertama datang ke Jawa.</p>\r\n\r\n<p>Di tengah, ada tempat pemujaan untuk pendiri agama Kong Hu Cu. Posisinya mengambil porsi paling besar.</p>\r\n\r\n<p>Kemudian paling kanan Rumah Arwah Hoo Ping (arwah yang tidak dirawat keluarganya, termasuk awak kapal Zeng He). Arwah Hoo Ping diperingati tiga kali dalam setahun: sehari sebelum Imlek, saat Ceng Beng dan saat upacara Ulambama.</p>\r\n\r\n<h3>8. Tempat Kyai Nyai Tumpeng &ndash; Juru Masak</h3>\r\n\r\n<p>Kyai Nyai Tumpeng adalah juru masak Zheng He. Dulunya ini tanah biasa. Sampai ada seorang suhu datang untuk sembahyang dan kerasukan. Ia menyebut-nyebut &ldquo;Tumpeng! Tumpeng!&rdquo;. Maka yayasan membuatkan tempat ini sebagai penghormatan terhadap Han Li Bao, sang juru masak.</p>\r\n\r\n<h3>9. Tempat Nyai Cundrik Bumi</h3>\r\n\r\n<p>Dulunya, area ini tempat penyimpanan dan perawatan pusaka. Di sini merupakan tempat gua lama berada sebelum dipindahkan karena longsor. Sekarang hanya menjadi simbolisasi saja dan tidak ada lagi pusaka di tempat ini.</p>\r\n\r\n<h3>10. Pohon Rantai</h3>\r\n\r\n<p>Di dekat tempat pemujaan Kyai Jangkar terdapat pohon unik. Bentuk dahannya menyerupai rantai &nbsp;atau tambang kapal. Orang dulu percaya batang itu terbentuk dari rantai kapal Zeng He yang dilempar ke tanah.</p>\r\n\r\n<h3>11. Festival di Sam Poo Kong</h3>\r\n\r\n<p><img alt=\"Sewa kostum dan festival\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/sewa-kostum-di-Sam-Poo-Kong-wisata.sampookong-640x419.jpg\" style=\"height:419px; width:640px\" /></p>\r\n\r\n<p>Wisatawan dapat menyewa kostum dan berfose ala Kerajaan Tiongkok di Klenteng Sam Poo Kong. Foto : Instagram/wisata.sampookong</p>\r\n\r\n<p>Sam Poo Kong rutin mengadakan festival Zeng He. Festival ini untuk memperingati HUT Sam Poo Kong sekaligus peringatan kedatangan Laksamana Zeng He di Semarang. Festival peringatan ini diadakan antara Juli hingga Agustus setiap tahunnya.</p>\r\n\r\n<p>Kebanyakan pengunjung datang ke Sam Poo Kong untuk berburu foto. Namun perlu diingat bahwa Sam Poo Kong merupakan tempat ibadah. Pengunjung diharap menjaga sikap dan ketertiban untuk menghormati umat yang beribadah.</p>\r\n\r\n<p>Wisatawan juga bisa berkunjung saat Imlek karena suasana kelenteng akan lebih ramai dan menarik. Peringatan Imlek di Klenteng Sam Poo Kong berisi kegiatan bazar kuliner, lomba kreasi tumpeng, keroncong, barongsai, kostum figure, reog bali. Puncak acara digelar pertunjukan tari Gambang Semarang dan perlombaan barongsai.</p>\r\n\r\n<h2>Lokasi Klenteng Sam Poo Kong</h2>\r\n\r\n<p><a href=\"https://goo.gl/maps/sDj8b4VPnfqtuoQB6\" rel=\"noopener noreferrer\" target=\"_blank\">Kleteng ini bisa dikunjungi di Jl. Simongan No.129</a>, Bongsari, Semarang Barat, Kota Semarang, Jawa Tengah 50148. Informasi lebih lanjut silakan menghubungi (024) 7605277.</p>\r\n', ''),
(103, 'Goa Kreo', '<p><strong>Goa Kreo Semarang</strong>&nbsp;yang berada di ibukota Jawa Tengah ini begitu hit di kalangan&nbsp;<em>netizen</em>. Tak heran jika cuaca cerah, antrian menuju ke sana begitu mengular. Meski tak ada angkutan umum menuju ke sana, tak menghalangi rasa penasaran wisatawan.</p>\r\n\r\n<p>Gua ini terbentuk secara alami yang membedakan gua ini dengan gua lainnya adalah letaknya. lokasinya terletak di tengah waduk jatibarang, sebuah bendungan yang membendung Sungai Kreo.</p>\r\n\r\n<h2>Harga Tiket Masuk Goa Kreo Semarang</h2>\r\n\r\n<p>Tiket masuk ke obyek wisata Goa Kreo termasuk murah meriah. Wisatawan cukup membayar beberapa ribu rupiah saja untuk bisa menikmati keindahan gua ini.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"text-align:center\"><strong>Harga Tiket Masuk Goa Kreo Semarang</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Tiket Hari Biasa</td>\r\n			<td style=\"text-align:center\">Rp6.500</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Tiket Hari Libur</td>\r\n			<td style=\"text-align:center\">Rp8.000</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/taman-rekreasi-marina-semarang-4-aktivitas-top/\" rel=\"noopener noreferrer\" target=\"_blank\">Taman REKREASI MARINA Semarang &amp; 4 Aktivitas Top</a></p>\r\n\r\n<h2>Jam Buka Goa Kreo Semarang</h2>\r\n\r\n<p>Pengunjung bisa berwisata ke sini mulai pagi hingga sore hari. Kawasan wisata gua ini sudah buka setiap hari mulai pukul 08.00 pagi.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"text-align:center\"><strong>Jam Buka</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">Setiap Hari</td>\r\n			<td style=\"text-align:center\">08.00 &ndash; 17.00 WIB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>Daya Tarik Wisata Goa Kreo Semarang</h2>\r\n\r\n<p>Dibukanya gua ini sebagai tempat wisata tentu karena memiliki daya tarik yang unik. Gua yang punya sejarah dan legenda ini selalu ramai di kunjungi. Berikut beberapa daya tarik wisata bagi pengunjung yang datang ke sini.</p>\r\n\r\n<h3>1. Legenda &amp; Sejarah Goa Kreo Semarang</h3>\r\n\r\n<p><img alt=\"prasasti legenda goa kreo semarang\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/Sejarah-Legenda-Goa-Kreo-Romie-Mocka-640x480.jpg\" style=\"height:480px; width:640px\" /></p>\r\n\r\n<p>Prasasti yang menceritakan legenda dan sejarah Goa Kreo Semarang. Foto: Google Maps/Romie Mocka</p>\r\n\r\n<p>Menurut cerita yang beredar di masyarakat, gua ini dulunya merupakan petilasan Sunan Kalijaga. Alkisah Sunan Kalijaga sedang dalam perjalanan membawa kayu jati dari Jatibarang ke Demak. Namun beliau selalu kesulitan ketika membawanya melalui jalur darat.</p>\r\n\r\n<p>Akhirnya sang sunan melakukan tafakur (bertapa) di gua yang sekarang disebut Kreo ini. Tak berapa lama datanglah gerombolan monyet ekor panjang. Diantara monyet tersebut ada 4 ekor yang warnanya berbeda (merah, putih, kuning, emas).</p>\r\n\r\n<p>Uniknya, sekawanan monyet ekor panjang ini membantu sang sunan memindahkan kayu. Menurut legenda, kayu tersebut akan digunakan membuat tiang Masjid Demak. Setelah berhasil memindahkan kayu, Sunan Kalijaga berterima kasih kepada kawanan monyet tersebut.</p>\r\n\r\n<p>Tak disangka, sekawanan monyet itu terus mengikuti sang sunan. Sang sunan berpesan kepada monyet untuk tinggal di sini saja menjaga kayu jati. &ldquo;Mangreho&rdquo;, yang berarti jagalah, yang akhirnya menjadi nama Goa Kreo.</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/water-blaster-semarang-harga-tiket-masuk-2015/\" rel=\"noopener noreferrer\" target=\"_blank\">WATER BLASTER SEMARANG Tiket, 4 Wahana &amp; Atraksi</a></p>\r\n\r\n<p>Hingga sekarang sekawanan monyet ekor panjang masih menjadi penghuni gua ini hingga kini. Itulah sebabnya jangan kaget ketika mengunjungi tempat ini, wisatawan akan disambut sekelompok monyet. Pengunjung bisa memberi makan monyet dengan membawa makanan sendiri dari rumah.</p>\r\n\r\n<h3>2. Melewati Jembatan yang Indah</h3>\r\n\r\n<p><img alt=\"jembatan akses ke goa kreo\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/Jembatan-akses-menuju-goa-kreo-fajar-Arifin-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Jembatan yang memudahkan akses pengunjung ke area gua. Foto: Google Maps/fajar Arifin</p>\r\n\r\n<p>Seperti disinggung sebelumnya, gua ini berada di tengah-tengah bendungan. Hal ini membuat pengunjung harus menyeberangi bendungan untuk sampai ke Goa Kreo. Untuk menyeberangi bendungan, ada jembatan melintang yang kokoh dan eksotis.</p>\r\n\r\n<p>Sebelum melintasi jembatan merah yang kokoh tersebut, pengunjung harus menuruni beberapa anak tangga. Tak hanya sebagai penghubung untuk sampai ke goa, jembatan ini memiliki fungsi lain. Apalagi kalau bukan spot foto, karena memang keren bisa berfoto di jembatan ini.</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/taman-bunga-celosia-bandungan/\" rel=\"noopener noreferrer\" target=\"_blank\">TAMAN BUNGA CELOSIA Semarang Tiket &amp; Aktivitas</a></p>\r\n\r\n<h3>3. Sunset di Kawasan Goa Kreo Semarang</h3>\r\n\r\n<p><img alt=\"menikmati sunset dari jembatan akses\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/Sunset-di-Goa-Kreo-Kak-Nuri-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Menikmati matahari tenggelam (sunset) dari jembatan yang merupakan akses ke area gua. Foto: Google Maps/Kar Nuri</p>\r\n\r\n<p>Menikmati keindahan matahari terbenam dari atas air memang memberi suasana lain. Itulah yang bisa pengunjung rasakan ketika berwisata ke Goa Kreo. Selain sebagai spot foto keren, melihat sunset dari jembatan akan memberi kedamaian tersendiri.</p>\r\n\r\n<h3>4. Berfoto Dengan Pakaian Ala Korea</h3>\r\n\r\n<p>Kawasan sekitar gua terdapat berbagai spot foto buatan yang unik bagi wisatawan. Spot foto yang pertama adalah tema Korea. Pengunjung bisa berfoto dengan background bunga sakura ala Korea dengan pemandangan waduk.</p>\r\n\r\n<p>Agar semakin menarik, tersedia penyewaan pakaian tradisional Korea (hanbok) bagi pengunjung. Untuk menyewa hanbok, pengunjung cukup membayar Rp15.000. Pengunjung bisa menggunakan properti tambahan, seperti bunga, boneka dengan menambah Rp5.000 per properti.</p>\r\n\r\n<p>Baca:&nbsp;<a href=\"https://travelspromo.com/htm-wisata/old-city-3d-trick-art-museum-semarang/\" rel=\"noopener noreferrer\" target=\"_blank\">Old City 3D Museum Semarang Tiket &amp; 8 Spot Foto Unik</a></p>\r\n\r\n<h3>5. Pemandangan Waduk dan Bukit</h3>\r\n\r\n<p><img alt=\"waduk jatibarang goa kreo\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/Pemandangan-waduk-jatibarang-goa-kreo-radhiyatul-fajri-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Dari kawasan gua pengunjung juga bisa menikmati keindahan waduk jatibarang. Foto: Google Maps/radhiyatul fajri</p>\r\n\r\n<p>Tak seperti di&nbsp;<a href=\"https://travelspromo.com/htm-wisata/goa-jatijajar-kebumen/\" rel=\"noopener noreferrer\" target=\"_blank\">Goa Jatijajar</a>&nbsp;yang di dalamnya terdapat diorama Lutung Kasarung. Gua ini tidak menawarkan eksotisme seperti itu. Goa Kreo lebih menawarkan keindahan pemandangan waduk dan bukit dengan pohon yang rindang.</p>\r\n\r\n<h3>6. Rumah Eskimo</h3>\r\n\r\n<p><img alt=\"spot foto rumah eskimo\" src=\"https://travelspromo.com/wp-content/uploads/2019/04/Rumah-eskimo-goa-kreo-640x360.jpg\" style=\"height:360px; width:640px\" /></p>\r\n\r\n<p>Spot foto rumah eskimo. Foto: Instagram/<a href=\"https://www.instagram.com/anakhitssemarang/\" rel=\"noopener noreferrer\" target=\"_blank\">anakhitssemarang</a></p>\r\n\r\n<p>Tak hanya spot foto Korea, di sini juga terdapat spot foto rumah eskimo. Masih menggunakan background air waduk, namun kini temanya salju dan rumah eskimo. Spot foto seperti ini sebenarnya hanya memanfaatkan halaman belakang rumah penduduk sekitar.</p>\r\n\r\n<p>Kreativitas mereka dalam membuat spot foto keren patut diacungi jempol. Properti yang mereka desain dan gunakan benar-benar menyatu dengan tema. Ada pengelola di setiap spot yang siap mengambil gambar terbaik dari pose pengunjung.</p>\r\n\r\n<h3>7. Spot Foto di Atas Awan</h3>\r\n\r\n<p>Ada spot foto lain yang tak kalah menarik, yaitu spot foto awan. Spot foto ini begitu simpel, karena hanya tersusun dari kapas. Dengan angle yang tepat, berfoto di sini membuat pengunjung seakan bermain di awan.</p>\r\n\r\n<h2>Fasilitas Di Goa Kreo</h2>\r\n\r\n<p>Untuk mengakomodasi segala kegiatan pengunjung di kawasan obyek wisata gua ini pengelola menyediakan berbagai fasilitas penunjang. Fasilitas pertama berupa kamar mandi yang ada di dalam (melewati jembatan). Selain itu juga ada mushola yang berada di bagian depan.</p>\r\n\r\n<h2>Lokasi Dan Kontak Goa Kreo</h2>\r\n\r\n<p><a href=\"https://goo.gl/maps/uYsqPgkRpTSYCidG6\" rel=\"noopener noreferrer\" target=\"_blank\">Berada di kawasan Waduk Jatibarang</a>, tepatnya di Jl. Raya Goa Kreo, Kandri, Gn. Pati, Kota Semarang, Jawa Tengah 50222. Untuk informasi silakan menghubungi nomer (024) 8449917.</p>\r\n', ''),
(107, 'Dusun Semilir', '<h1>Dusun Semilir Eco Park</h1>\r\n\r\n<p>Kabupaten Semarang seakan gak pernah kehabisan ide untuk menyuguhkan wisata keluarga. Setelah muncul wisata Mini Mania di Cimory on the Valley dan Saloka Park, kini hadir pula sebuah wisata&nbsp;<em>eco park</em>&nbsp;yang menggabungkan konsep alam, pedesaan, kuliner nusantara, dan wisata edukasi dalam satu lokasi.</p>\r\n\r\n<p>Hmm, terdengar sangat menarik, bukan? Daripada penasaran, yuk simak ulasan lengkap tentang Dusun Semilir, wisata eco park baru di kecamatan Bawen, kabupaten Semarang.</p>\r\n\r\n<h2>1. Disambut Kubah Stupa yang megah</h2>\r\n\r\n<p><img alt=\"6 Potret Kece Dusun Semilir, Wisata Eco Park di Bawen Semarang\" src=\"https://cdn.idntimes.com/content-images/community/2019/07/img-1577-d483d7d79a0d8f3f0718be5f3d014a6d.JPG\" />Dok. Pribadi/Intan Deviana</p>\r\n\r\n<p>Daya tarik utama Dusun Semilir terletak pada lima buah Kubah Stupa yang menjadi ruangan utama wisata ini. Bentuk Kubah Stupa tersebut begitu megah dan sangat mencolok, sehingga kamu bisa melihatnya dengan sangat jelas dari ruas jalan Soekarno-Hatta, tempat di mana wisata ini berada.</p>\r\n\r\n<p>Dari desain Kubah Stupa ini saja sudah menjadi bukti kalau Dusun Semilir merupakan wisata berkonsep sangat menarik dan estetis.</p>\r\n\r\n<h2>2. Belanja suvenir, pernak-pernik dan camilan khas Indonesia di tepi hutan tropis minimalis</h2>\r\n\r\n<p><img alt=\"6 Potret Kece Dusun Semilir, Wisata Eco Park di Bawen Semarang\" src=\"https://cdn.idntimes.com/content-images/community/2019/07/61542041-2431888623713765-6500761701824702958-n-3c53abc5f2a74c31e0d19511ac3a2ea9.jpg\" />Instagram/Dusun Semilir</p>\r\n\r\n<p>Di dalam Kubah Stupa tadi, ada dua buah&nbsp;<em>store</em>&nbsp;yang menjual berbagai suvenir, pernak-pernik, dan makanan khas Indonesia. Di&nbsp;<em>store</em>&nbsp;tersebut, kamu bisa menjumpai banyak sekali benda warisan nusantara dalam bentuk pakaian batik dan kerajinan tangan dari berbagai daerah di Indonesia.</p>\r\n\r\n<p>Di&nbsp;<em>store</em>&nbsp;berikutnya, khusus menjual makanan dan camilan khas dari Semarang, termasuk juga dari beberapa daerah lain. Kamu bisa belanja bandeng presto, wingko babat, bakpia, aneka jenis kopi, lanting, intip, gulali rambut nenek, dan masih banyak lagi.</p>\r\n\r\n<p>Yang unik, kedua&nbsp;<em>store</em>&nbsp;tadi dipisahkan oleh sebuah hutan tropis. Gak besar sih ukurannya, namun keberadaan hutan tropis tersebut cukup mampu menyuguhkan suasana sejuk dan rindang di dalam Kubah Stupa.</p>\r\n\r\n<h2>3. Menelusuri panjangnya lorong Jembatan Senggol</h2>\r\n\r\n<p><img alt=\"6 Potret Kece Dusun Semilir, Wisata Eco Park di Bawen Semarang\" src=\"https://cdn.idntimes.com/content-images/community/2019/07/62135051-174812140211786-499396674951797682-n-82076c7b287cec850ad5d2e51afe05af.jpg\" />instagram.com/dusunsemilir</p>\r\n\r\n<p>Jangan terkecoh dengan namanya. Meski dinamakan Jembatan Senggol, area menyerupai lorong dengan atap dari anyaman bambu ini cukup lebar dilalui pengunjung. Kamu gak perlu khawatir bersenggolan dengan pengunjung lain.</p>\r\n\r\n<p>Jembatan ini kerap dijadikan lokasi berswafoto karena desainnya yang gak kalah&nbsp;<em>instagenic</em>&nbsp;dengan Kubah Stupa tadi. Dari Jembatan Senggol, kamu bisa leluasa melihat pemandangan di sekeliling Dusun Semilir yang ternyata areanya begitu luas.</p>\r\n\r\n<p>LANJUTKAN MEMBACA ARTIKEL DI BAWAH</p>\r\n\r\n<h3>Editor&rsquo;s Picks</h3>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.idntimes.com/travel/tips/naufal-al-rahman-1/dampak-positif-berwisata-alam\">10 Dampak Positif Yang Kita Dapatkan Setelah Berwisata Alam, Coba Deh!</a></li>\r\n	<li><a href=\"https://www.idntimes.com/travel/destination/hendria-1/bangunan-megah-di-uttar-pradesh-india-c1c2\">Dari Makam Sampai Istana, Ini 10 Bangunan Megah Di Uttar Pradesh India</a></li>\r\n	<li><a href=\"https://www.idntimes.com/travel/destination/alfi-ramadana-1/pengunjung-bromo-dibatasi-hanya-30-persen-dari-total-kuota\">Pengunjung Bromo Dibatasi Hanya 30 Persen Dari Total Kuota</a></li>\r\n</ul>\r\n\r\n<p>Selain itu, ada banyak gerobak tradisional beraneka warna yang menjual beragam&nbsp;<em>street foods and drinks</em>. Beberapa bangku kecil juga tersedia. Memanjakan sekali, ya!</p>\r\n\r\n<p><a href=\"https://www.idntimes.com/travel/destination/alifatul-mufarrohah/5-desa-wisata-di-indonesia-c1c2\" target=\"_blank\"><strong><em>Baca Juga: 5 Desa Wisata di Indonesia Ini Wajib Kamu Kunjungi Sekali Seumur Hidup</em></strong></a></p>\r\n\r\n<h2>4. Mau makan berat? Di Sepoi-sepoi Food Garden aja!</h2>\r\n\r\n<p><img alt=\"6 Potret Kece Dusun Semilir, Wisata Eco Park di Bawen Semarang\" src=\"https://cdn.idntimes.com/content-images/community/2019/07/61941251-615370862302103-1781439959728499948-n-f6bb0ffd9dc112186cb39f07c886c955.jpg\" />Instagram/Dusun Semilir</p>\r\n\r\n<p>Nah, kalau jajanan di Jembatan Senggol tadi belum cukup mengenyangkan perutmu, melipir saja ke Sepoi-sepoi Food Garden. Lokasinya tepat berada di ujung Jembatan Senggol. Dinamakan sepoi-sepoi karena angin di resto tersebut memang cukup semilir, cocok dengan nama wisata Dusun Semilir.</p>\r\n\r\n<p>Jika cuaca sedang cerah dan tidak berawan, kamu bisa menemukan&nbsp;<em>view</em>&nbsp;gunung Ungaran dari resto ini. Keren banget pokoknya!</p>\r\n\r\n<h2>5. Fasilitas penunjang sangat lengkap</h2>\r\n\r\n<p><img alt=\"6 Potret Kece Dusun Semilir, Wisata Eco Park di Bawen Semarang\" src=\"https://cdn.idntimes.com/content-images/community/2019/07/img-1552-46092e5fcd63c902a84fed4c306356c0.JPG\" />Dok. Pribadi/Intan Deviana</p>\r\n\r\n<p>Untuk memenuhi standar tempat wisata yang baik, Dusun Semilir menyediakan toilet, musala, dan tempat sampah yang memadai. Gak hanya itu, pengelola juga gak luput menyediakan kursi roda untuk pengunjung difabel dan lansia.</p>\r\n\r\n<h2>6. Dalam proses pembangunan tahap kedua</h2>\r\n\r\n<p><img alt=\"6 Potret Kece Dusun Semilir, Wisata Eco Park di Bawen Semarang\" src=\"https://cdn.idntimes.com/content-images/community/2019/07/img-1570-bd7f604b5c79546a56b90c697de4e392.JPG\" />Dok. Pribadi/Intan Deviana</p>\r\n\r\n<p>Semua spot menarik di atas rupanya baru pembangunan tahap pertama, lho. Berikutnya bakal dilakukan pembangunan tahap kedua yang kabarnya akan menambah beberapa spot dan fasilitas menarik lagi.</p>\r\n\r\n<p>Sebutlah Pet Village, Banyu Biru, Play Park, Exotic Village, dan The Villas Glamping. Duh, gimana gak jadi serbuan wisatawan kalau pilihan wisatanya sebanyak itu?</p>\r\n\r\n<p>Jadi, gimana? Makin gak sabar plesiran ke Semarang untuk singgah ke Dusun Semilir? Yuk, segera agendakan! Tiket masuknya cuma seharga Rp5.000, lho. Harga ini barangkali akan naik jika seluruh pembangunan sudah rampung dibuat. Siap-siap gak mau pulang deh kalau datang ke Dusun Semilir!</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` text NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `email`, `komentar`, `nama`) VALUES
(1, 'naruto@gmail.com', 'Websitenya Suggoi tampilannya menarik dan keren abis, saya suka saya suka KIRTS', 'Naruto'),
(3, 'whyrchmn19@gmail.com', 'Anjay Keren Banget Tuhhh', 'Wahyu'),
(4, 'ekia@gmail.com', 'Ajarin Dong banggg, bikin website kayak gini hihihihihihi', 'Kiky A'),
(5, 'nama5@gmail.com', 'Thanks KIRTS sudah membantu saya dalam mengerjakan tugas sekolah', 'Sasuke'),
(6, 'whyrchmn07@gmail.com', 'Ashiyap Ashiyap Ashiyap Ashiyap', 'Eki'),
(7, 'awok@yahoo.com', 'keren minn, Semoga ke depannya bisa menjadi lebih baik lagi.', 'Anya Geraldine');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Kirts', 'nama1@gmail.com', '581801.jpg', '$2y$10$XNM3mqC2XBk31Gt7P4nse.vUtbuGYsYjivt4GONBumQlsei7yHPzS', 1, 1, 1592354969),
(2, 'Annantasya Aulia Gani', 'nama2@gmail.com', 'tasya.jpg', '$2y$10$e.Az.NQVCdp/f1Um3aXBw.heX5CDmxAbHBZCOjToCGSNEdrVcDpg2', 2, 1, 1592355712),
(4, 'Wahyu rochman', 'whyrchmn19@gmail.com', 'default.jpg', '$2y$10$ngUf6CxTY97QrHctwMQgK.bWKWV9P0npj0/yHRwXNKJHMnDx5Haem', 2, 1, 1592629364),
(5, 'Admin', 'admin@gmail.com', 'default.jpg', '1234', 1, 1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(15, 'ANJAY');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`no_agen`);

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`no_pesan`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `no_agen` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `no_pesan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
