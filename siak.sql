-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mar 2018 pada 08.50
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_kas`
--

CREATE TABLE `akun_kas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` int(30) NOT NULL,
  `saldo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inter_account_transfer`
--

CREATE TABLE `inter_account_transfer` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `dibayarkan_dari` varchar(255) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `dana_masuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota_kredit`
--

CREATE TABLE `nota_kredit` (
  `id` int(11) NOT NULL,
  `tanggal_diterbitkan` date NOT NULL,
  `nomor_penawaran` varchar(255) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `alamat_penagihan` varchar(10000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `deskripsi_harga` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` double NOT NULL,
  `faktur_penjualan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `tanda_pengenal_bisnis` varchar(255) NOT NULL,
  `alamat_penagihan` varchar(10000) NOT NULL,
  `alamat_surel` varchar(255) NOT NULL,
  `telepon` int(25) NOT NULL,
  `faksimili` varchar(255) NOT NULL,
  `ponsel` int(25) NOT NULL,
  `informasi_tambahan` varchar(255) NOT NULL,
  `pagu_kredit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penawaran_penjualan`
--

CREATE TABLE `penawaran_penjualan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_diterbitkan` date NOT NULL,
  `nomor_penawaran` varchar(255) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `alamat_penagihan` varchar(10000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `deskripsi_harga` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` double NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_penjualan`
--

CREATE TABLE `pesanan_penjualan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_diterbitkan` date NOT NULL,
  `nomor_penawaran` varchar(255) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `alamat_penagihan` varchar(10000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `deskripsi_harga` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` double NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `alamat_pengiriman` varchar(10000) NOT NULL,
  `instruksi_pengiriman` varchar(10000) NOT NULL,
  `diotorisasi_oleh` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reimburse`
--

CREATE TABLE `reimburse` (
  `id` int(11) NOT NULL,
  `tanggal_referensi` date NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `diterima_dari` varchar(255) NOT NULL,
  `diterima_oleh` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `deskripsi_akun` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening_bank`
--

CREATE TABLE `rekening_bank` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `kredit` varchar(255) NOT NULL,
  `rekonsiliasi` varchar(255) NOT NULL,
  `neraca` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_bank`
--

CREATE TABLE `transaksi_bank` (
  `id` int(11) NOT NULL,
  `tanggal_referensi` date NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `akun_bank` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `diterima` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `deskripsi_akun` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_kas`
--

CREATE TABLE `transaksi_kas` (
  `id` int(11) NOT NULL,
  `tanggal_referensi` date NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `akun_bank` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `diterima` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `deskripsi_akun` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_kas`
--
ALTER TABLE `akun_kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inter_account_transfer`
--
ALTER TABLE `inter_account_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota_kredit`
--
ALTER TABLE `nota_kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penawaran_penjualan`
--
ALTER TABLE `penawaran_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_penjualan`
--
ALTER TABLE `pesanan_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reimburse`
--
ALTER TABLE `reimburse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening_bank`
--
ALTER TABLE `rekening_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_kas`
--
ALTER TABLE `transaksi_kas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_kas`
--
ALTER TABLE `akun_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inter_account_transfer`
--
ALTER TABLE `inter_account_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nota_kredit`
--
ALTER TABLE `nota_kredit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penawaran_penjualan`
--
ALTER TABLE `penawaran_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan_penjualan`
--
ALTER TABLE `pesanan_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reimburse`
--
ALTER TABLE `reimburse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekening_bank`
--
ALTER TABLE `rekening_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_kas`
--
ALTER TABLE `transaksi_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
