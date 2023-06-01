-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2022 pada 07.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdn2sidorejo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `agenda_deskripsi` text DEFAULT NULL,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(1, 'Penyembelihan Hewan Kurban Idul Adha 2017', '2017-01-22 06:18:01', 'Idul Adha yang biasa disebut lebaran haji atapun lebaran kurban sangat identik dengan penyembelihan hewan kurban. M-Sekolah tahun ini juga melakukan penyembelihan hewan kurban. Yang rencananya akan dihadiri oleh guru-guru, siswa dan pengurus OSIS.', '2017-01-22', '2017-01-22', 'M-Sekolah', '08.00 - 11.00 WIB', 'Dihadiri oleh guru-guru, siswa dan pengurus OSIS', 'M Fikri Setiadi'),
(2, 'Peluncuran Website Resmi M-Sekolah', '2017-01-22 06:26:33', 'Peluncuran website resmi  M-Sekolah, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.', '2017-01-04', '2017-01-04', 'M-Sekolah', '07.30 - 12.00 WIB', '-', 'M Fikri Setiadi'),
(3, 'Penerimaan Raport Semester Ganjil Tahun Ajaran 2017-2018', '2017-01-22 06:29:49', 'Berakhirnya semester ganjil tahun pelajaran 2016-2017, ditandai dengan pembagian laporan hasil belajar.', '2017-02-17', '2017-02-17', 'M-Sekolah', '07.30 - 12.00 WIB', 'Untuk kelas XI dan XII, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas X pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.', 'M Fikri Setiadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT 0,
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(1, 'Kedatangan Tamu Asing', '2016-09-08 13:00:55', 1, 'M Fikri Setiadi', 5, '202aa754590dfc1070c624bad294abbc.jpg'),
(3, 'Pemilu Osis 2016-2017', '2017-01-21 01:58:16', 1, 'M Fikri Setiadi', 3, 'dc088a9fb62333012ff7a601828219d7.jpg'),
(4, 'Kegiatan Belajar Siswa', '2017-01-24 01:31:13', 1, 'M Fikri Setiadi', 7, '203bc0411a07ed0430d39bcc38ec2c56.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text DEFAULT NULL,
  `file_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT 0,
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(2, 'Materi Kelas 1', 'Modul dasar-dasar CSS 3. Modul ini membantu anda untuk memahami struktur dasar CSS', '2017-01-23 04:30:01', 'Drs. Joko', 0, 'ab9a183ff240deadbedaff78e639af2f.pdf'),
(3, 'Materi Kelas 2', 'Ebook 14 teknik komunikasi paling efektif membantu anda untuk berkomunikasi dengan baik dan benar', '2017-01-23 15:26:06', 'Drs. Joko', 0, 'ab2cb34682bd94f30f2347523112ffb9.pdf'),
(4, 'Materi Kelas 3', 'Ebook ini membantu anda membentuk pola pikir baru.', '2017-01-23 15:27:07', 'Drs. Joko', 0, '30f588eb5c55324f8d18213f11651855.pdf'),
(5, 'Materi Kelas 4', '7 Tips Penting mengatasi Kritik', '2017-01-23 15:27:44', 'Drs. Joko', 0, '329a62b25ad475a148e1546aa3db41de.docx'),
(6, 'Materi Kelas 5', '8 Racun dalam kehidupan kita', '2017-01-23 15:28:17', 'Drs. Joko', 0, '8e38ad4948ba13758683dea443fbe6be.docx'),
(7, 'Materi Kelas 6', 'Jurnal Teknolgi Informasi', '2017-01-25 03:18:53', 'Gunawan, S.Pd', 0, '87ae0f009714ddfdd79e2977b2a64632.pdf'),
(8, 'Materi Umum Agama', 'Jurnal Teknolgi Informasi', '2017-01-25 03:19:22', 'Gunawan, S.Pd', 0, 'c4e966ba2c6e142155082854dc5b3602.pdf'),
(9, 'Materi Umum Bahasa Inggris', 'Naskah Teknolgi Informasi', '2017-01-25 03:21:04', 'Gunawan, S.Pd', 0, '71380b3cf16a17a02382098c028ece9c.pdf'),
(10, 'Materi Umum Bahasa Jawa', 'Modul Teknologi Informasi', '2017-01-25 03:22:08', 'Gunawan, S.Pd', 0, '029143a3980232ab2900d94df36dbb0c.pdf'),
(11, 'Materi Umum Penjasorkes', 'Modul Teknologi Informasi', '2017-01-25 03:22:54', 'Gunawan, S.Pd', 0, 'ea8f3f732576083156e509657614f551.pdf'),
(12, 'Materi Umum SBK', 'Modul Teknologi Informasi', '2017-01-25 03:23:21', 'Gunawan, S.Pd', 0, 'c5e5e7d16e4cd6c3d22c11f64b0db2af.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_author`) VALUES
(4, 'Diskusi Pemilihan Ketua Osis', '2017-01-21 14:04:53', '1.jpg', ''),
(5, 'Panitia Pemilu Osis', '2017-01-22 04:13:20', '2.jpg', ''),
(6, 'Proses Pemilu Osis', '2017-01-22 04:13:43', '3.jpg', ''),
(7, 'Belajar dengan native speaker', '2017-01-24 01:26:22', '4.jpg', ''),
(8, 'Diskusi dengan native speaker', '2017-01-24 01:27:05', '5.jpg', ''),
(9, 'Foto bareng native speaker', '2017-01-24 01:27:28', '6.jpg', ''),
(10, 'Foto bareng native speaker', '2017-01-24 01:28:40', '7.jpg', ''),
(12, 'Belajar sambil bermain', '2017-01-24 01:31:42', '9.jpg', ''),
(15, 'Belajar komputer programming', '2017-01-24 01:32:34', '12.jpg', ''),
(17, 'Belajar sambil bermain', '2017-01-24 01:33:08', '14.jpg', ''),
(18, 'Makan bersama', '2017-01-24 01:33:24', '15.jpg', ''),
(19, 'Hasil Prestasi Siswa Siswi', '2022-12-13 04:17:12', '14d2934962dbfb897908861abe74f847.jpg', 'admin'),
(20, 'Peringatan Hari Pramuka Nasional', '2022-12-13 04:18:40', '505c3ca189c8c331422e4e49ca022a8a.jpg', 'admin'),
(21, 'Peringatan Hari Pramuka Nasional', '2022-12-13 04:18:48', 'aeafa57559860e1931e18cf7a938863b.jpg', 'admin'),
(22, 'Peringatan Hari Pramuka Nasional', '2022-12-13 04:18:56', '494a015a83ee848e0cb0c90d76542eef.jpg', 'admin'),
(23, 'Upacara Rutin', '2022-12-13 04:19:17', 'b785642d1d5b30af0270af1cf22406ed.jpg', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nik` varchar(16) NOT NULL,
  `guru_nuptk` varchar(100) NOT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(10) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`guru_id`, `guru_nip`, `guru_nik`, `guru_nuptk`, `guru_nama`, `guru_jenkel`, `guru_tgl_lahir`, `guru_mapel`, `guru_status`) VALUES
(12, '198612242019022001', '3312176412860001', '4556764666210103', 'Endang Suwarti', 'Perempuan', '1986-12-24', 'Guru Kelas', 'PNS'),
(13, '196603021989032012', '3312124203660001', '4634744646300092', 'Endar Lestari', 'Perempuan', '1966-03-02', 'Kepala Sekolah', 'PNS'),
(14, '196502161992032009', '3312155602650002', '1548743646300022', 'Katinem', 'Perempuan', '1965-02-16', 'Guru Kelas', 'PNS'),
(15, '0', '3312202402890003', '6556767668130122', 'Agus Cahyono', 'Laki-laki', '1989-02-24', 'Tenaga Administrasi Sekolah', 'Tenaga Honor Sekolah'),
(16, '197208182022212005', '3312205808720002', '2150750651210043', 'Rahayu Sugistiana', 'Perempuan', '1972-08-18', 'Guru Kelas', 'PPPK'),
(17, '199504162022211011', '3312201604950001', '4748773674130142', 'Andi Restiawan', 'Laki-laki', '1995-04-16', 'Guru Kelas', 'PPPK'),
(18, '198501312022211003', '3312203101850001', '9463763664200032', 'Yusuf Trenggono', 'Laki-laki', '1985-01-31', 'Guru Kelas', 'PPPK'),
(19, '0', '3312145307920002', '4045770671130113', 'Ayu Marstuti', 'Perempuan', '1992-02-13', 'Guru Kelas', 'Tenaga Honor Sekolah'),
(20, '198312122022211017', '3501071212830002', '6544761663200083', 'Ahmad Rifai', 'Laki-laki', '1983-12-12', 'Guru Kelas', 'PPPK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(40) DEFAULT NULL,
  `kelas_jumlah_siswa` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kelas_id`, `kelas_nama`, `kelas_jumlah_siswa`) VALUES
(11, 'Kelas 1', 15),
(21, 'Kelas 2 ', 6),
(31, 'Kelas 3 ', 20),
(41, 'Kelas 4 ', 27),
(51, 'Kelas 5 ', 19),
(61, 'Kelas 6 ', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_level` varchar(10) DEFAULT NULL,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_username`, `pengguna_password`, `pengguna_nohp`, `pengguna_level`, `pengguna_photo`) VALUES
(43, 'admin', 'admin', 'admin', 'admin', 'Admin', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text DEFAULT NULL,
  `pengumuman_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(1, 'Pengumuman Libur Semester Ganjil Tahun Ajaran 2016-2017', 'Libur semester ganjil tahun ajaran 2016-2017 dimulai dari tanggal 3 Maret 2017 sampai dengan tanggal 7 Maret 207.', '2017-01-21 01:17:30', 'M Fikri Setiadi'),
(2, 'Pengumuman Pembagian Raport Semester Ganjil Tahun Ajaran 2016-2017', 'Menjelang berakhirnya proses belajar-mengajar di semester ganjil tahun ajaran 2016-2017, maka akan diadakan pembagian hasil belajar/raport pada tanggal 4 Maret 2017 pukul 07.30 WIB.\r\nYang bertempat di M-Sekolah. Raport diambil oleh orang tua/wali kelas murid masing-masing', '2017-01-21 01:16:20', 'M Fikri Setiadi'),
(3, 'Pengumuman Peresmian dan Launching Website Perdana M-Sekolah', 'Peresmian dan launching website resmi M-Sekolah akan diadakan pada hari 23 Desember 2016 pukul 10.00, bertepatan dengan pembagian raport semester ganjil tahun ajaran 2016-2017', '2017-01-22 07:16:16', 'M Fikri Setiadi'),
(4, 'Pengumuman Proses Belajar Mengajar di Semester Genap Tahun Ajaran 2016-2017', 'Setelah libur semester ganjil tahun ajaran 2016-2017, proses belajar mengajar di semester genap tahun ajaran 2016-2017 mulai aktif kembali tanggal 2 Maret 2017.', '2017-01-22 07:15:28', 'M Fikri Setiadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nama` varchar(70) DEFAULT NULL,
  `siswa_jenkel` varchar(10) DEFAULT NULL,
  `siswa_tgl_lahir` varchar(50) NOT NULL,
  `siswa_nama_ibu` varchar(50) NOT NULL,
  `siswa_nik` int(16) NOT NULL,
  `siswa_nisn` int(10) NOT NULL,
  `siswa_kelas_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`siswa_id`, `siswa_nama`, `siswa_jenkel`, `siswa_tgl_lahir`, `siswa_nama_ibu`, `siswa_nik`, `siswa_nisn`, `siswa_kelas_id`) VALUES
(1, 'Alvaro Sanchez', 'Laki-laki', '', '', 2147483647, 123, NULL),
(4, 'Alfan Miftah Nasrullah ', 'Laki-laki', '2011-05-11', 'Suwarni ', 2147483647, 115976694, 51),
(5, 'Neneng Utami', 'Perempuan', '2014-12-11', 'Karti', 2147483647, 2147483647, 11),
(6, 'Citra Chalita Vityananta', 'Perempuan', '2013-02-20', 'Neviana Pangestuti', 2147483647, 138323377, 41),
(7, 'Devran Celo Natan Prayoga', 'Laki-laki', '2013-03-04', 'Suyanti', 2147483647, 139216161, 41),
(8, 'Reyvan Dwi Yulianto', 'Laki-laki', '2010-07-02', 'Miniati', 2147483647, 108265268, 61),
(9, 'Bandung Cahyo Permono', 'Laki-laki', '2012-08-09', 'Eni Widayanti', 2147483647, 115299015, 51),
(10, 'Agan Abimanyu', 'Laki-laki', '2013-04-21', 'Nartin', 2147483647, 135247460, 41),
(11, 'Anggita Widya Pratiwi ', 'Perempuan', '2011-06-09', 'Ana', 2147483647, 114846727, 51),
(12, 'Nimas Hayuning Dyah ', 'Perempuan', '2013-05-20', 'Samiyem', 2147483647, 132177329, 31),
(14, 'Arya Alfano Saputra ', 'Laki-laki', '2013-09-10', 'Eni Widiastuti', 2147483647, 135100415, 31),
(15, 'Fattin Adelia Rahmah', 'Perempuan', '2013-10-11', 'Sriyani', 2147483647, 138074360, 31),
(16, 'Alya Jazilah Adriana', 'Perempuan', '2015-09-04', 'Sri Hartini', 2147483647, 2147483647, 11),
(17, 'Muhammad Rafa Azka Putra', 'Laki-laki', '2015-08-21', 'Tutik Parwanti', 2147483647, 2147483647, 11),
(18, 'Gilang Aji Pratama ', 'Laki-laki', '2010-06-21', 'Suratmi', 2147483647, 104160074, 61),
(19, 'Kayla Putri Yuniawati', 'Perempuan', '2014-03-14', 'Sri Purwati', 2147483647, 2147483647, 31),
(20, 'Muhammad Yusuf Dwy Herlano', 'Laki-laki', '1013-03-12', 'Warni', 2147483647, 136110180, 41),
(21, 'Jalu Nugroho Aji ', 'Laki-laki', '2012-02-25', 'Sutarni', 2147483647, 125070814, 41),
(22, 'Dinda Marsha Hendrawati', 'Perempuan', '2013-07-31', 'Triwi Kusmiati', 2147483647, 2147483647, 41),
(23, 'Alya Jasila Islami', 'Perempuan', '2013-03-02', 'Tutik Parwanti', 2147483647, 131403374, 41),
(24, 'Keysa Rahmat Alfaro', 'Laki-laki', '2012-06-22', 'Sudarwati', 2147483647, 124471333, 41),
(25, 'Wahyu Bagus Nugroho', 'Laki-laki', '2012-10-10', 'Sumiyati', 2147483647, 125299212, 41),
(26, 'Giland Aryo Pratama ', 'Laki-laki', '2011-06-20', 'Karni', 2147483647, 112369551, 51),
(27, 'Febyzia Luqita Triyon', 'Perempuan', '2011-11-20', 'Wijayanti', 2147483647, 116688251, 51),
(28, 'Azella Khaira Septiani ', 'Perempuan', '2013-09-23', 'Giyarti', 2147483647, 138855596, 31),
(29, 'Aisyah Tulus Wijayanti ', 'Perempuan', '2011-07-06', 'Sukisni', 2147483647, 127674794, 51),
(30, 'Ukhti Latifah ', 'Perempuan', '2015-09-09', 'Giyati', 2147483647, 2147483647, 11),
(31, 'Ja\'far Umar Tholib', 'Laki-laki', '2015-01-24', 'Sri Mega Ningrum', 2147483647, 2147483647, 11),
(32, 'Alfero Fransiska Kurniawan', 'Laki-laki', '2015-01-24', 'Siska Wulandari', 2147483647, 2147483647, 11),
(33, 'Fadila Erlangga ', 'Laki-laki', '2011-03-20', 'Tri Murni', 2147483647, 111899258, 61),
(34, 'Daffa Nasywa Ramadhan', 'Laki-laki', '2011-08-20', 'Tri Suyanti', 2147483647, 128404500, 51),
(35, 'Naufal Misbahuddin Nashrullah', 'Laki-laki', '2012-11-08', 'Karti', 2147483647, 127208036, 41),
(36, ' Fandi Ahmad Juninho', 'Laki-laki', '2014-06-14', 'Rihani', 2147483647, 147551319, 21),
(37, 'Nadia Andini Putri', 'Perempuan', '2015-01-25', 'Katmi', 2147483647, 2147483647, 21),
(38, 'Ali Aminuddin ', 'Laki-laki', '1014-02-16', 'Marmi', 2147483647, 145357222, 21),
(39, 'Marcel Rivaldo Putra Andiar', 'Laki-laki', '2013-11-18', 'Ani Susanti ', 2147483647, 131388301, 21),
(40, 'Rizqi Agustian Saputra ', 'Laki-laki', '2013-08-19', 'Heni Purwati', 2147483647, 132131261, 31),
(41, 'Jagat Prastyo', 'Laki-laki', '2013-03-21', 'Ngatni', 2147483647, 152162373, 31),
(42, 'Refandi Yoga Pratama ', 'Laki-laki', '2011-06-11', 'Sayemi', 2147483647, 112161704, 51),
(43, 'Andrian Nugroho ', 'Laki-laki', '2010-11-04', 'Mariyem', 2147483647, 102435470, 61),
(44, 'MUHAMAD RIIFAI AZKA PUTRA', 'Laki-laki', '2016-01-03', 'WARLIYAH', 2147483647, 2147483647, 11),
(45, 'Azka Yendar Azzura', 'Laki-laki', '2011-12-18', 'Sudarsini', 2147483647, 114727523, 51),
(46, 'Gilang Dafa Pratama ', 'Laki-laki', '2011-03-20', 'Rajinem', 2147483647, 111438773, 51),
(47, 'Sera Anastasya Agustina Putri', 'Perempuan', '2012-11-16', 'Tri Mulyani', 2147483647, 126071897, 41),
(48, 'Yasmin Al Zahsy ', 'Perempuan', '2013-05-14', 'Tatik', 2147483647, 2147483647, 41),
(49, 'Viola Cindi Klaudiya ', 'Perempuan', '2012-11-02', 'Giyat Purwanti', 2147483647, 2147483647, 41),
(50, 'Arya Raff Mahardhika ', 'Laki-laki', '2013-03-24', 'Eka Rusmini', 2147483647, 137446782, 41),
(51, 'Nafsa Durratun Nashihah', 'Perempuan', '2011-06-18', 'Sukini', 2147483647, 117455775, 61),
(52, 'Khalif Fatkurrohman', 'Laki-laki', '2011-01-04', 'Rati', 2147483647, 119528870, 61),
(53, 'Arijal Alfathoni', 'Laki-laki', '2011-12-26', 'Sularni', 2147483647, 113094709, 51),
(54, 'Muhammad Faiz Abdillah', 'Laki-laki', '2012-05-25', 'Kasmiyati', 2147483647, 127609574, 51),
(55, 'Cristine Masayu', 'Perempuan', '2013-07-01', 'Susilo Rini ', 2147483647, 132956546, 41),
(56, 'Naura Ainun Najwa', 'Perempuan', '2013-02-18', 'Suparmi', 2147483647, 132075075, 41),
(57, 'Inaya Azmi Athifa', 'Perempuan', '2014-09-07', 'Wiwin Gerawati', 2147483647, 145773177, 31),
(58, 'Aditia Prastiyo Febrian Syah', 'Laki-laki', '2014-02-11', 'Darsi', 2147483647, 2147483647, 31),
(59, 'Ragil Dwi Nugroho', 'Laki-laki', '2013-10-20', 'Sukinem', 2147483647, 134192979, 31),
(60, 'Meisya Isna Rosyidah', 'Perempuan', '2014-05-01', 'Sulami', 2147483647, 143703766, 31),
(61, 'Raditya Arya Wikarna', 'Laki-laki', '2015-08-24', 'Karni', 2147483647, 2147483647, 11),
(62, 'Hamdan Khairul Ikhwan', 'Laki-laki', '2015-11-21', 'Fitri', 2147483647, 2147483647, 11),
(63, 'Jeriano Alvito Adi Saputra', 'Laki-laki', '2012-05-24', 'Ririn Triana Sari', 2147483647, 127550729, 51),
(64, 'Ibrahim Abidzar Al Ghozali', 'Laki-laki', '2015-07-25', 'Kurnia Rahmawati', 2147483647, 2147483647, 11),
(65, 'Rasyid Pandu Pratama ', 'Laki-laki', '2015-05-24', 'Yuyun Puji Hastuti', 2147483647, 2147483647, 11),
(66, ' Rezian Fikri Rizaldi ', 'Laki-laki', '2012-03-31', 'Sularti', 2147483647, 2147483647, 41),
(67, 'Farhana', 'Perempuan', '2014-09-25', 'Suwarni', 2147483647, 2147483647, 21),
(68, 'Lefn Fabrizio Triyon', 'Laki-laki', '1015-03-23', 'Wijayanti', 2147483647, 153414091, 21),
(69, 'Syahrisya Zahra Anjani', 'Perempuan', '2013-08-26', 'Sri Ismiatun', 2147483647, 138538319, 41),
(70, 'Virgina Valen Anggraini', 'Perempuan', '2011-12-20', 'Sutarni', 2147483647, 114831412, 51),
(71, 'Satryo Nur Musthofa', 'Laki-laki', '2009-09-18', 'Sarni', 2147483647, 96312722, 61),
(72, 'Davinsa Alvaro Putra Danisetya', 'Laki-laki', '2012-04-05', 'Nita Yuliani', 2147483647, 129342028, 61),
(73, 'Bagus Rakha Pramudya', 'Laki-laki', '2013-04-01', 'Eny Winarni', 2147483647, 139094908, 41),
(74, 'Rangga Saputra ', 'Laki-laki', '2012-04-12', 'Parmini', 2147483647, 121233313, 41),
(75, 'Reyen Cha Cha Axena Putri', 'Perempuan', '2012-04-20', 'Sri Handayani', 2147483647, 2147483647, 41),
(76, 'Galang Rahmat Faeyza', 'Laki-laki', '2013-01-22', 'Karti', 2147483647, 134842063, 41),
(77, 'Salsa Meylani Putri', 'Perempuan', '2012-05-29', 'Martini', 2147483647, 124448374, 41),
(78, 'Bunga Ayu Ramadani ', 'Perempuan', '2012-02-14', 'Suprapti', 2147483647, 125264499, 41),
(79, 'Naura Khalilah Ishaqi', 'Perempuan', '2012-10-21', 'Yunika Novi Arlina', 2147483647, 122057596, 41),
(80, 'Arfka Largiyan ', 'Perempuan', '2012-08-29', 'Largiyan Wijayanti', 2147483647, 2147483647, 41),
(81, 'Harjuna Dwi Putra', 'Laki-laki', '2013-06-10', 'Eni Lestari', 2147483647, 136296423, 41),
(82, 'Septian Abiyansyah', 'Laki-laki', '2010-09-08', 'Tin Khasanah', 2147483647, 107588962, 61),
(83, 'Endah Ayu Lestari', 'Perempuan', '2012-01-22', 'Ristuti', 2147483647, 2147483647, 41),
(84, 'Hafzh Ammar Tsaq', 'Laki-laki', '2011-10-27', 'Santi', 2147483647, 113876802, 51),
(85, 'Anisa Jihan Latifa', 'Perempuan', '2011-07-07', 'Kartini', 2147483647, 111444065, 61),
(86, 'FATIMAH SYAKILA KHAIRINA', 'Perempuan', '2015-05-02', 'DIYAN AYU SURTINI', 2147483647, 2147483647, 11),
(87, 'Tyas Saraswati', 'Perempuan', '2013-09-02', 'Tri Murni', 2147483647, 136067393, 41),
(88, 'Adhindha Calizta', 'Perempuan', '2013-04-10', 'Warni', 2147483647, 2147483647, 31),
(89, 'Yardha Al Khusna', 'Laki-laki', '2014-02-03', 'Risky Tri Utami', 2147483647, 142057377, 31),
(90, 'Rafanzha Dwi Pradana', 'Laki-laki', '2013-06-29', 'Yatni', 2147483647, 134187872, 31),
(91, 'Muhammad Irsyad Amrullah', 'Laki-laki', '2014-01-10', 'Riyanti', 2147483647, 149809603, 31),
(92, 'Muhammad Fitzal Asfa Muzakfar', 'Laki-laki', '2013-08-03', 'Mira Purwaningsih', 2147483647, 133835480, 31),
(93, 'Sigit Albarkah', 'Laki-laki', '2008-07-05', 'Ngatmi', 2147483647, 85558201, 31),
(94, 'Arfathan Dwie Pranata ', 'Laki-laki', '2015-12-20', 'Eka Rusmini', 2147483647, 2147483647, 11),
(95, 'Alvian Kurnia Sandi', 'Laki-laki', '2011-06-02', 'Parni', 2147483647, 127404802, 51),
(96, 'Nara Arya Wiratama', 'Laki-laki', '2016-04-15', 'Yeni Rahmawat', 2147483647, 2147483647, 11),
(97, 'Zifalea Hendrisa ', 'Perempuan', '2014-09-09', 'Tukinah', 2147483647, 2147483647, 11),
(98, 'Mochammad Alfatih Hermanto', 'Laki-laki', '2012-12-17', 'Suhartini', 2147483647, 2147483647, 41),
(99, 'Muhammad Aqila Rajwa Al Yumna', 'Laki-laki', '2011-08-05', 'Tyas Widyanti', 2147483647, 116273780, 61),
(100, 'Dita Erviana', 'Perempuan', '2011-11-17', 'Larni', 2147483647, 118399791, 51),
(101, 'Najwa Anindya Prabowo', 'Perempuan', '2011-12-18', 'Kasri', 2147483647, 116662805, 51);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indeks untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
