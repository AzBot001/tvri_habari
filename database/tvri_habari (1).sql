-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2022 pada 17.42
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvri_habari`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_naskah`
--

CREATE TABLE `detail_naskah` (
  `id_detail` int(11) NOT NULL,
  `id_naskah` int(11) NOT NULL,
  `su` varchar(20) NOT NULL,
  `naskah_su` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_naskah`
--

INSERT INTO `detail_naskah` (`id_detail`, `id_naskah`, `su`, `naskah_su`) VALUES
(10, 9, 'sds', ''),
(11, 9, 'sdsdsd', 'fsdgsdgsdgdsgsdg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Kesehatan'),
(3, 'Hukum'),
(4, 'Bencana'),
(5, 'Ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `naskah`
--

CREATE TABLE `naskah` (
  `id_naskah` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kameramen` varchar(50) NOT NULL,
  `tgl_berita` date NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `bobot` int(2) NOT NULL,
  `lead` longtext NOT NULL,
  `naskah` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `naskah`
--

INSERT INTO `naskah` (`id_naskah`, `judul`, `lokasi`, `kameramen`, `tgl_berita`, `kategori`, `bobot`, `lead`, `naskah`) VALUES
(9, 'Nulla exercitationem', 'Ratione sit nobis et', 'Qui minus harum temp', '2000-01-23', 'Sosial', 3, 'Et alias incididunt ', 'Culpa maiores dolor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `naskah_default`
--

CREATE TABLE `naskah_default` (
  `id_naskahdefault` int(11) NOT NULL,
  `judul_naskah` varchar(50) NOT NULL,
  `narasi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `naskah_default`
--

INSERT INTO `naskah_default` (`id_naskahdefault`, `judul_naskah`, `narasi`) VALUES
(3, 'Bridging Iklan', '<p>Pemirsa nantikan sesaat lagi berita hari ini sekian dan salam</p>'),
(4, 'Pengantar Sulampa', '<p>Pemirsa saat ini kita beralih ke pengantar sulampa</p>'),
(5, 'Bridging Ramadhan', '<p>Selamat berbuka ramdahan. marhaban tiba ya ramadhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_cu`
--

CREATE TABLE `program_cu` (
  `id_program_cu` int(11) NOT NULL,
  `nama_program_cu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program_cu`
--

INSERT INTO `program_cu` (`id_program_cu`, `nama_program_cu`) VALUES
(1, 'Mokawali Lipu'),
(2, 'Dunia Olahraga'),
(3, 'Gorontalo Menyapa'),
(4, 'Inspirasi Indonesia'),
(5, 'Lintas Negri'),
(6, 'Tatonu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_naskah`
--
ALTER TABLE `detail_naskah`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `naskah`
--
ALTER TABLE `naskah`
  ADD PRIMARY KEY (`id_naskah`);

--
-- Indeks untuk tabel `naskah_default`
--
ALTER TABLE `naskah_default`
  ADD PRIMARY KEY (`id_naskahdefault`);

--
-- Indeks untuk tabel `program_cu`
--
ALTER TABLE `program_cu`
  ADD PRIMARY KEY (`id_program_cu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_naskah`
--
ALTER TABLE `detail_naskah`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `naskah`
--
ALTER TABLE `naskah`
  MODIFY `id_naskah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `naskah_default`
--
ALTER TABLE `naskah_default`
  MODIFY `id_naskahdefault` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `program_cu`
--
ALTER TABLE `program_cu`
  MODIFY `id_program_cu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
