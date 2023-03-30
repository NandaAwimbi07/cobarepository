-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 28 Nov 2022 pada 15.10
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsips`
--

CREATE TABLE `arsips` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_upload` date NOT NULL,
  `desc_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `arsips`
--

INSERT INTO `arsips` (`id`, `nama_file`, `kode_file`, `jenis_file`, `tanggal_upload`, `desc_file`) VALUES
(1, 'Akreditasi Prodi TI 2019-2024 B', 'doc_400118152545_100430354354.pdf', 'Akreditasi Prodi TRPL', '2019-01-01', 'Dokumen Akreditasi Prodi TI Tahun 2019 sampai 2024'),
(2, 'Kalender-Akademik-Jurusan-TA-2021-2022', 'doc_433194850294_796781642522.pdf', 'Kalender Akademik', '2021-01-01', 'Jadual Kalender Akademik Jurusan, Tahun Ajaran 2021 - 2022'),
(3, 'SK MAHASISWA AKTIF GENAP 2021-2022', 'doc_409019420292_699024475633.pdf', 'SK Mahasiswa Aktif', '2022-08-28', 'Dokumen SK Mahasiswa Aktif Tahun ajaran 2021 - 2022'),
(4, 'Akreditasi Prodi TRK', 'doc_322705779292_258752422109.pdf', 'Akreditasi Prodi TRK', '2022-08-28', 'Dokumen Akreditasi Prodi TRK Tahun 2022'),
(5, 'Akreditasi Prodi BD', 'doc_663796447085_536379798706.pdf', 'Akreditasi Prodi BD', '2022-08-28', 'Dokumen Akreditasi Prodi BD Tahun 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_berita` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_berita` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara_berita` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berita` date NOT NULL,
  `status_berita` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `kategori_berita`, `judul_berita`, `foto_berita`, `penyelenggara_berita`, `desc_berita`, `tanggal_berita`, `status_berita`) VALUES
(1, 1, 'P2MD Robotika dengan kampung Batara 2022', 'image_469495232337_963297378961.png', 'Robotika Poliwangi', 'Menghibahkan teknologi mesin CNC sebagai sarana lebelisasi produk kerajinan bambu di desa Papring', '2022-11-28', 'Aktif'),
(2, 2, 'Magang Kerja Industri Mahasiswa TRPL Semester 6', 'image_454517120626_646118315002.png', 'D4 Teknologi Rekayasa Perangkat Lunak', 'Kegiatan magang kerja industri mahasiswa Trpl', '2022-11-28', 'Aktif'),
(4, 3, 'Selamat Menyambut Bulan Suci Ramadhan 1443H', 'image_684727658247_4430836372.jpg', 'Teknik Informatika', 'Kami Keluarga Besar Himpunan Mahasiswa Teknik Informatika Politeknik Negeri Banyuwangi mengucapkan Selamat menyambut Bulan Suci Ramadhan 1443H bagi seluruh umat muslim yang melaksanakan.\r\n\r\nSemoga di bulan yang suci dan berkah ini, kita semua dapat mendek', '2022-04-03', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_dosen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_dosen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_dosen` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_nik_dosen` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidn_dosen` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_dosen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_dosen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp_dosen` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_dosen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosens`
--

INSERT INTO `dosens` (`id`, `nama_dosen`, `foto_dosen`, `gender_dosen`, `nip_nik_dosen`, `nidn_dosen`, `jabatan_dosen`, `email_dosen`, `notelp_dosen`, `alamat_dosen`) VALUES
(1, 'Mohamad Dimyati Ayatullah, S.T., M.Kom.', 'image_122930827959_689931059391.jpg', 'Laki-laki', '197601222021211001', '0722017601', 'Ketua Jurusan', 'dimyati@poliwangi.ac.id', '08123399184', 'Dusun Kraja 001/001 Sumbersari - Srono \r\nBanyuwangi 68471'),
(2, 'Dianni Yusuf, S.Kom., M.Kom.', 'image_729918659139_589991786144.jpg', 'Perempuan', '198403052021212004', '0705038402', 'Kaprodi TRPL', 'dianniyusuf@poliwangi.ac.id', '082328333399', 'Dsn. Gembolo Rt/Rw 01/01 Purwodadi - \r\nGambiran Banyuwangi 68486\"\"'),
(4, 'I Wayan Suardinata, S.Kom., M.T.', 'image_383386070293_74007074407.jpg', 'Laki-laki', '198010222015041001', '0022108005', 'Kaprodi Bisnis Digital', 'wayan.suardinata@poliwangi.ac.id', '085736577864', 'Jalan Prabu loro 525A Kelurahan Bakungan \r\nkecamtan Glagah\"'),
(5, 'Eka Mistiko Rini, S.Kom, M.Kom.', 'image_340247629710_190106187381.jpg', 'Perempuan', '198310202014042001', '0720108301', 'Ka. UKK', 'ekamrini@poliwangi.ac.id', '081913922224', 'Dusun WatuUlo Rt/Rw 004/002 Rejosari - \r\nGlagah Banyuwangi 68432\r\n\"'),
(6, 'Moh. Nur Shodiq, S.T., M.T.', 'image_73864307084_835821060064.jpg', 'Laki-laki', '198301192021211006', '0019018307', 'Dosen', 'noer.shodiq@poliwangi.ac.id', '085236675444', 'Kampungtimur 001/004 Trigonco - \r\nAsembagus Situbondo 68373\"'),
(7, 'Dedy Hidayat Kusuma, S.T., M.Cs.', 'image_13110791905_964217601275.jpg', 'Laki-laki', '197704042021211004', '0004047712', 'Dosen', 'dedy@poliwangi.ac.id', '087755527517', 'Sumber Kepuh Rt/Rw 003/001 \r\nKedungwungu - Tegaldlimo Banyuwangi \r\n68484\"'),
(8, 'Farizqi Panduardi, S.ST., M.T.', 'image_896371644676_305166409030.jpg', 'Laki-laki', '2013.36.106', '0005038604', 'Dosen', 'akufarisqi@poliwangi.ac.id', '082244680800', 'Jl.S.Parman 33 Gardenia Estate G97\"'),
(9, 'Herman Yuliandoko, S.T., M.T.', 'image_149001380569_664981052124.jpg', 'Laki-laki', '199209052022031004', '0027097504', 'Dosen', 'herman.yuliandoko@poliwangi.ac.id', '081334436478', 'Perum Citra Garden Blok F1, Lemahbang \r\nDewo, Rogojampi\"'),
(10, 'Vivien Arief Wardhany, S.T., M.T.', 'image_525116225286_811406744008.jpg', 'Perempuan', '198404032019032012', '0003048406', 'Dosen', 'vivien.wardhany@poliwangi.ac.id', '081331068658', 'Perum Citra Garden Blok C-20, Dusun \r\nSatriyan 002/004 Lemahbangdewo \r\nRogojampi - Banyuwangi 68462\"'),
(11, 'Devit Suwardiyanto,S.Si., M.T.', 'image_331682362072_749460458228.jpg', 'Laki-laki', '198311052015041001', '0705118304', 'Wadir 2', 'ds@poliwangi.ac.id', '08113570683', 'Perum Mendut Hijau Blok F No 3, \r\nTamanbaru, Banyuwangi\"'),
(12, 'Endi Sailul Haq, S.T., M.Kom.', 'image_971672802080_850529176510.jpg', 'Laki-laki', '198403112019031005', '0015038402', 'Ka. PPPM', 'esailulhaq@gmail.com', '081336851513', 'Dusun Kebonrejo Rt/Rw 003/001 Alasrejo \r\nWongsorejo - Banyuwangi 68453\"'),
(13, 'Subono, S.T., M.T.', 'image_501949900796_811592917166.JPG', 'Laki-laki', '197506252021211003', '0025067508', 'Dosen', 'subono@poliwangi.ac.id', '087859576210', 'Jl. Bunga Kumis Kucing no. 20 Rt/Rw \r\n004/002 Jatimulyo - Lowokwaru Malang \r\n65141\"'),
(14, 'Alfin Hidayat, S.T., M.T.', 'image_546751143286_362757737644.jpg', 'Laki-laki', '199010052014041002', '0005109001', 'Ka. PPM', 'alfin.hidayat@poliwangi.ac.id', '085731147608', 'Banyuwangi\"'),
(15, 'Muh. Fuad Al Haris, S.T., M.T.', 'image_917830165172_685289978427.jpg', 'Laki-laki', '197806132014041001', '0713067802', 'Dosen', 'f_haris@poliwangi.ac.id', '081234619898', 'Perum Brawijaya Regency Jl. Basuki \r\nRahmat Gg.Mangga No.12 Rt/Rw 002/004 \r\nLateng - Banyuwangi 6841'),
(16, 'Alif Akbar Fitrawan, S.Pd., M.Kom.', 'image_158347327469_451263759214.jpg', 'Laki-laki', '199104202018031002', '0020049102', 'Dosen', 'alifakbarfitrawan@gmail.com', '085646421106', 'Perumahan Pengantigan Indah Blok BC-02 \r\nRogojampi\"'),
(17, 'Junaedi Adi Prasetyo, S.ST., M.Sc.', 'image_745594530839_237271731901.jpg', 'Laki-laki', '199004192018031001', '0019049005', 'Dosen', 'junaedi.prasetyo@poliwangi.ac.id', '082333312244', 'Jl. Tirtosari Blok D No 12 Landungsari \r\nMalang 65151\"'),
(18, 'Galih Hendra Wibowo, S.Tr.Kom., M.T.', 'image_320546028440_931756038780.jpg', 'Laki-laki', '199209052022031004', '0005099204', 'Kaprodi TRK', 'galih@poliwangi.ac.id', '083831120642', 'Surabaya, Jl Ahmad 3 No.15 Rt.01 RW.10 \r\nPepe Legi Waru Sidoarjo\"'),
(26, 'Lutfi Hakim, S.Pd., M.T.', 'image_228482601841_755825871912.jpeg', 'Laki-laki', '199203302019031012', '0030039202', 'Ka. Perpus', 'Lutfi@poliwangi.ac.id', '085330161514', 'Jln, kepodang no 11 Rw 1rw 2kalirejo kabat \r\nbanyuwangi\"'),
(27, 'Sepyan Purnama Kristanto, S.Kom., M.Kom.', 'image_85965923502_851522988087.jpeg', 'Laki-laki', '199009052019031024', '0005099006', 'Ka. UPT Jaringan', 'Sepyan@poliwangi.ac.id', '085237516017', 'Jl. Temuguruh Rt.03 Rw.01 Resomulyo \r\nBanyuwangi\"'),
(28, 'Ruth Ema Febrita, S.Pd., M.Kom.', 'image_667490203946_788565772468.jpeg', 'Perempuan', '199202272020122019', '0027029204', 'Ka. JPC', 'RuthEmaFebrita@poliwangi.ac.id', '085259082627', 'Jl. Jaksa Agusng Suprapto, gg Annur 1 no \r\n25 B pengajuran Banywuangi\"'),
(29, 'Agus Priyo Utomo, S.ST., M.Tr.Kom.', 'image_243024935002_864995155991.jpeg', 'Laki-laki', '2010.36.048', '0027088704', 'Dosen', 'agusp@poliwangi.ac.id', '085731311399', 'Jl. RW Monginsidi 14 - Banyuwangi 68416\"'),
(30, 'Arum Andary Ratri, S.Si., M.Si.', 'image_448634816593_547242094481.jpeg', 'Perempuan', '199209212020122021', '0021099202', 'Ka. Lab TI', 'Arumandaryratri@poliwangi.ac.id', '083117703473', 'Dusun Krajan Barat Rt 1 Rw 1, Desa \r\nSingonjuruh Kecamatan Singonjuruh\"'),
(31, 'Indira Nuansa Ratri, S.M., M.SM.', 'image_137285076371_904786232899.jpeg', 'Perempuan', '2021.36.248', NULL, 'Dosen', 'indira.nuansaratri@poliwangi.ac.id', '083831244299', 'Kedungringin, RT.001/RW.011, Muncar, \r\nBanyuwangi\"'),
(32, 'Lukman Hakim S.Kom., M.T.', 'image_583251112654_369461283188.jpeg', 'Laki-laki', '198903232022031007', '0523038903', 'Dosen', 'lukmanhakim@poliwangi.ac.id', '081232947805', 'LINGK.KRAMAT RT/RW 01/03 KEL.\r\nKERTOSARI KEC.BANYUWANGI KAB.\r\nBANYUWANGI\"'),
(33, 'Khoirul Umam, S.Pd, M.Kom.', 'image_636562743489_20517799000.jpeg', 'Laki-laki', '199103112022031006', '0711039101', 'Dosen', 'khoirulumam@poliwangi.ac.id', '087755580796', 'Dusun Aseman RT 3/RW 2, Desa Bimorejo, \r\nWongsorejo, Banyuwangi\"'),
(34, 'Qurrota A\'yun, S.Ak.', 'image_494585382892_172634432024.jpeg', 'Perempuan', '197905302021212005', NULL, 'Admin', 'qurrota@poliwangi.ac.id', '081333563100', 'Perum Brawijaya Cefila Indah Blok L9 \r\nKelurahan Kebalenan Kecamatan \r\nBanyuwangi\"'),
(35, 'Dian Mujiani, SE.', 'image_273126253079_41541348295.jpeg', 'Perempuan', '198711032021212001', NULL, 'Admin', 'dianmjn@poliwangi.ac.id', '085 333859623', 'Jl. Ikan Cakalang 31 Banyuwangi\"'),
(36, 'Muhammad Nur Hariri, A.Md.', 'image_338132369554_42066366703.jpg', 'Laki-laki', '2013.36.105', NULL, 'Teknisi', 'muhnurhariri@poliwangi.co.id', '085204696155', 'Dsn krajan 03/01 Ds. Rejosari Kec.Glagah \r\n- Banyuwangi 68432\"'),
(37, 'Hida Jaya Habibi, A.Md.', 'image_253415144127_143105679862.jpg', 'Laki-laki', '198705032014041001', NULL, 'PLP', 'hidajay@poliwangi.ac.id', '081230557807', 'Dsn. Krajan Rt 02/Rw 05 Desa Kabat \r\nKecamatan Kabat - Banyuwangi 68461\"'),
(38, 'Nur Cholik Hasyim, A.Md.', 'image_932704032855_341040143842.JPG', 'Laki-laki', '2013.36.108', NULL, 'Admin Jaringan', 'ncadvertise@gmail.com', '085330198831', 'Banyuwangi\"'),
(39, 'Fendi Hermawanto,A.Md.', 'image_790972137202_423145833665.jpg', 'Laki-laki', '198810152014041001', NULL, 'PLP', 'fendihermawanto@poliwangi.ac.id', '087857297775', 'Dusun Srono RT02/03 Kebaman Srono - \r\nBanyuwnagi 68471\"'),
(41, 'Ahmad Rifai', 'image_732976349459_967884550413.jpeg', 'Laki-laki', NULL, NULL, 'Teknisi Kebersihan', NULL, '081358380858', 'Banyuwangi\"');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_event` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_event` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara_event` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_event` date NOT NULL,
  `status_event` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `nama_event`, `foto_event`, `penyelenggara_event`, `desc_event`, `tanggal_event`, `status_event`) VALUES
(1, 'Selamat Memperingati Hari Kartini', 'image_188679450133_139978020196.jpg', 'TI Poliwangi', 'Kartini merupakan sosok yang menyuarakan semangat emansipasi kepada perempuan. Karena perempuan adalah pembawa peradaban. Apabila tidak ada perempuan maka tidak akan ada putra-putri terbaik di Indonesia.\r\n\r\nTahukah engkau semboyanku ? \"Habis Gelap, Terbit', '2022-04-21', 'Selesai'),
(2, 'Selamat Menyambut Bulan Suci Ramadhan 1443H', 'image_226071660654_22048912797.jpg', 'TI Poliwangi', 'Kami Keluarga Besar Himpunan Mahasiswa Teknik Informatika Politeknik Negeri Banyuwangi mengucapkan Selamat menyambut Bulan Suci Ramadhan 1443H bagi seluruh umat muslim yang melaksanakan.\r\n\r\nSemoga di bulan yang suci dan berkah ini, kita semua dapat mendek', '2022-04-03', 'Selesai'),
(3, 'Selamat Hari Raya Idul Adha 1443 H', 'image_544849332413_568951147609.jpg', 'TI Poliwangi', 'Memperingati hari raya idul adha 1443 H dengan mengadakan kegiatan dakwah dimushola poliwangi', '2022-07-10', 'Selesai'),
(4, 'HUT Republik Indonesia ke-77', 'image_401411042838_263418994929.jpg', 'TI Poliwangi', 'Sudah 77 tahun Bangsa Indonesia merdeka. Selama 77 tahun kita telah bertumbuh semakin kuat, semakin tangguh, dan semakin berani. Hidup di tanah surga yang di penuhi manusia baik hati. Anak-anak yang bebas bermain dan tertawa. Perempuan yang mendapatkan ha', '2022-08-17', 'Selesai'),
(5, 'Wisuda ke-15 Politeknik Negeri Banyuwangi', 'image_580138834216_991751115802.jpg', 'Poliwangi', 'Selamat dan Sukses kepada wisudawan dan wisudawati ke-15 Ahli Madya Teknik Informatika Politeknik Negeri Banyuwangi tahun akademik 2021/2022.\r\n\r\nAcara wisuda dengan tema \"Lulusan Poliwangi yang Berkarakter, Cerdas, dan Terampil yang Siap Pulihkan Ekonomi', '2022-06-21', 'Selesai'),
(6, 'Selamat Hari Raya Waisak 2566 BE', 'image_610224441191_929683090151.jpg', 'TI Poliwangi', 'Kami Keluarga Besar Teknik Informatika Politeknik Negeri Banyuwangi dengan segenap hati mengucapkan, Selamat memperingati Hari Raya Waisak 2566 BE bagi seluruh umat Buddha yang memperingati.\r\n\r\nSesuatu yang berawal dengan kebaikan maka akan berakhir denga', '2022-05-16', 'Selesai'),
(7, 'Selamat Hari Raya Idul Fitri 1443 H', 'image_31008170979_907244322710.jpg', 'TI Poliwangi', 'Kami Keluarga Besar Teknik Informatika Politeknik Negeri Banyuwangi dengan segenap hati mengucapkan, Selamat merayakan Hari Raya Idul Fitri 1443 Hijriah bagi seluruh umat muslim yang merayakan.\r\n\r\nJa’alanallahu minal aidzin wal faizin. Semoga Allah menjad', '2022-05-02', 'Selesai'),
(8, 'Selamat Hari Pendidikan Nasional', 'image_503301040034_733227894442.jpg', 'TI Poliwangi', 'Pendidikan adalah jalan panjang yang ditempuh oleh seseorang untuk membentuk karakter. Dengan pendidikan yang baik akan membuka pikiran bukan menutup pikiran. Maka belajarlah dari masa lalu jika ingin mendefinisikan masa depan.\r\n\r\n\"Pendidikan adalah senja', '2022-05-02', 'Selesai'),
(14, 'UPGRADING UPDATE', 'image_335726030491_876085746137.jpg', 'TI Poliwangi', 'Politeknik Negeri Banyuwangi telah meresmikan upgrading Program Studi D-III (Diploma) Teknik Informatika menjadi Program Studi Teknologi Rekayasa Perangkat Lunak Program Sarjana Terapan (D-4).\r\n\r\nUpgrading program studi tersebut berdasarkan keputusan Ment', '2022-04-19', 'Selesai'),
(15, 'DIES NATALIS POLITEKNIK NEGERI BANYUWANGI KE-14`', 'image_818223699700_256536967718.jpg', 'TI Poliwangi', 'Kami keluarga besar Teknik Informatika Politeknik Negeri Banyuwangi mengucapkan Selamat hari jadi Pokiteknik Negeri Banyuwangi yang ke-14. Semoga poliwangi semakin berjaya. Menjadi Lembaga Perguruan Tinggi Vokasi yang bermutu, berdaya saing tinggi, inovat', '2022-02-22', 'Selesai');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kategori` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `status_kategori`, `author_kategori`, `desc_kategori`) VALUES
(1, 'Pengabdian', 'Aktif', 'Admin Jurusan', 'Program Pengabdian atau pemberdayaan masyarakat yang dilakukan mahasiswa seperti P2MD, PKM dan lain-lain'),
(2, 'Magang Kerja', 'Aktif', 'Admin Jurusan', 'Kegiatan magang kerja industri bagi mahasiswa semester 7 program studi Teknik Informatika'),
(3, 'Event Jurusan', 'Aktif', 'Admin Jurusan', 'Seluruh kegiatan atau event jurusan yang dilaksanakan oleh Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjasamas`
--

CREATE TABLE `kerjasamas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mitra` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kerjasama` date NOT NULL,
  `desc_kerjasama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kerjasamas`
--

INSERT INTO `kerjasamas` (`id`, `nama_program`, `nama_mitra`, `tahun_kerjasama`, `desc_kerjasama`) VALUES
(1, 'Pengembangan Sumberdaya Manusia melalui penyelenggaraan pendidikan dan pengajaran, penelitian, pengabdian kepada masyarakat, praktikum dan magang', 'Fakultas Peternakan Universitas Brawijaya', '2016-12-16', 'Manfaat : Penelitian dan praktikum mahasiswa.\r\nImplementasi : Praktikum Lapang.\r\nJenis Kerjasama : Perguruan Tinggi Dalam Negeri.'),
(2, 'Kerjasama bidang penelitian dan pengabdian kepada masysrakat, peningkatan kualitas sumber daya manusia, dan kerjanpraktek/magang kerja industri mahasiswa', 'PT. Bumi Suksesindo (BSI)', '2018-05-03', 'Manfaat : Penelitian, Beasiswa Pendidikan Mahasiswa, Terselenggaranya kuliah tamu di Program Studi Teknik Mesin terkait teknologi mobil listrik.\r\nImplementasi : Beasiswa Industri, Pembuatan Mobil Listrik, Stadium General, Penelitian, Pengawasan Proyek.\r\nJ'),
(3, 'MoU Peningkatan mutu bidang pendidikan, penelitian, pengabdian kepada masyarakat dan Penyelenggaraan program beasiswa', 'Pemerintah Kabupaten Banyuwangi', '2018-01-23', 'Manfaat : Bantuan operasional lembaga dan bantuan beasiswa kepada mahasiswa.\r\nImplementasi : Beasiswa Industri, Pembuatan Mobil Listrik, Stadium General, Penelitian, Pengawasan Proyek.\r\nJenis Kerjasama : Industri Dalam Negeri.'),
(4, 'MoU Peningkatan mutu bidang pendidikan, penelitian, pengabdian kepada masyarakat serta sertifikasi mahasiswa', 'Direktorat Pengembangan Bina Marga Kementerian', '2017-03-07', 'Manfaat : Pelatihan dosen dan mahasiswa dibidang jalan dan jembatan (jurusan teknik sipil).\r\nImplementasi : Praktikum Lapang, Kerja Praktik, Pengawasan Proyek. \r\nJenis Kerjasama : Non-Industri Dalam Negeri.'),
(5, 'MoU Pembinaan, kuliah tamu, seminar, penelitian, pengabdian kepada masysrakat, laboratorium bersama dan kerja praktek/magang kerja', 'PT. Industri Gula Glenmore', '2017-05-17', 'Manfaat : Pengujian laboratorium dan Lokasi Kerja Praktek mahasiswa. \r\nImplementaso : Praktikum Lapang, Kerja Praktik dan Magang Kerja Industri. \r\nJenis Kerjasama : Industri Dalam Negeri.'),
(6, 'Kerjasama Industri PT. Inka x TRPL', 'PT. Inka Banyuwangi', '2023-01-01', 'Kerjasama antara mahasiswa trpl dan juga PT Inka');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_05_13_160013_create_banner_table', 1),
(4, '2021_05_26_161004_create_alumni_table', 1),
(5, '2021_06_01_041844_create_staff_table', 1),
(6, '2021_06_03_161338_create_berita_table', 1),
(7, '2021_06_18_144612_create_motivasi_table', 1),
(8, '2021_06_21_172349_create_users_table', 1),
(9, '2021_06_21_173616_create_roles_table', 1),
(10, '2021_06_21_174206_create_permissions_table', 1),
(11, '2021_06_21_174341_create_permission_role_table', 1),
(12, '2021_06_21_174530_create_role_user_table', 1),
(13, '2021_06_21_175116_create_pengumuman_table', 1),
(14, '2021_10_20_084926_create_blog_table', 1),
(15, '2021_10_20_102137_create_categori_table', 1),
(16, '2021_12_05_100717_create_pendaftaran_table', 1),
(17, '2022_08_09_073943_create_dosens_table', 1),
(18, '2022_08_09_074005_create_events_table', 1),
(19, '2022_08_09_074302_create_kerjasamas_table', 1),
(20, '2022_08_09_074531_create_prestasi_mhs_table', 1),
(21, '2022_08_27_004147_create_arsips_table', 2),
(22, '2022_11_18_031121_create_kategoris_table', 3),
(23, '2022_11_18_031136_create_beritas_table', 3),
(24, '2022_11_28_030844_create_kategoris_table', 4),
(25, '2022_11_28_030858_create_beritas_table', 4);

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
-- Struktur dari tabel `prestasi_mhs`
--

CREATE TABLE `prestasi_mhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_prestasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_prestasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peraih_prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_prestasi` date NOT NULL,
  `desc_prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasi_mhs`
--

INSERT INTO `prestasi_mhs` (`id`, `nama_prestasi`, `foto_prestasi`, `peraih_prestasi`, `tahun_prestasi`, `desc_prestasi`) VALUES
(2, '3 Tim Poliwangi Raih Juara 3 pada Ajang KMIPN IV', 'image_379917815981_813618148930.jpg', 'Tim Perancangan Bisnis TIK Box to Box, Tim E-Goverment, dan Tim IoT ALTONIK', '2022-08-12', '3 Medali tingkat Nasional berhasil diraih oleh mahasiswa Politeknik Negeri Banyuwangi dalam event KMIPN ke-IV di Politeknik Negeri Batam.\r\nKompetisi Mahasiswa Bidang Informatika Politeknik Nasional (KMIPN), Merupakan lomba bergengsi Politeknik Indonesia.'),
(3, 'Lomba Porseni Politeknik ke XIII di Politeknik Banjarmasin.', 'image_902502177043_291266782271.jpg', 'Redi Mahendra, dan Dika Lutfiana Safira', '2022-07-20', 'Selamat dan Sukses Mahasiswa Politeknik Negeri Banyuwangi, Redi Mahendra NIM 362193301150 Mahasiswa Manajemen Bisnis Pariwisata peraih Medali Perunggu Cabang Lomba kelas F. Dan Dika Lutfiana Safira NIM 362041333086 Mahasiswa TPHT.'),
(4, 'Ajang Perlombaan AITec 2022', 'image_429743107278_155452878885.jpg', 'Puput Melati, Thoriq Sultoni dan Muhammad Rifky Usamah Albaihaqi', '2022-07-08', 'Mahasiswa Politeknik Negeri Banyuwangi dari Program Studi TPHT berhasil meraih dua penghargaan. Puput Melati meraih penghargaan Juara III Terampil pada kategori teknik pengambilan sampel darah unggas serta Thoriq Sultoni dan Muhammad Rifky Usamah Albaihaq'),
(5, 'Peraih Penghargaan Juara 1 Jagoan Tani 2022', 'image_453446708342_125991089960.jpg', 'Syfa Dila Kharisma prodi Teknik Informatika, Dhena Gisca Salsadanti prodi Manajemen Bisnis Pariwisata, dan Indah Juniarta prodi Agribisnis.', '2022-06-20', 'Selamat dan Sukses kepada mahasiswa Politeknik Negeri Banyuwangi telah meraih penghargaan sebagai \"Juara 1 Jagoan Tani 2022\" dalam kategori rintisan usaha dengan tema \"New Banyuwangi Agribusiness StartUp Competition\".'),
(6, 'Best Speaker 1 of Debate Category Novice National (National Polytechnic English Olympics) Competitio', 'image_803652037390_924218697720.jpg', 'Nanda Dwi Saputra, dan Yuniar Friska Aprillia', '2022-05-27', 'Selamat dan sukses atas prestasi Mahasiswa Politeknik Negeri Banyuwangi Mendapatkan Best Speaker 1 of Debate & Yuniar Friska Aprillia Top 9 Speaker Debate NPEO Novice Category (National Polytechnic English Olympics) Competition IX di Padang 2022.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `picture`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Taufik Hidayat', 'taufikhidayat09121@gmail.com', NULL, '$2y$10$FU8ZZk4E8M21p4eSMyuWJ.UlpsUCPi61AdIdRbnS4tzK3AURlOC32', NULL, 'images/users/UIMG2022082363047483af9c7.jpg', NULL, '2022-08-18 01:54:03', '2022-08-22 23:32:35', NULL),
(3, 'Admin Jurusan', 'adminjurusan@gmail.com', NULL, '$2y$10$dcPbVwxP8NCigfkiu37sOeQDCwsCjgBfY21YHhLxZlTKYzOTtKbVC', NULL, '', NULL, '2022-08-20 23:56:52', '2022-08-20 23:57:44', NULL),
(4, 'Teknisi Website Jurusan', 'teknisi@gmail.com', NULL, '$2y$10$EvPMqTYTviNeOzCJyXDz0uhzTD6K18MOjYcWNEBaqPZFCeO7KeHda', NULL, NULL, NULL, '2022-08-26 18:41:59', '2022-08-26 18:41:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsips`
--
ALTER TABLE `arsips`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_kategori_berita_foreign` (`kategori_berita`);

--
-- Indeks untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerjasamas`
--
ALTER TABLE `kerjasamas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `prestasi_mhs`
--
ALTER TABLE `prestasi_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_538796` (`user_id`),
  ADD KEY `role_id_fk_538796` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsips`
--
ALTER TABLE `arsips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kerjasamas`
--
ALTER TABLE `kerjasamas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `prestasi_mhs`
--
ALTER TABLE `prestasi_mhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_kategori_berita_foreign` FOREIGN KEY (`kategori_berita`) REFERENCES `kategoris` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_538796` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_538796` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
