-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2020 pada 04.14
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekopz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktiva_tetap`
--

CREATE TABLE `aktiva_tetap` (
  `id_aktTetap` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `usiaEkonomis` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `nilai_perolehan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `ttl` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_koperasi`, `nama`, `jk`, `ttl`, `pekerjaan`, `alamat`, `foto`, `email`, `password`, `status`) VALUES
(4, 0, 'alal', '', '0000-00-00', '', '', '', 'eprpep@mgial.com', '123', 'belum_anggota'),
(5, 0, 'alal', '', '0000-00-00', '', '', '', 'eprpep@mgial.com', '123', 'belum_anggota'),
(6, 0, 'alal', '', '0000-00-00', '', '', '', 'eprpep@mgial.com', '123', 'belum_anggota'),
(7, 0, 'aldi naufal', '', '0000-00-00', '', '', 'user_first.png', 'ekopz@gmail.com', '74fe4db4acfc5b4628593689dc2f65aa', 'belum_anggota'),
(8, 0, 'lifi alifia', '', '0000-00-00', '', '', 'user_first.png', 'lifi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'belum_anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_koperasi` int(11) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `satuan` varchar(70) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `harga_beli` int(20) DEFAULT NULL,
  `harga_jual` int(20) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_koperasi`, `nama_barang`, `deskripsi`, `kategori`, `satuan`, `stok`, `harga_beli`, `harga_jual`, `foto`) VALUES
(3, 2, 'chitatos ', 'dapatkan chitataos', 'pakaian', 'unit', 10, 1000, 1500, 'fea774ff7b588e2394c9014213dd5de8.jpg'),
(4, 2, 'Beras', 'Beras Pulen 5Kg, Dapatkan Harga termurah', 'sembako', 'kilogram', 12, 100000, 120000, '01e913376eeebb3fcfd7e686b3cb8592.png'),
(5, 2, 'Gula', 'Dijual Gula Murah.', 'sembako', 'kilogram', 10, 12000, 15000, '67bf852b7c6b4727522b1921a782dbc5.jpg'),
(6, 4, 'Baju Gamis', 'Gamis Islami Dapat Anda Beli dengan Murah', 'pakaian', 'unit', 2, 400000, 500000, 'ef35cfc93097005bd0f1aaa60bdb53fe.jpg'),
(7, 4, 'Baju Muslimah', 'Baju Muslimah ORI merk GUCCI', 'pakaian', 'unit', 1, 1200000, 1400000, 'ba290494c88c392190d689f624bff5e2.jpg'),
(8, 2, 'telur', 'Telur ayam negeri kualitas terbaik\r\n', 'sembako', 'unit', 25, 20000, 22000, '8e49310580a08cc3e7e3cfeb0572f310.jpg'),
(9, 2, 'Spidol warna', 'Snow man 12 warna ', 'alat tulis kerja', 'unit', 12, 9000, 10500, '93c097c572fd0afd47c753644b458569.jpg'),
(11, 2, 'Kaos Kasi', 'Kaos kaki Diatas Mata Kaki', 'pakaian', 'unit', 15, 8000, 10000, 'f0a2997034a9c4ab0f2f22f00ac69011.jpg'),
(12, 2, 'Kaos Polos', 'Kaos Polos Kualitas Terbaik', 'pakaian', 'unit', 12, 25000, 30000, 'b455e2d0e3ade6263d9bec4dcc6797b1.jpg'),
(15, 2, 'Sepatu Sekolah', 'Sepatu tali diatas mata kaki', 'pakaian', 'unit', 5, 75000, 80000, '5721af5492b1997e945d2abbab123a80.jpg'),
(16, 2, 'Tali Sepatu', 'Tali sepatu Panjang', 'pakaian', 'unit', 20, 5000, 6000, '75be376f2b7074ba197a80558f21002b.jpg'),
(18, 2, 'Air mineral Botol', 'Aqua 600 ml', 'sembako', 'unit', 48, 2200, 3000, 'a78c400a68d2264e20ed8efd2e33195a.jpg'),
(19, 2, 'Racik Nasi Goreng', 'Bubu Nasi Goreng', 'sembako', 'unit', 20, 2000, 2500, '3b9cd03828672b548cf93e2f31d14d70.jpg'),
(20, 2, 'Garam', 'Garam Halus 500 Gr', 'sembako', 'unit', 20, 7000, 8000, '08384839c21eafcc2374556329a10f64.jpg'),
(21, 2, 'Gula merah', 'Gula Merah Kiloan', 'sembako', 'kilogram', 5, 8500, 9000, 'b9537ea12938c9dd0c3451ea7e488dcc.jpg'),
(22, 2, 'Inodmie Rebus', 'Indomie Kari ayam', 'sembako', 'unit', 20, 2300, 2500, '2c72d8e25c7e219b113c71dfa48d22c7.png'),
(23, 2, 'Indomie Goreng', 'Indomie Ayam Bawang', 'sembako', 'unit', 20, 2300, 2500, NULL),
(24, 2, 'Merica', 'Ladaku 3 gr', 'sembako', 'unit', 20, 800, 1000, NULL),
(25, 2, 'Minyak Goreng', 'Bimoli 1 lt', 'sembako', 'unit', 10, 10000, 11000, '36038e41dcec740474df82cfce0a12ee.jpg'),
(26, 2, 'Margarin', 'Simas Palmia 200 gr', 'sembako', 'unit', 10, 4500, 5500, 'd113cd68a362f6e132e1c680da0c5f86.jpg'),
(27, 2, 'Teh kotak', 'Teh Kotak 300 ml', 'kosmetik', 'unit', 20, 3200, 4000, '514c21a14494313c1d659b248cb6a491.jpg'),
(28, 2, 'Tepung Beras', 'Rose Brand 500 gr', 'tiket', 'unit', 10, 8500, 9000, '976690b25a8d8316c40e0c3d95e357ed.jpg'),
(29, 2, 'Tepung Terigu', 'Segitiga Biru Kiloan', 'sembako', 'kilogram', 20, 7000, 8500, 'dccf96ebda79ce28b75ff6cf3a9b368a.jpg'),
(30, 2, 'Token Listrik', 'Token 20.000', 'listrik/pulsa', 'unit', 10, 20000, 22000, 'fe56646967c2e5244bcc529169959728.jpg'),
(31, 2, 'Token Listrik', 'Token 50.000', 'listrik/pulsa', 'unit', 10, 50000, 52000, '88e7f144b8180382a13c3d2be3f7fff8.jpg'),
(32, 2, 'Token Listrik', 'Token Listrik', 'listrik/pulsa', 'unit', 10, 100000, 102000, '38000a8f2279537776ded2352e51dd97.jpg'),
(33, 2, 'Pulsa Kartu Seluler', 'Pulsa 15.000', 'listrik/pulsa', 'unit', 10, 15000, 17000, 'ae3189b2ce6a55efa4483308ce8711f0.jpeg'),
(34, 2, 'Pulsa Kartu Seluler', 'Pulsa 20.000', 'listrik/pulsa', 'unit', 10, 20000, 22000, '910731ca91c104e36f9c7721d23fc989.jpeg'),
(35, 2, 'Pulsa Kartu Seluler', 'Pulsa 25000', 'listrik/pulsa', 'unit', 10, 25000, 27000, '6cdce88155ee835f655d0e83fac7c77e.jpeg'),
(36, 2, 'Pulsa Kartu Seluler', 'Pulsa 50.000', 'listrik/pulsa', 'unit', 10, 50000, 52000, 'b0eb1c12c198d791b39e58f1d705ea5f.jpeg'),
(37, 2, 'Kambing', 'Kambing sehat', 'hewan ternak', 'unit', 10, 8500000, 9000000, NULL),
(38, 2, 'Sapi', 'Sapi Sehat', 'hewan ternak', 'unit', 5, 90000000, 92000000, NULL),
(39, 2, 'Ayam Broiler', 'Ayam sehat ', 'hewan ternak', 'kilogram', 20, 18000, 21000, NULL),
(40, 2, 'Kelinci', 'Kelinci sehat enak untuk diolah', 'hewan ternak', 'unit', 20, 65000, 70000, '6bdc12f9a1f5f4caf8621047f319ead2.jpg'),
(41, 2, 'Lampu LED ', 'LED 12 watt', 'Elektronik', 'unit', 20, 25000, 27000, 'f2592360c8e1dcc1b3a1998a0a34bce1.jpg'),
(42, 2, 'Kabel HDMI', 'HDMI to VGA', 'Elektronik', 'unit', 10, 18000, 20000, '5d659f95041a24dc8384464f7476c1af.jpg'),
(43, 2, 'Kabel Terminal', 'Terminal 3 colokan', 'Elektronik', 'unit', 10, 23000, 25000, '7acc4b185adede95a587e2614e0ae994.jpg'),
(44, 2, 'Charger Samsung', 'Charger Samsung Fast Charging', 'Elektronik', 'unit', 10, 32000, 35000, '8395b03feb45f2b5e405e0b2a10a0c7e.jpg'),
(45, 2, 'Earphone Bluethoot', 'Earphone Bluethoot Kabel', 'Elektronik', 'unit', 10, 21000, 25000, '2ab0385d905391963016aa9ccdd5448b.jpg'),
(46, 2, 'Earphone kabel', 'Earphone kabel', 'Elektronik', 'unit', 10, 24000, 30000, 'b19f25db394c5cfd71bb03c6f1a77e78.jpg'),
(47, 2, 'Celana Jeans', 'Celana Jeans Kualitas Terjamin', 'pakaian', 'unit', 10, 75000, 80000, '7b66633cfbef161e3202755074fee425.jpg'),
(49, 2, 'Kacu Pramuka', 'Kacu pramuka', 'pakaian', 'unit', 15, 12000, 15000, '1861c7017ff6bf32b688203fd200c3fa.jpg'),
(53, 2, 'Saklar Lampu', '2 saklar', 'Elektronik', 'unit', 10, 15000, 18000, '8936e6743f89c7ec81c5f1976efdd480.jpg'),
(54, 2, 'Mouse', 'Logitec', 'Elektronik', 'unit', 10, 50000, 55000, 'd9c21ed00dd22e998fd3ce6682ce08aa.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hutang`
--

CREATE TABLE `hutang` (
  `id_hutang` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sisa_hutang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sisa_jasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id_kas` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_bukti` int(11) NOT NULL,
  `uraian` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `sisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_anggota` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_barang`, `id_anggota`, `jumlah`) VALUES
(25, 53, 8, 1),
(26, 53, 8, 1),
(27, 49, 8, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `koperasi`
--

CREATE TABLE `koperasi` (
  `id_koperasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `badanHukum` varchar(255) NOT NULL,
  `thnBerdiri` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `jumlahAgt` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `koperasi`
--

INSERT INTO `koperasi` (`id_koperasi`, `nama`, `badanHukum`, `thnBerdiri`, `alamat`, `deskripsi`, `jumlahAgt`, `email`, `password`, `rating`, `foto`, `lat`, `lng`) VALUES
(2, 'Rizky abadi', '', 2010, 'sukabrisu', '', 0, 'rizkyabadi@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb', 0, 'user_first.png', -6.932011, 107.622191),
(4, 'BMT Gakopsyah', '', 2008, 'Sukabirus No.A1a', '', 0, 'gakopsyah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, '9bd09529c1b537251b861a204b123c6e.jpeg', -6.942852, 107.659753),
(6, 'Usaha Bersama', '', 2010, 'Sukapura', '', 0, 'admin@usahabersama.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, '9ec4ccd90478f49bb0e0a4dee0b5021d.png', -6.942204, 107.660001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `neraca`
--

CREATE TABLE `neraca` (
  `Id_Neraca` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `AP` varchar(255) NOT NULL,
  `Jenis` varchar(255) NOT NULL,
  `Rincian Kegiatan` varchar(255) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sisa_pinjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sukarela`
--

CREATE TABLE `s_sukarela` (
  `id_sukarela` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sisa_sukarela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_usaha`
--

CREATE TABLE `s_usaha` (
  `id_susaha` int(11) DEFAULT NULL,
  `id_koperasi` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sisa_usaha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktiva_tetap`
--
ALTER TABLE `aktiva_tetap`
  ADD PRIMARY KEY (`id_aktTetap`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`id_koperasi`);

--
-- Indeks untuk tabel `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`Id_Neraca`);

--
-- Indeks untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- Indeks untuk tabel `s_sukarela`
--
ALTER TABLE `s_sukarela`
  ADD PRIMARY KEY (`id_sukarela`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aktiva_tetap`
--
ALTER TABLE `aktiva_tetap`
  MODIFY `id_aktTetap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kas`
--
ALTER TABLE `kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `koperasi`
--
ALTER TABLE `koperasi`
  MODIFY `id_koperasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `neraca`
--
ALTER TABLE `neraca`
  MODIFY `Id_Neraca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s_sukarela`
--
ALTER TABLE `s_sukarela`
  MODIFY `id_sukarela` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
