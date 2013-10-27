-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2013 at 08:12 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wbd1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nomorhp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `email` text NOT NULL,
  `foto` text NOT NULL,
  `jmlhtransaksi` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`username`, `password`, `nama`, `nomorhp`, `alamat`, `provinsi`, `kota`, `kodepos`, `email`, `foto`, `jmlhtransaksi`) VALUES
('rifki', 'kiki', 'Rifki Afina Putri', '0890980999', 'cimahi', 'jawa barat', 'bandung...', 490940, 'rifki@fina-put.ri', '1378714_10201562960288197_1397267956_a.jpg', 0),
('identityope', 'opeopeope', 'Taufik Hidayat', '087825996140', 'jalan mana aja', 'jawa barat', 'bandung', 40262, 'identityope@gmail.com', '1378714_10201562960288197_1397267956_a.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tambahan` text NOT NULL,
  `terjual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `gambar`, `kategori`, `harga`, `jumlah`, `keterangan`, `tambahan`, `terjual`) VALUES
(1, 'Beras 3 kg', 'images/beras.jpg', 'Makanan Pokok', 12000, 10, 'Beras super langsung dari sawah pilihan.', '', 0),
(2, 'Momogi Rasa Keju', 'images/momogikeju.jpg', 'Makanan Ringan', 1000, 100, 'Momogi rasa keju. Nagih abis lho.', '', 0),
(3, 'Momogi Rasa Jagung Bakar', 'images/momogijagung.jpg', 'Makanan Ringan', 1000, 100, 'Momogi rasa jagung bakar. Temennya momogi keju.', '', 0),
(4, 'Marimas', 'images/marimas.jpg', 'Minuman', 500, 40, 'Marimaaas~ aww! Minuman menyegarkan. Bukan telenovela.', '', 0),
(5, 'Fanta', 'images/fanta.jpg', 'Minuman', 500, 10, 'Minuman soda yang bisa bikin gembira.', '', 0),
(6, 'Bigcola', 'images/bigcola.jpg', 'Minuman', 3000, 12, 'Cola tapi big. Bigcola.', '', 0),
(7, 'Katel', 'images/katel.jpg', 'Alat Dapur', 5000, 30, 'Katel atau disebut juga wajan, adalah alat untuk memasak.', '', 0),
(8, 'Panci', 'images/panci.jpg', 'Alat Dapur', 8000, 12, 'Panci untuk masak yang berkuah-kuah. Warnanya juga pink unyu lucu gitu.', '', 0),
(9, 'Indomie', 'images/indomie.jpg', 'Makanan Siap Saji', 800, 100, 'Makanan favorit mahasiswa terutama anak-anak kosan. Lumayan kalau udah bosen pinter bisa dimakan setiap hari.', '', 0),
(10, 'Popmie', 'images/popmie.jpg', 'Makanan Siap Saji', 2000, 23, 'Saingannya indomie, lebih portable, bisa dibawa kemana-mana.', '', 0),
(11, 'Buku Binder', 'images/binder.jpg', 'Alat Kantor', 5000, 11, 'Buku binder buat nyatet.', '', 0),
(12, 'Baju Koko', 'images/bajukoko.jpg', 'Pakaian', 50000, 10, 'Baju keren buat cowok-cowok kece anak gaul masjid.', '', 0),
(13, 'Tahu', 'images/tahu.jpg', 'Makanan Pokok', 500, 100, 'Makanan yang terbuat dari kedelai. Temennya tempe.', '', 0),
(14, 'Tempe', 'images/tempe.jpg', 'Makanan Pokok', 800, 90, 'Makanan yang terbuat dari kedelai. Temennya tahu.', '', 0),
(15, 'Jaket', 'images/jaket.jpg', 'Pakaian', 80000, 15, 'Jaket trendy untuk menghangatkan tubuhmu.', '', 0),
(16, 'Kaos', 'images/kaos.jpg', 'Pakaian', 60000, 15, 'Kaos santai dengan berbagai pilihan warna dan ukuran.', '', 0),
(17, 'Kemeja', 'images/kemeja.jpg', 'Pakaian', 80000, 10, 'Kemeja rapi dan gaul.', '', 0),
(18, 'Nyam Nyam', 'images/nyamnyam.jpg', 'Makanan Ringan', 1500, 70, 'Jajanan masa kecil.', '', 0),
(19, 'Pulpen', 'images/pulpen.jpg', 'Alat Kantor', 2000, 50, 'Pulpen dengan tinta pilihan yang cocok untuk semua kertas.', '', 0),
(20, 'Tempat Pensil', 'images/tempatpensil.jpg', 'Alat Kantor', 10000, 60, 'Tempat untuk menaruh pensil dan alat tulis lainnya.', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kartu_kredit`
--

CREATE TABLE IF NOT EXISTS `kartu_kredit` (
  `owner` varchar(20) NOT NULL,
  `card_number` char(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `expired` varchar(10) NOT NULL,
  PRIMARY KEY (`card_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_kredit`
--

INSERT INTO `kartu_kredit` (`owner`, `card_number`, `nama`, `expired`) VALUES
('q', '2172310', 'qq', '10-10-2020'),
('a', 'a', 'a', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
