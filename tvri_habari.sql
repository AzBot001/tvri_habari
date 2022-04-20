-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2022 pada 09.17
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

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
(3, 'Ad cupidatat dolorem', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_naskah`
--
ALTER TABLE `detail_naskah`
  ADD PRIMARY KEY (`id_detail`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_naskah`
--
ALTER TABLE `detail_naskah`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `naskah`
--
ALTER TABLE `naskah`
  MODIFY `id_naskah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `naskah_default`
--
ALTER TABLE `naskah_default`
  MODIFY `id_naskahdefault` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
